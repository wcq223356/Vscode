<?php


//获取JSON文件

if(file_exists('chat.json')) {
    echo file_get_contents('chat.json');
} else {
    echo json_encode([
        'stateCode' => 401,
        'stateMsg' => 'data is undefined'
    ]);
}