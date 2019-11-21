<?php

$file1 = filesize('./file/access.log');
$file2 = filesize('./file/error.log');
$fileDir = $file1 + $file2;

$unit = ['Bytes', 'KB', 'MB'];
$fileSize = 0;
$index = 0;
while ($fileDir > 1024) {
    $fileDir = $fileDir / 1024;
    $index++;
}
$fileSize = $fileDir;
$fileSize = substr($fileSize, 0, strpos($fileSize, '.') +3);

echo 'file文件夹的大小是：'.$fileSize .$unit[$index];
