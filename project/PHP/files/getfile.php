<?php

//获取文件

$content = file_get_contents('./file/test.txt');  //能直接获取并以字符串形式读取出内容
var_dump($content);


//写

//file_put_contents('./file/test.txt', 'sssss');  //这样写相当于覆盖之前的内容

//如果想不覆盖之前的内容，那么就相当于，在原有内容的基础上添加新的内容，就是把旧内容和新内容拼接再一起写入
//file_put_contents('./file/test.txt', $content .'sssss');
