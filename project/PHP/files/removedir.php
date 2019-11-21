<?php

//删除目录

function removeDir ($dirPath)
{
    $handle = opendir($dirPath);

    while (false != ($item = readdir($handle))) {  //判断文件是否存在于目录中，readdir返回该目录中的下一个文件名
                                                    //不存在则返回false，不等于false则表示存在

    }

}