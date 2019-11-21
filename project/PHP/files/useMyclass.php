<?php

require 'Myclass.php';

$Myclass = new \app\file\Myclass();    //完整类名  实例化方法，就可以调用内部的方法

//$res = $Myclass->createFile('./file/test5.txt');
//var_dump($res);

//$res = $Myclass->getFile('./file/test4.txt');
//var_dump($res);

//$str = '
//2222222';
//$res = $Myclass->reviseFile('./file/test4.txt', $str);
//var_dump($res);

//$res = $Myclass->copyFile('./test3.txt', './file/test3.txt');
//var_dump($res);

$res = $Myclass->getFileAllLines('./test3.txt');

var_dump($res);


$res = $Myclass->getLineContent('./test3.txt', '1');
var_dump($res);


