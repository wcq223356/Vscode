<?php


//抽象trait类
trait T
{
    public function foo()
    {
        echo '这是抽象trait类';
    }

    abstract public function too();
}


class MyT
{
    use T;
    public function too()
    {
        //必须要重构抽象方法才能使用
    }
}
$MyT = new MyT();
$MyT->foo();