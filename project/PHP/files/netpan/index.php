<!doctype html>
<?php
require '../Myclass.php';
$Myclass = new Myclass();
$path = '../file';
$items = $Myclass ->readDir($path);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="netList.css">
    <title>Document</title>
</head>
<body>
    <div id="title">
        <ul>
            <li>文件类型/名称</li>
            <li>目录、文件大小</li>
            <li>创建时间</li>
            <li>修改时间</li>
            <li>删除</li>

        </ul>
    </div>
<?php
if (is_array($items) && count($items) == 2) {

    if (isset($items['dir']) && is_array($items['dir']) && count($items['dir'])) {
        foreach ($items['dir'] as $onceDir) {
            echo"<div class='dirbg'>
                <ul>
                <li class='img'><a><img src='../../img/文件夹.png'>$onceDir</a></li>
                <li></li>
                <li>".date('Y-m-d H:i:s', filectime($path.'/'.$onceDir))."</li>
                <li>".date('Y-m-d H:i:s', filemtime($path.'/'.$onceDir))."</li>
                <li>
                    <a>删除</a>
                </li>
                </ul>
</div>";

        }
    }

    if (isset($items['file']) && is_array($items['file']) && count($items['file'])) {
        foreach ($items['file'] as $onceFile) {
            echo "<div class='dirbg'>
                <ul>
                <li><a><img src='../../img/文件.png'>$onceFile</a></li>
                <li></li>
                <li>".date('Y-m-d H:i:s', filectime($path.'/'.$onceDir))."</li>
                <li>".date('Y-m-d H:i:s', filemtime($path.'/'.$onceDir))."</li>
                <li>
                    <a>删除</a>
                </li>
                </ul>
</div>";
        }
    }

}



?>
</body>
</html>
