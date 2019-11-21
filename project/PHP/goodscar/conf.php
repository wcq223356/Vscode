<?php

//配置文件

$conf = [
    'cookie' =>[
        'cookie_prefix' => 'Text_',
        'car_name' => 'goods_car',
        'cookie_ecprise' => time() + 3600,
        'cookie_path' => '/'
    ]

];

$conf['cookie']['cookie_prefix'].$conf['cookie']['car_name'];
var_dump($conf['cookie']['cookie_ecprise']);
var_dump($conf['cookie']['cookie_path']);