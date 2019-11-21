<?php

//判断来源地址
$referArray = explode('/',$_SERVER['HTTP_REFERER']);
//explode 表示把字符串根据什么东西分割成数组
$referHostName = $referArray[0] . '//' .$referArray[2];
if($referHostName !== 'http://localhost') {
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'error'
    ]));
}

//当前的地址
$localhost = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if($localhost !== 'localhost/project/PHP/files/upload.php') {
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'error'
    ]));
}

//创建目录，判断条件如果该目录不存在则创建
$Path = 'load/';
$username = $_POST['username'];
$filePath = $Path.$username;
if(!is_dir($filePath)) {
    mkdir($filePath);
}


$file = $_FILES['file'];
/**
 * name 上传文件名
 * type 类型
 * tmp_name  临时文件路径
 * error 错误编号
 * size 文件大小
 */

var_dump($file);


// 判断类型
$allowExt = ['.jpg', '.png', '.gif'];
$fileExt = substr($file['name'], strrpos($file['name'], '.'));  //取文件的后缀名
if(!in_array($fileExt, $allowExt)) {
    die('错误：文件格式不符合');
}

var_dump($fileExt);

//判断大小
$allowFileSize = 102400;
if ($file['size'] > $allowFileSize) {
    die('错误：文件要小于100KB');
}


//新文件命名
$newFileName = uniqid() . $fileExt;

var_dump($newFileName);


//上传
move_uploaded_file($file['tmp_name'], $filePath.'/'. $newFileName);
echo json_encode([
    'stateCode' => 200,
    'stateMsg' => 'succeed',
    'data' =>    $filePath.'/'. $newFileName
]);
?>
