<?php



$str = '框给巨化股份会计师费空间十分就开始了很多';

echo mb_strlen($str);
echo '<br>';

echo mt_rand(0, mb_strlen($str));

echo '<br>';


//取字符串中四个随机的字


//echo mb_substr($str, mt_rand(0, mb_strlen($str)), 1);

function qwae ($str)
{
    $str2 = '';
    for ($i = 0; $i < 4; $i++){
        $str2 .= mb_substr($str, mt_rand(0, mb_strlen($str)-1), 1);
    }
    return $str2;
}
echo qwae ($str);

//    $str2 = '';
//    for ($i = 0; $i < 4; $i++){
//        $str2 .= mb_substr($str, mt_rand(0, mb_strlen($str) -1), 1);
//    }
//
//    echo $str2;
