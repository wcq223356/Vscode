<?php

include 'conf.php';

//退出登录

unset($_SESSION['log']);
session_destroy();


file_put_contents('data', '');
unlink('data');   //删除文件夹

header('location:log.php');