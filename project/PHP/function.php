<?php

//echo date('Y-m-d H:i:s', time());


//echo PHP_EOL;
//define('WBB', '123456');
//echo WBB;

//function calc ($num1, $num2, $type = 'add')
//{
//    if ($type == 'add') {
//        return $num1 + $num2;
//    } elseif ($type == 'sub') {
//        return $num1 - $num2;
//    } elseif ($type == 'mul') {
//        return $num1 * $num2;
//    } elseif ($type == 'div' && $num2 != 0) {
//        return $num1 / $num2;
//    } else {
//        return 0;
//    }
//}
//
//echo calc(10, 5, 'mul');
//
//$a = 'hello';
//
//function foo ()
//{
//    $b = 'world';
//    echo $b;
//    echo "<br>";
////    global $a;
////    echo $a;
//    echo $GLOBALS['a'];
//}
//
//foo();


//global 和  $GLOBALS 的区别
//global 申明的全局变量是由作用区域的，在函数内部会改变，但是出了函数就没用了。但是GLOBALS不管在内
//还是在外都是可以使用的

//$a = 10;
//$b = 20;
//
//function foo ()
//{
//    global $a, $b;
//    $a = &$b;
//    echo $a;
//
////    $GLOBALS['a'] = &$GLOBALS['b'];
//
//}
//foo();
//echo $a, $b;

//静态变量（无法销毁，只能在不在调用是隐式销毁）

//静态变量1加到100
//function foo ()
//{
//   static $sum = 0;
//   static $num = 1;
//   $sum += $num;
//   $num++;
//   if ($num <= 100){
//       foo();
//   }
//   return $sum;
//}
//
//echo foo();

//数组
//$arr = array(10, 20, 30, 22, 40);   //索引数组

//echo $arr;             //无法获取
////print $arr;       //无法获取
////print_r($arr);    //可以
//var_dump($arr);     //可以
//echo count($arr);   //获取数组长度
//
////遍历关联数组，打印值
//for($i=0; $i<count($arr); $i++){
//   echo $arr[$i];
//   echo "<br>";
//}

//$arr = array('a'=>1, 'b'=>2, 'c'=>3);  //关联数组，键值自己定，并赋予对应的值

//var_dump($arr);

//使用for循环无法遍历出关联数组的值
//for($i=0; $i<count($arr); $i++){
//   echo $arr[$i];
//   echo "<br>";
//}

//遍历关联数组需要使用foreach
//foreach ($arr as $x=>$x_value){
//    echo $x.'=>'.$x_value."<br>";
//}

//二维数组
$arr = [
    [
        'A' => 'a',
        'B' => 'b'
    ],
    [10, 20],
    ['x', 'y', 'z']
];
foreach ($arr as $key => $key_value) {
    echo $key;
    foreach ($key_value as $key2 => $key2_value) {
        echo $key2. '=>' .$key2_value.' ';
    }
    echo '<br>';
}