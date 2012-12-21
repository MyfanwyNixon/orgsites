<?php

header('Content-Type: text/html; charset=utf-8');
print file_get_contents('header.html');

$file = file_get_contents('http://www.mysociety.org/donate/');
$file = preg_replace('#^.*?<article class="article">#s', '', $file);
$file = preg_replace('#</article>.*#s', '', $file);
print $file;

print file_get_contents('footer.html');

