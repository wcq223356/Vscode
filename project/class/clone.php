<?php

class Test
{
    protected $name = 'aaa';

    public function foo()
    {
        return $this->name;
    }

    public function __clone()
    {
       $this->name = 'zzz';
       //使用__clone方法则外部clone完成后形成了一个新的对象，与原对象没有联系了，同时可以重新定义属性的值，外部的值会被改变
    }
}
$a = new Test();
var_dump($a);
echo '<br>';
$b = clone $a;
var_dump($b);
