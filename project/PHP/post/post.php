<?php

include 'check-function.php';
//接收表单数据
//$url = 'http://localhost/project/temporary/post.html';

if ($_GET['act'] == 'login' && $_SERVER['HTTP_REFERER'] != '') {  //提交数据，对数据进行处理

    $userName = trim($_POST['userName']);
    $userPasswd = trim($_POST['userPasswd']);
    $userMail = trim($_POST['userMail']);
    $userPhone = trim($_POST['userPhone']);
    $sex = $_POST['sex'];
    $hobby = implode(',', $_POST['hobby']);
    $other = str_replace(PHP_EOL, '<br>', $_POST['other']);


    if (empty($userName) || empty($userPasswd) || empty($userMail) || empty($userPhone)) {
        checkBack('提示：数据不能为空！');
    }

    if ($sex != 1 && $sex != 0) {
        checkBack('提示：数据有误！');
    }

    $sex = ($sex == 0) ? '女' : '男';

    echo "个人信息：        <br>
          用户名：$userName <br>
          密码：$userPasswd <br>
          邮箱：$userMail   <br>
          手机号：$userPhone<br>
          性别：$sex        <br>
          爱好：$hobby      <br>
          其他：$other      <br>
    ";


//    echo $_SERVER['PHP_SELF'];         当前php文件路径
//    echo $_SERVER['REQUEST_METHOD'];    当前数据通过什么方式提交
//    echo $_SERVER['HTTP_REFERER'];        跳转当前页的前一页地址
}
