<?php

//图片水印
$imageUrl = 'a.jpg';

$imageInfo = getimagesize($imageUrl);

$imageType = image_type_to_extension($imageInfo[2], false);

$fun = "imagecreatefrom$imageType"; //创建图片的函数名

$image = $fun($imageUrl);

$mark = imagecreatefrompng('water.png');  //

//合并图片
imagecopy($image, $mark, 0, 0, 0, 0, 188, 84);

imagedestroy($mark); //销毁水印图片
header('content-type:'.$imageInfo['mime']);

$funs = "image$imageType";

$funs($image, '3.jpg');


imagedestroy($image);


