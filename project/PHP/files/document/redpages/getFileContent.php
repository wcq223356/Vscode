<?php

require '../../Myclass.php';

$page = intval($_GET['num']);
$filePath = '../file/access.log';

//每页显示的行数
$pageLine = 15;

$Myclass = new \app\file\Myclass();

//获取文件的总行数
$allLines = $Myclass->getFileAllLines($filePath);

//获取总页数
$pageNum = ceil($allLines / $pageLine);

if($page < 1) {
    $page = 1;
} elseif ($page > $pageNum) {
    $page = $pageNum;
}

$handle = fopen($filePath, 'r+');
$content = '';
$index = 0;
$limit = ($page - 1) * $pageLine;   //偏移量
$nowLine = 0;

while (!feof($handle)) {
    if($nowLine >= $limit) {
        $content .= '<p>' . fgets($handle) . '</p>';
        $index++;

        if($index >= $pageLine) {
            break;
        }
    }
    $nowLine++;
    fgets($handle);   //将当前指针定位到此行
}
fclose($handle);

echo json_encode([
   'stateCode' => 200,
   'stateMsg' => 'succeed',
   'data' =>[
       'page' => $page,
       'pagenum' => $pageNum,
       'content' => $content
   ]
]);