<?php

//删除上传文件

$src = $_GET['src'];

if (!file_exists($src)) {
    die(json_encode([
        'statusCode' => 404,
        'statusMsg'  => 'not found'
    ]));
}

unlink($src) or die(json_encode([
    'statusCode' => 500,
    'statusMsg'  => 'delete fail'
]));

echo json_encode([
    'statusCode' => 200,
    'statusMsg'  => 'ok'
]);