<?php

//require './test.php';     //正常情况我们是直接require 需要连接的php文件，但是我们可以使用autoload函数来自动执行
require './autoload.php';

$num2 = K::foo();
//echo '<br>';
//$num3 = K::foo();