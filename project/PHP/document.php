<?php

//树状图展示数组
$arr = [
    [
        'A' => 'a',
        'B' => 'b',
        'C' => 'c'
    ],
    [11, 12, 13],
    ['h', 'j', 'k'],
    [
        'other' => ['name' => 'boo']
    ],
    'add'
];

//function arrayTree ($arr, $n =0)
//{
////
//        foreach ($arr as $key => $value) {
//            for ($i = 0; $i < $n; $i++) {
//                echo '&nbsp;&nbsp;&nbsp;&nbsp;';
//            }
//
//            echo $key. '=>';
//            if (is_array($value)) {
//                echo '<br>';
//                $n++;
//                arrayTree($value, $n);
//                $n =0;
//            } else {
//                echo $value;
//            }
//            echo '<br>';
//        }
//}
//arrayTree($arr);



//判断一个数组是定维数组还是不定维数组，定维数组判断其维数，不定维数组判断其中元素的个数

//$arr2 = [
//    [
//        [1, 2, 3]
//    ],
//    [
//        [4, 5, 6]
//    ],
//    [
//        [7, 8, 9]
//    ]
//];

////计算出不定维数组里有值的元素个数
//function goo ($arr)
//{
//        static $num = 0;
//        if(is_array($arr)) {
//            foreach ($arr as $value) {
//
//                if (is_array($value)) {
//                    goo($value);
//                } else {
//                    $num++;
//                }
//            }
//        }
//    return $num;
//}
//echo  goo($arr2);
//
////判断定维数组的维数
//
//function arrayLevel ($arr)
//{
//   static  $level = 0;
//   if (is_array($arr)) {
//       $level++;
//       foreach ($arr as $value) {
//           arrayLevel($value);
//       }
//   }
//   return $level;
//}
////echo arrayLevel($arr2);
//var_dump(arrayLevel($arr2));










//乘法口诀
//for ($i = 1; $i < 10; $i++) {
//    for ($j = 0+$i; $j < 10; $j++) {
//        echo $i . '*' . $j . '=' . $i * $j . PHP_EOL;
//
//    }
//    echo '<br>';
//}

//for ($i = 1; $i <= 9; $i++) {
//    for ($j = 1; $j <= $i; $j++) {
//        echo $j . '*' . $i . '=' . $j * $i . PHP_EOL;
//    }
//    echo '<br>';
//}

//3到100以内的质数
//for ($a = 3; $a <= 100; $a++) {
//    for($b = 2; $b <= $a; $b++) {
//        if ($a % $b == 0 && $b != $a) {
//            break;
//        }
//        if ($b = $a) {
//            echo $a . ' ';
//        }
//    }
//}

//创建一个函数判断是否是闰年
//function foo ($y)
//{
//    $y = intval($y);
//    if($y % 4 == 0 && $y % 100 !== 0 || $y % 400 == 0) {
//        echo 'true';
//    } else {
//        echo 'false';
//    }
//}
//
//foo(1900);