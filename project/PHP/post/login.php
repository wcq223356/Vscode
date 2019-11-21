<?php

include 'check-function.php';
//$url = 'http://localhost/project/temporary/login.html';

if ($_GET['act'] == 'login' && $_SERVER['HTTP_REFERER'] != '') {
    $logName = trim($_POST['logName']);
    $logPass = $_POST['logPass'];

    if (empty($logName) || empty($logPass)) {
        checkBack('提示：账号或者密码不能为空！');
    }

    if ($logName != 'admin' && $logPass != '123456') {
        checkBack('提示：账号和者密码错误！');
    } elseif ($logName != 'admin') {
        checkBack('账号错误');
    } elseif ($logPass != '123456') {
        checkBack('密码错误');
    }

   $remember = $_POST['remember'];
    if ($remember == '1') {
        setcookie('Test_user_info', json_encode([
            $logName => $logPass
        ]), time()+3600, '/');
    }

}
//现在的cookie是json字符串，需要把字符串转成数组，键名是用户名，键值是密码
$userInfo = json_decode($_COOKIE['Test_user_info'], true);
//可以使用foreach遍历数组，取相应的信息
//foreach ($userInfo as $key => $value) {
//该方法因为没有执行只是用来遍历，所以没有意义，我们可以使用PHP内置函数来实现
//}

reset($userInfo);  //重置数组指针，指向第一个数据元素
$key = key($userInfo);       //取当前数组的键名
$value = current($userInfo); //取当前键名对应的键值

