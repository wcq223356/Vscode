<?php

$username = trim($_POST['username']);
$userpwd = $_POST['userpwd'];

//echo $username . $userpsd;

if (empty($username) || empty($userpwd)) {
    die(json_encode([
        'stateCode' => 401,
        'stateMsg' => 'data is empty'
    ]));

}

if ($username != 'admin' || $userpwd != '123456') {
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'userName or userPassword is error'
    ]));
}

if ($username == 'admin' && $userpwd == '123456') {
    die(json_encode([
        'stateCode' => 200,
        'stateMsg' => 'succeed'
    ]));

}


