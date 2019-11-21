<?php

include './conf/config.php';

//验证session


if(
    !isset($_SESSION['user'])
    || !is_array($_SESSION['user'])
    || empty($_SESSION['user']['name'])
    || empty($_SESSION['user']['path'])
) {
    session_destroy();
    die(json_encode([
        'statusCode' => 400,
        'statusMsg'  => '登录失败'
    ]));
}
//这一排主要是为了，截取字符串‘files/’
$tmp_path = substr($_SESSION['user']['path'], 0, strpos($_SESSION['user']['path'], '/')+1);
if($tmp_path !== $conf['rootPath'] ) {
    die(json_encode([
        'statusCode' => 400,
        'statusMsg' => '登录失败'
    ]));
}