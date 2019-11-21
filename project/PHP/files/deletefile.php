<?php


//删除文件

if(file_exists('./file/text2.txt')) {  //判断是否存在，存在就删除
    unlink('./file/text2.txt') or die('deleted is false');
}