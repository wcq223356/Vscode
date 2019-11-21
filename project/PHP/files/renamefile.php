<?php


//重命名
//思路：要确认需要改名的文件是存在的，同时需要修改的名字不能存在

if (file_exists('./file/text2.txt') && !file_exists('./file/text3.txt')) {
    rename('./file/text2.txt', './file/text3.txt') or die('rename is false');
}

//重命名的方法是可以用来进行剪切，原理就是更改文件的路径，把该文件从一个目录移到另外一个

if (file_exists('./file/text3.txt') && !file_exists('./text3.txt')) {
    rename('./file/text3.txt', './text3.txt') or die('rename is false');
}