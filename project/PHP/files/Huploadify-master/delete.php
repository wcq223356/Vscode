<?php

$src = $_GET['src'];

if (!file_exists($src)) {
    die(json_encode([
        'stateCode' => 404,
        'stateMsg'  => 'not found'
    ]));
}

unlink($src) or die(json_encode([
    'stateCode' => 500,
    'stateMsg'  => 'delete fail'
]));

echo json_encode([
    'stateCode' => 200,
    'stateMsg'  => 'ok'
]);
