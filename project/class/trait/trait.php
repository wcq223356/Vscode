<?php


//同时继承trait类和普通类时的情况
class Base
{
    public function sayGood()
    {
        echo 'GOOD';
    }
}

trait Base2
{
    public function sayGood()
    {
        parent::sayGood();
        echo 'MORNING';
    }
}

class Base3 extends Base
{
    use Base2;                          //use的优先级比extends高
}

$test = new Base3();
$test->sayGood();