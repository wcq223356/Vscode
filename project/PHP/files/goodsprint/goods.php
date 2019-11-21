<?php

$file = $_FILES['file'];
//$goodsName = $_POST['goodsName'];
//$goodsPrice = $_POST['goodsPrice'];
//$goodsType = $_POST['goodsType'];
//var_dump($goodsType,$goodsPrice,$goodsName);
//var_dump($file);


//if (empty($goodsName) || empty($goodsPrice) || empty($goodsType)) {
//    echo json_encode([
//       'statusCode' => 400,
//       'statusMsg' => '数据不存在'
//    ]);
//}


//var_dump(implode($file));

/**
 * name 上传文件名
 * type 类型
 * tmp_name  临时文件路径
 * error 错误编号
 * size 文件大小
 */


// 判断类型
$allowExt = ['.jpg', '.png', '.gif'];
$fileExt = '';
for($a = 0; $a < count($file['name']); $a ++) {
    $fileExt = substr($file['name'], strrpos($file['name'], '.'));  //取文件的后缀名

    var_dump($file['name']);

//    if(!in_array($fileExt, $allowExt)) {
//        die('错误：文件格式不符合');
//    }
}
die();


//
//
////判断大小
//$allowFileSize = 10240000;
//if ($file['size'] > $allowFileSize) {
//    die('错误：文件太大');
//}


//新文件命名
$newFileName = rand(0, 9).time();
$filePath = 'upload/';

$newFile = [];
for($i = 0; $i < count($file['name']); $i++ ) {
    move_uploaded_file($file['tmp_name'][$i], $filePath .$file['name'][$i]);
    $newFile[] = $filePath .$file['name'][$i];
}

//上传
echo json_encode([
    'stateCode' => 200,
    'stateMsg' => 'succeed',
    'data' =>  $newFile
]);