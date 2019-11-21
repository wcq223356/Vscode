<?php

session_start();

$countCode = $_SESSION['countCode'];

$code = $_POST['code'];

if (empty($code) || $code != $countCode) {
    echo json_encode([
       'statusCode' => 401,
       'statusMsg' => 'data is error'
    ]);

} else {
    echo json_encode([
        'statusCode' => 200,
        'statusMsg' => 'succeed'
    ]);
}