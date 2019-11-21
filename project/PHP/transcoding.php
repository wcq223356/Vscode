<?php


$str = 'jkj.223232';
echo md5($str);
echo '<br>';

$url = 'sss.ssad.sdaa.com&';

echo urlencode($url);
echo '<br>';
echo urldecode($url);

echo '<br>';

echo base64_encode($str);
echo '<br>';

echo crypt($str, 'AAAA');

echo '<br>';
echo sha1($str);


