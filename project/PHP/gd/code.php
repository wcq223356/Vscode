<?php


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/17
 * Time: 20:33
 *
 * 验证码
 *
 */

session_start();


$num = 4; //验证码位数
$w = 80;
$h = 28;

$str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKMNPQ";

$code = '';
for ($i = 0; $i < $num; $i++) {
    $code .= $str[mt_rand(0, strlen($str) - 1)];
}


//将生成的验证码写入session，备验证页面使用
$_SESSION["codes"] = $code;
//创建图片，定义颜色值
header("Content-type: image/png");


$im = imagecreate($w, $h); //在内存中创建一张图  $w图的宽 $h图的高

$black = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120)); //字符和干扰点颜色
$gray = imagecolorallocate($im, 118, 151, 199); //边框颜色
$bgcolor = imagecolorallocate($im, 255, 255, 255); //背景颜色


//画背景
imagefilledrectangle($im, 0, 0, $w, $h, $bgcolor); //画矩形区域着色 0 0起点坐标 $w $h终点坐标
//画边框
imagerectangle($im, 0, 0, $w - 1, $h - 1, $gray); //画矩形
//imagefill($im, 0, 0, $bgcolor);


//在画布上随机生成大量点，起干扰作用;
for ($i = 0; $i < 80; $i++) {
//    imagesetpixel($im, rand(0, $w), rand(0, $h), $black);
}

//将字符随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
//imagestring($image, $font, $x, $y, $string, $color)

$strx = rand(10, 20); // 10 + 15 + 10 + 20
for ($i = 0; $i < $num; $i++) {
    $stry = rand(1, 6);
    imagestring($im, mt_rand(2, 5), $strx, $stry, $code[$i], $black);
    $strx += rand(10, 20); //控制验证码每个字符的间距是随机的
}
imagepng($im);
imagedestroy($im);