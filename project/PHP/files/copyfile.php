<?php

//复制文件
//判断原始文件要存在，同时新的文件不存在,值得注意的是，如果要拷贝到的新路径下存在同名的文件，那就会将其覆盖了
if (file_exists('./test2.txt') && !file_exists('./file/test2.txt')) {
    copy('./test2.txt','./file/test2.txt') or die('copy is false');
}