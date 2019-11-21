<?php

//创建目录 判断目录是否存在，不存在就创建一个
//if (!is_dir('./file/test')) {
//    mkdir('./file/test') or die('创建目录失败');
//}

//重命名目录
//if (is_dir('./file/test') && !is_dir('./file/test2')){
//    rename('./file/test', './file/test2') or die('重命名失败');
//}

//删除目录  只能删除空目录，如果有东西无法删除
//if(is_dir('./file/test2')){
//    rmdir('./file/test2') or die('删除目录失败');
//}


//读取目录下的内容
//$path = './file';
//$handle = opendir($path);
//
////判断条件，把每一次读取的内容都赋值给$item,直到没有内容等于fasle，就表示读取结束了，把false放在前面是为了
////防止错误溢出，因为不明知道
//while (false !== ($item = readdir($handle))) {
//    if($item != '.' && $item != '..') {
//        if(is_dir($path.'/'.$item)) {
//            $dirArr[] = $item;
//        }
//        if(is_file($path.'/'.$item)) {
//            $fileArr[] = $item;
//        }
//    }
//}
//closedir($handle);
//var_dump($dirArr);
//var_dump($fileArr);


//删除有文件的目录

//function deleteDir($dirPath)
//{
//    $handle = opendir($dirPath);
//
//    while (false !== ($item = readdir($handle))) {
//
//        if($item != '.' && $item != '..') {
//
//            if(is_file($dirPath.'/'.$item)) {
//                unlink($dirPath.'/'.$item);
//            }
//
//            if(is_dir($dirPath.'/'.$item)) {
//               deleteDir($dirPath.'/'.$item);
//            }
//
//        }
//
//    }
//    closedir($handle);
//    rmdir($dirPath);
////    if (rmdir($dirPath)) {
////        return true;
////    } else {
////        return false;
////    }
//}
//deleteDir('./file/test');


//function deleteDir($dirPath)
//{
//    if(!is_dir($dirPath)){
//        var_dump(!is_dir($dirPath));
//        return false;
//    }
//
//    $handle = opendir($dirPath);
//
//    while (false !== ($item = readdir($handle))) {
//
//        if($item != '.' && $item != '..') {
//
//            if(is_file($dirPath.'/'.$item)) {
//                unlink($dirPath.'/'.$item);
//            }
//
//            if(is_dir($dirPath.'/'.$item)) {
//                deleteDir($dirPath.'/'.$item);
//
//            }
//
//        }
//
//    }
//
//    rmdir($dirPath);
//    deleteDir($dirPath);
//}
//deleteDir('./file/test');

//文件大小
//$size = filesize('./file/5dce67391b8f3.png');
//$ext = ['bytes', 'KB', 'MB', 'GB'];
//$index = 0;
//while ($size > 1024) {
//    $size = $size / 1024;
//    $index++;
//}
//echo $size . $ext[$index];
