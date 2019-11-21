<?php

//方式1直接读取，无法进行操作
//$content = readfile('./file/test.txt');
//var_dump($content);



//方式2： 可以对打开的文件进行操作
//$file = fopen('./file/test.txt', 'r');    //打开文件
//$content = fread($file, filesize('./file/test.txt'));  //读取文件 filesize表示文件的大小，放在fread中表示需要读取文件的长度是全部
//var_dump($file);
//var_dump($content);
//fclose($file);    //关闭文件，每当使用fopen打开了文件，不继续操作该文件，都要关闭文件，以免占用运行资源.


//逐行读取
//$handler = fopen('./file/test.txt', 'r') or die('open file false');  //打开文件，or后面是如果失败返回的结果
//while (!feof($handler)) {     //feof 检查是否已经达到了文件的末尾 ：true 是   false 否
//    echo fgets($handler) . '<br>';  //fgets 返回一行
//}
//fclose($handler);


//写入文件
//$handler = fopen('./file/test.txt', 'a+') or die('open file false');
//fwrite($handler, '
//123456');  //换行直接回车
//fclose($handler);



//获取文件行数

//方式1：
$file = fopen('./file/access.log', 'r');
$line = 0;
while (stream_get_line($file, 8192, '
')){
    $line++;
}
echo $line;

fclose($file);


//方式2


//$file = fopen('./file/test.txt', 'r');
//$line = 0;
//这样写是错误的，会进入长时间读取状态，因为feof判断是否到末尾，是逐个字符检查，然后++一次，应该加一个判断条件
//while (!feof($file)) {
//
//    $line++;
//}

//正确写法
//while (!feof($file)) {
//    if (fgets($file)) {    //表示当获取到是一整行时才加1
//        $line++;
//    }
//}
//echo $line;
//fclose($file);

//方式3  注意使用该方式，判断条件是换行符出现了几次，因此获取到的文件实际行数是要比结果多1
//$content = file_get_contents('./file/test.txt');
//$line = substr_count($content, '
//');                                     //substr_count（要截取的内容， 按什么条件截取）表示截取的次数
//echo $line;    //换行符出现的次数  $line+1 才是文件真正的行数