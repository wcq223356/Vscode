<?php


//文件下载

//header("content-disposition:attachement; filename=aa.png");
//header("content-length:".filesize('./file/中雪转多云.png'));  //要下载文件的路径
//
//readfile('./file/中雪转多云.png');    //要下载文件的路径





//下载大文件

//$filePath = '路径';
//
////要先设置脚本可执行的时间为0
//set_time_limit(0);
//ini_set('max_execution_time', 0);
//
//header("content-Type:application/octet-stream");  //字节流输出文件
//header("Accept-Ranges:bytes");  //文件大小类型是字节
//header("Accept-length" . filesize($filePath));   //设置获取文件大小
//header("content-disposition:attachement; filename=");
//
//$handle = fopen($filePath, 'r');
//$readBuffer = 4096;
//$sumBuffer = 0;
//
//while (!feof($handle) && $sumBuffer < filesize($filePath)) {
//
//    echo fread($handle, $readBuffer);
//    $sumBuffer += $readBuffer;
//}
//
//fclose($handle);



//下载远端文件

//方式1 适用于小文件
//$content = file_get_contents('http://p2.qhimg.com/bdm/320_197_0/t010e12e6a774215909.jpg');
//file_put_contents('./file/a.jpg', $content);


//方式2 适用于稍大文件

//$source = fopen('http://vd4.bdstatic.com/mda-ii0k2wf3aefjxrjc/sc/mda-ii0k2wf3aefjxrjc.mp4', 'rb');
//$save = fopen('./file/shiping.mp4', 'wb');
//
//while ($fine = fread($source, 8192)) {
//    fwrite($save, $fine, 8192);
//}
//
//fclose($source);
//fclose($save);
