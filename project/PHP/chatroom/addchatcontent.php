<?php

//新增聊天内容

$user = trim($_POST['user']);
$txt = $_POST['txt'];


//验证内容
if (empty($user) || empty($txt)) {
    die(json_encode([
       'stateCode' => 401,
        'stateMsg' => 'data is empty'
    ]));
}

//写入JSON+

$jsonStr = file_get_contents('chat.json');
$jsonArr = json_decode($jsonStr, true);
$jsonArr[] = [
    'user' => $user,
    'txt' => $txt,
    'time' => date('H:i', time())
];

file_put_contents('chat.json', json_encode($jsonArr));

echo  json_encode([
    'stateCode' => 200,
    'stateMsg' => 'succeed',
    'data' => [
        'user' => $user,
        'txt' => $txt,
        'time' => date('H:i', time())
    ]
]);
