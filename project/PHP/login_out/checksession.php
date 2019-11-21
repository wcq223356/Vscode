<?php

include 'conf.php';

$nowpage = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1);


//验证session

if(
    (!isset($_SESSION['log'])
    || !is_array($_SESSION['log'])
    || $_SESSION['log']['name'] != 'admin')
) {
    if($nowpage != 'log.php') {
        session_destroy();
        header('location:log.php');
    }
} else {
    if ($nowpage == 'log.php') {
        header('location:logon.php');
    }
}