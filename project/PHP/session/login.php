<?php

include 'conf.php';

//登录后界面


if(isset($_SESSION['logName']) && $_SESSION['logName'] != '') {
    echo '你好：' . $_SESSION['logName'];
} elseif (is_null($_COOKIE['logName'])) {
    header('location:test.php');
    exit();
} else {
    echo '你好：' . $_COOKIE['logName'];
    $_SESSION['logName'] = $_COOKIE['logName'];
}

echo '<br>';
echo '<a href="logout.php">退出</a>';
echo '<br>';
var_dump($_SESSION['logName']);