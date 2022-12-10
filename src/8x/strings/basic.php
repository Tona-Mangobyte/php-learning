<?php

$substr = substr('FooBar', 42, 3); // "" in PHP >=8.0, false in PHP < 8.0
$mb_substr = mb_substr('FooBar', 42, 3); // "" in PHP >=8.0, false in PHP < 8.0
$iconv_substr = iconv_substr('FooBar', 42, 3); // "" in PHP >=8.0, false in PHP < 8.0
$grapheme_substr = grapheme_substr('FooBar', 42, 3); // "" in PHP >=8.0, false in PHP < 8.0

print_r('substr: ' . $substr . PHP_EOL);
print_r('mb_substr: ' . $mb_substr . PHP_EOL);
print_r('iconv_substr: ' . $iconv_substr . PHP_EOL);
print_r('grapheme_substr: ' . $grapheme_substr . PHP_EOL);