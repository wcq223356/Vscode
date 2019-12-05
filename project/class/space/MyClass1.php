<?php

namespace app\space;

use app\space\spaces\MyClass2 as C2;
use \app\space\spaces2\MyClass2 as CS2;

class MyClass1
{
    public function foo()
    {
//        \app\space\MyClass::$name;
        //类里面调用其他文件的类，命名空间会跟在前面，但如果设置了
        //和其他文件相同的命名空间（前提是同一个目录下），就可以省略前面。
        MyClass::$name;

        C2::foo();
        //如果调用了不在同一个目录下的其他类中的方法，就会在顶部自动生成
        //use 该方法所在类的命名空间；
    }

    public function foo2()
    {
        CS2::foo();

    }
    //当引用了两个不同目录中的类的方法，并且两个类重名，需要给use取别名来进行区分

}