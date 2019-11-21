<?php

//存
setcookie('name', 'wang', time() + 360, '/');

//取
var_dump($_COOKIE['name']);

//修改 修改时，路径要与存储时的路径一致
setcookie('name','li', time()+360, '/');

//删除
setcookie('name', null, time()-100, '/');