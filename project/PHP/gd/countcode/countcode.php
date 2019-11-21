<?php

//文字水印

session_start();

// Set the content-type
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(200, 30);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// The text to draw
$num1 = mt_rand(0,9);
$num2 = mt_rand(0,9);
$type = ['+', '-', '*'];
$option = $type[mt_rand(0,2)];

$text = $num1 . $option . $num2 . '=?';

eval("\$result=$num1$option$num2;");
//存session
$_SESSION["countCode"] = $result;

// Replace path by your own font path
$font = 'e:\Vscode\project\PHP\gd\img\arialbi.ttf';

// Add some shadow to the text
imagettftext($im, 20, 0, 61, 26, $grey, $font, $text);

// Add the text
imagettftext($im, 20, 0, 60, 25, $black, $font, $text);

for ($i = 0; $i < 80; $i++) {
    imagesetpixel($im, rand(0, 200), rand(0, 30), $black);
}

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
