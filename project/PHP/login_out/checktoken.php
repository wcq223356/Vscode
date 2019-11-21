<?php

include 'conf.php';

//验证token

$fileToken = file_get_contents('data');

if ($fileToken != $_SESSION['log']['token']) {
    unset($_SESSION['log']);
    session_destroy();
    header('location:log.php');
}