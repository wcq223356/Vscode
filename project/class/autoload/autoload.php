<?php

//类的自动加载

//当前已经不再使用该函数了，转用spl_autoload_register（）代替；
//function __autoload($className)       //$className表示的是当前需要连接的类的类名；
//{
//    require './'.$className.'.php';
//}



spl_autoload_register(function ($className) {  //值得注意的是，$className可以是一个方法名，但是该方法一定要是个静态方法
    $fileUrl = './' . $className . '.php';
    require $fileUrl;

    var_dump($fileUrl);
    var_dump(__DIR__);
});


//使用其他类中的静态方法来实现自动连接
//require './MyAutoload.php';
//spl_autoload_register(MyAutoload::autoload());