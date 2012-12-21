<?php

$file = file_get_contents('http://www.mysociety.org/donate/');
$file = preg_replace('#href="/#', 'href="http://www.mysociety.org/', $file);
$file = preg_replace('#(rel="stylesheet" href=")http://www.mysociety.org/wp-content/themes/mysociety/#', '$1/nonsecure/', $file);
$file = preg_replace('#src="/wp-content/themes/mysociety/#', 'src="/nonsecure/', $file);
print $file;

