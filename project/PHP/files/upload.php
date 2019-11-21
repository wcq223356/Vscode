<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button name="btn">上传</button>
    </form>


<?php
if (isset($_POST['btn'])) {

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
    $allowFileSize = 10240000;
    if ($file['size'] > $allowFileSize) {
        die('错误：文件要小于1M');
    }


    //新文件命名
    $newFileName = uniqid() . $fileExt;

    var_dump($newFileName);


    //上传
    move_uploaded_file($file['tmp_name'], 'file/'. $newFileName);
    echo '上传成功';

}




?>


</body>
</html>














