<?php

include 'conf/config.php';

//验证登录
$username = $_POST['username'];
$userpwd = $_POST['userpwd'];

//验证用户名、密码
if (empty($username) || empty($userpwd)) {
    die(json_encode([
        'statusCode' => 400,
        'statusMsg'  => 'data is wrong'
    ]));
}

//创建与用户相关的目录

if(!is_dir($conf['rootPath'].$username)) {
    mkdir($conf['rootPath'].$username) or die('创建目录失败');
}

//存储session

$_SESSION['user']['name'] = $username;
$_SESSION['user']['path'] = $conf['rootPath'].$username;

echo json_encode([
    'statusCode' => 200,
    'statusMsg'  => 'succeed'
]);