<?php


class Call
{
    public function __call($name, $arguments)
    {
        echo '当前方法名是：' . $name . '<br>';
        echo '其中的参数有：' . implode(',', $arguments);

        //如果使用了call方法，那么当外部调用不存在的方法时，会显示出外部调用不存在的方法名$name
        //$arguments是用来存放不存在方法中的参数，以数组的形式；
    }
}

$call = new Call();
$call->foo('ssss');           //当类中没有该方法，直接调用该方法时是会抛出异常的

