<?php

class Test
{
    public $type = '123';
    public function foo()
    {
        return $this->type;
    }
    public function __sleep()
    {
        //sleep方法，当类的外部进行了序列化操作，可以设置返回的信息
        //目的就是为了保护类，如果不设置，返回的就是Null，要设置的话需要
        //需要设置的返回值必须是一个数组
        $this->type = 'sss';
        return array('type');
    }
}
$test = new Test();
var_dump(serialize($test));

