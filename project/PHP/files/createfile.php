<?php


//创建文件

if (!file_exists('./file/text2.txt')) {   //判断文件是否存在 存在true  不存在false，取反就表示不存在就添加
    touch('./file/text2.txt') or die('create is false');
}