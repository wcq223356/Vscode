<?php

require '../function.php';

$Function = new PrintWater();

$file = $_FILES['file'];

var_dump($file);

//创建原图片目录
$dirOriginal = './original';
if (!is_dir($dirOriginal)) {
    mkdir($dirOriginal) or die('创建原目录失败');
}
move_uploaded_file($file['tmp_name'], $dirOriginal.'/'. $file['name']);

//创建压缩图片目录
$dirZip = './zipPic';
if (!is_dir($dirZip)) {
    mkdir($dirZip) or die('创建压缩图片目录失败');
}

//原文件路径
$OrgPath = $dirOriginal.'/'. $file['name'];

//压缩图片路径
$zipPath = $dirZip.'/'.$file['name'];

//压缩图片方法
$Function->pigZip($OrgPath, $zipPath, 500);

//创建水印图片目录
$dirWater = './waterPic';
if (!is_dir($dirWater)) {
    mkdir($dirWater) or die('创建压缩图片目录失败');
}

//打好水印图片的路径
$markPath = $dirWater.'/'.$file['name'];

//水印图片路径
$dirWater = '../img/小狗.png';

$Function->pigWater($OrgPath, $dirWater, $markPath);

echo json_encode([
    'statusCode' => 200,
    'statusMsg' => 'succeed',
    'data' => [
        'markPath' =>  $markPath,
        'zipPath ' => $zipPath,
        'OrgPath' => $OrgPath
    ]
]);