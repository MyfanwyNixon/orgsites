<?

if ( !$newsletter ) {
    exit();
}

$LIVE = OPTION_NEWSLETTER_LIVE;

$text = $_POST['text'];
$subject = $_POST['subject'];
if ($text && $subject) {
	$email = '';
	if ($LIVE && $_POST['send-test']) {
		$email = $email_test;
		$html = call("perl create-preview email-html $newsletter $email", "$subject\n\n$text");
		print "<p><strong>Test email sent</strong></p>";
	}
	if ($LIVE && $_POST['send-real']) {
		$email = $email_live;
		$html = call("perl create-preview email-html $newsletter $email", "$subject\n\n$text");
		print "<p><strong>Real email sent (can still be cancelled from mailman approval)</strong></p>";
	}
	$html = call("perl create-preview html $newsletter", "$subject\n\n$text");
	print "<h2>HTML Preview</h2> <div style='width: 640px; border: solid 1px #999999;'>$html</div>";
	$plain = call("perl create-preview plain $newsletter", "$subject\n\n$text");
	print "<h2>Plain Preview</h2> <pre>" . htmlspecialchars($plain) . "</pre>";
}

?>

    <h2>Form for <?php echo $newsletter; ?> newsletter</h2>

<form method="post">
Subject: <input type="text" name="subject" value="<?=htmlspecialchars($subject)?>">
<br><textarea name="text" cols=80 rows=20><?=htmlspecialchars($text)?></textarea>
<p>
<input type="submit" name="preview" value="Preview">
<? if ($LIVE) { ?>
<input type='submit' name="send-test" value='Send to test list'>
<input type='submit' name="send-real" value='Send to real list' onclick="return confirm('Are you sure?');">
<? } ?>
</p>
</form>

<?
print '<h2>Example text from July to show formatting</h2> <pre>';
print htmlspecialchars(file_get_contents('july-2011.md'));
print '</pre>';

function call($cmd, $in) {
	$process = proc_open($cmd, array(
		0 => array('pipe', 'r'),
		1 => array('pipe', 'w'),
	), $pipes);
	fwrite($pipes[0], $in);
	fclose($pipes[0]);
	$out = stream_get_contents($pipes[1]);
	fclose($pipes[1]);
	$ret = proc_close($process);
	return $out;
}

