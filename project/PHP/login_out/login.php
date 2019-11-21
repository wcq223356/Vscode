<?php

include 'conf.php';

//验证登录
$logName = $_POST['logName'];
$logPass = $_POST['logPass'];

if ($logName != 'admin' && $logPass != '123456') {
    die( "<script>alert('用户名或者密码错误！'); history.back();</script>>");
}

$_SESSION['log']['name'] = $logName;
$_SESSION['log']['token'] = time();

file_put_contents('data', $_SESSION['log']['token']);

header('location:logon.php');