<?php

session_start();

$fontcode = $_SESSION['fontCode'];

$code = $_POST['code'];

if (empty($code) || $code != $fontcode) {
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