<?php

include 'conf.php';

//退出登录界面


//清除session
unset($_SESSION['logName']);
session_destroy();

//清cookie
setcookie('logName', null, time()-100, '/', 'aaa.com');

header('location:test.html');