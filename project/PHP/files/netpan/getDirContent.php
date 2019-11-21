<?php

//配置文件
include './conf/config.php';
require './conf/function.php';
//验证session
require 'checkSession.php';  //include是包含，require是请求，包含是需要时调用，请求是进入时就已经运行
//方法类
require '../Myclass.php';



//获取用户目录

//$_POST['nowPath'];    //ajax传递过来的根路径‘/’
//$_SESSION['user']['path'];   //用户登录时存储的路径，也就是专属用户目录的路径‘files/admin’
//拼在一起相当于是用户目前所在的位置就是自己的专属目录‘files/admin/’
$nowPath = $_SESSION['user']['path'].$_POST['nowPath'];

//实例化方法类
$Myclass = new Myclass();
$items = $Myclass->readDir($nowPath);
$data = [];
//获取目录信息
if (is_array($items['dir']) && count($items['dir']) >0 ) {
    foreach ($items['dir'] as $onceDir) {
        $data['dir'][] = [
            'name' => $onceDir,
            'time' => date('Y-m-d H:i:s',filemtime($nowPath.$onceDir)),
            'size' => sizeUnit($Myclass->getDirSize($nowPath.$onceDir)),

        ];

    }
}

//获取文件信息
if (is_array($items['file']) && count($items['dir']) >0 ) {
    foreach ($items['file'] as $onceFile) {
        $data['file'][] = [
            'name' => $onceDir,
            'time' => date('Y-m-d H:i:s',filemtime($nowPath.$onceFile)),
            'size' => sizeUnit(filesize($nowPath.$onceFile)),

        ];

    }
}

echo json_encode([
    'statusCode' => 200,
    'statusMsg' => 'succeed',
    'data' => $data,
]);