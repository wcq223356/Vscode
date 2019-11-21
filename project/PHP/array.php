<?php

//数组

//数组的创建
//方式一：
//$arr = array(1, 2, 3, 4);
//方式二：
//$arr[0] = '1';
//$arr[1] = '2';
//$arr[2] = '3';
//方式三
//$arr = [1, 2, 3, 4];

//$arr = array(10, 20, 30, 40, 50); //索引数组
//
////关联数组
//$arr2 = array(
//    'a' => 'A',
//    'b' => 'B',
//    'c' => 'C'
//);

//$arr = [
//    10,
//    20,
//    30,
//    50,
//    'a' => 'A',
//    'b' => 'B',
//    80,
//    10 => 100,
//    200,
//    5 => 50,
//    4 => 88,
//    300
//];

//echo $arr;
//print $arr;
//print_r($arr);
//var_dump($arr);

//for ($i=0; $i<count($arr); $i++) {
//    echo $arr[$i];
//}

//foreach ($arr as $key => $value) {
//    echo $key  .'=>'. $value . '<br>';
//}

//$arr = [
//    [
//        'A' => 'a',
//        'B' => 'b'
//    ],
//    [10, 20],
//    ['x', 'y', 'z'],
//    [
//        'user1' => ['name'=>'root', 'pwd' => '123123']
//    ],
//    'Admin'
//];
//
//foreach ($arr as $key => $value) {
//    if (!is_array($value)) {
//
//    } else {
//        foo();
//    }


//冒泡排序
//$arr = [1, 5, 23, 11, 15, 30];
//$num = 0;
//for ($i = 0 ; $i<= count($arr); $i++) {
//    for($j = $i+1; $j < count($arr); $j++) {
//        if($arr[$i] > $arr[$j]) {
//            $num = $arr[$i];
//            $arr[$i] = $arr[$j];
//            $arr[$j] = $num;
//        }
//    }
//}
//var_dump($arr);


//快速排序
//$arr2 = [1, 5, 23, 11, 15, 30, 40, 16];

//var_dump($arr2);

//function foo ($arr)
//{
//    if (count($arr) <= 1) {
//        return $arr;
//    }
//
//    $middle = $arr[0];
//    $left = [];
//    $right = [];
//
//    for ($i = 1; $i < count($arr); $i++) {
//        if ($arr[$i] < $middle) {
//            $left[] = $arr[$i];
//        }
//        if ($arr[$i] > $middle) {
//            $right[] = $arr[$i];
//        }
//    }
//
//    $left = foo($left);
//    $right = foo($right);
//
//    return array_merge($left, [$middle], $right);
//}
//var_dump(foo($arr2));



//选择排序
//$arr = [1, 5, 23, 11, 15, 30, 40, 16];
//for ($i=0; $i < count($arr); $i++ ) {
//    $selectedIndex = $i;
//    for ($j = $i+1; $j < count($arr); $j++) {
//        if($arr[$selectedIndex] > $arr[$j]) {
//            $selectedIndex = $j;
//        }
//    }
//
//    if ($selectedIndex != $i) {
//        $tmp = $arr[$selectedIndex];
//        $arr[$selectedIndex] = $arr[$i];
//        $arr[$i] = $tmp;
//    }
//}
//var_dump($arr);

//二分选择法，输入一个数查看他在数组中的位置
//$arr = [1, 5, 23, 11, 15, 30, 40, 16];
//function twoPoint ($arr, $val)
//{
//    $low = 0;
//    $high = count($arr) -1;
//
//    while ($low <= $high) {
//        $mid = ceil(($low + $high) /2);
//
//        if ($arr[$mid] == $val){
//            return $mid;
//        }
//
//        if ($arr[$mid] < $val) {
//            $low = $mid + 1;
//        }
//        if ($arr[$mid] > $val) {
//            $high = $mid -1;
//        }
//    }
//    return false;
//}
//var_dump(twoPoint($arr, 5));