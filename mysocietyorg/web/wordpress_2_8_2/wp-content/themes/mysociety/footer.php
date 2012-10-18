
<div id="divFooter">
<?
    if ($_SERVER['SERVER_NAME'] != 'cee.mysociety.org') {
        print file_get_contents(TEMPLATEPATH . '/footer.html');
    }
?>

<p>
mySociety is a project of <a href="http://www.ukcod.org.uk/">UK Citizens Online Democracy</a> (UKCOD).
UKCOD is a registered charity in England and Wales, no. 1076346.
Its company number is 03277032, and mySociety Ltd's is 05798215.
</p>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</div>
</div>
</div>

<?php

wp_footer();

?>
</body>
</html>
