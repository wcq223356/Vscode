<?php

include 'conf.php';
include 'checktoken.php';

//已经登录

echo '你好呀，' . $_SESSION['log']['name'] . '<a href="logout.php">退出登录</a>>';

