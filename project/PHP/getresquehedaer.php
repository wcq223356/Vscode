<?php



//获取所有请求头

//var_dump($_SERVER);

$head = [];
foreach ($_SERVER as $name => $value) {

    if (substr($name, 0, 5) == 'HTTP_') {

        $head1 = str_replace('HTTP_', '', $name);  //去掉http_

        $head2 = strtolower($head1);  //将大写转成小写

        $head3 = str_replace('_', ' ', $head2);    //将字符串中的_换成 ' '

        $head4 = ucwords($head3);   //将单词的首字母转大写

        $head5 = str_replace(' ', '-', $head4);   //将空格转成-

        $head[$head5] = $value;  //把键放入数组

    }
}
var_dump($head);