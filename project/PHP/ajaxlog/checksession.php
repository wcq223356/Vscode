<?php

include 'startsession.php';

//验证session

if ( !isset($_SESSION['username']) || empty($_SESSION['username']) || !file_get_contents('tmp'.$_SESSION['username'])) { //判断session是否存在，或者为空
    die(json_encode([
        'stateCode' => 401,
        'stateMsg' => 'Session is not exists or empty'
    ]));
}

//挤出登录
$token = file_get_contents('tmp'.$_SESSION['username']);
if ($_SESSION['usertoken'] != $token) {
    unset($_SESSION['username']);
    session_destroy();
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'User is login out'
    ]));
}


    echo json_encode([
        'stateCode' => 200,
        'stateMsg' => 'succeed',
        'stateData' => $_SESSION['username']
    ]);

