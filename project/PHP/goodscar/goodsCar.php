<?php

include 'function.php';
include 'conf.php';


$oldCookie = $_COOKIE[$conf['cookie']['cookie_prefix'].$conf['cookie']['car_name']];
$gid = intval($_GET['gid']);
$num = (intval($_GET['num']) <= 0) ? 1 : intval($_GET['num']);

if (is_null($oldCookie)) {    //原购物车是空的（相当于cookie是空的），创建一个新的cookie
    addCookie($conf['cookie']['cookie_prefix'].$conf['cookie']['car_name'], json_encode([
        $gid => $num
    ]));
} else {  //原购物车不为空，相当于已经存在了对应的cookie

    $oldCookie = json_decode($oldCookie, true);  //字符串转数组
    if(array_key_exists($gid, $oldCookie)) {   //该商品已经在购物车上了，追加数量
        $oldCookie[$gid] += $num;
    } else {     //表示商品没有在购物车上，创建一个新的数组
        $oldCookie[$gid] = $num;
    }

    addCookie($conf['cookie']['cookie_prefix'].$conf['cookie']['car_name'], json_encode($oldCookie));
}

echo "<script>alert('添加成功'); window.location.href='carList.php';</script>";