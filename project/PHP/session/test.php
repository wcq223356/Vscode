<?php

include 'conf.php';

//验证用户名和密码

$logName = trim($_POST['logName']);
$logPass = $_POST['logPass'];

if ($logName != 'admin' || $logPass != '123456') {
    die("<script>alert('账号或者密码错误！');history.back();</script>");
}


//session_start();
//存session
$_SESSION['logName'] = $logName;

//存cookie
setcookie('logName', $logName, time()+3600, '/', 'aaa.com');

header('Location:login.html');

