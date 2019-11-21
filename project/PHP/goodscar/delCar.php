<?php

include 'function.php';

//删除购物车操作

$gid = intval($_GET['gid']);

$cart = json_decode($_COOKIE['Test_goods_car'], true);

if(!isset($cart[$gid])) {   //判断数组中是否定义了$gid的值，意思也就是是否存在
    die("<script>history.back()</script>");
}
unset($cart[$gid]);

addCookie('Test_goods_car', json_encode($cart));

echo "<script>alert('删除成功！'); window.location.href='carList.php'; </script>";