<?php


abstract class Test
{
    public $name = 'sdsd';
    abstract function foo();

}

class Test2 extends Test
{
    function foo()
    {
        return $this->name;
    }
}
$Test2 = new Test2();
echo $Test2->foo();

//抽象类无法实例化，只能继承，继承的类要重载抽象方法才能实例化