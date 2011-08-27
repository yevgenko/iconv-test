<?php
error_reporting(E_ALL);
$string = "Some text";
$newstr = iconv("UTF-8", "UTF-16BE", $string);
print "Converted: " .$newstr;
