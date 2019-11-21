<?php

include 'startsession.php';

//验证登录
//var_dump( $_POST['username']);
//var_dump( $_POST['userpass']);

$username = $_POST['username'];
$userpass = $_POST['userpass'];

if (empty($username) || empty($userpass)) {
    die(json_encode([
        'stateCode' => 401,
        'stateMsg' => 'data is empty'
    ]));
}

$userInfo = file_get_contents('userinfo.json');  //获取就送文件，格式为字符串
$userArr = json_decode($userInfo, true); //字符串转数组

$usernameArr = [];      //创建两个空数组分别用于存放用户名和密码，后续通过遍历取值，因为
$userpassArr = [];      //是按照顺序，因此用户名和密码的键值是对应的

foreach ($userArr as $user) {           //遍历数组取值填充数组
    $usernameArr[] = $user['username'];
    $userpassArr[] = $user['userpass'];
}

//验证用户名
if(!in_array($username, $usernameArr )) {    //判断通过post传来的用户名参数是否存在于json取出的用户名数组中
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'username is not exists'
    ]));
}

//如果存在用户名验证通过，表示输入的用户名存在，继续验证密码

//验证密码
$userKey = array_search($username, $usernameArr);  //搜索用户名在用户名数组中对应的键值
if ($userpassArr[$userKey] != $userpass) {      //取和用户名对应键值的密码,和输入的密码进行比较判断
    die(json_encode([
        'stateCode' => 402,
        'stateMsg' => 'userpass is error'
    ]));
}

$_SESSION['username'] = $username;
$_SESSION['usertoken'] = uniqid();  //记录唯一标识，并把该表示存入文件

$tmpFile = 'tmp'. $username;
if (!file_exists($tmpFile)) {
    touch($tmpFile);
}

file_put_contents($tmpFile, $_SESSION['usertoken']);

echo json_encode([
    'stateCode' => 200,
    'stateMsg' => 'succeed'
]);