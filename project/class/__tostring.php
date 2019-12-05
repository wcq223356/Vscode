<?php


class Te
{
    public $name = 'wei';
    private $age = 28;
    public function foo()
    {
        return $this->name;
    }
    public function __toString()
    {
        return '你看到的不是真的'.$this->name;   //如果没有__toString方法，外部是无法echo出实的例结果，同时return的内容是可以
                                                //自己定义的，主要是为了保护内部内容
    }

}

$te = new Te();
echo $te->foo();

