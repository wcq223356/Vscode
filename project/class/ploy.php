<?php


//多态
interface MyUsb
{
    public function type();
    public function alert();
    public function doing();
}


class Phone implements MyUsb
{
    public function type()
    {
        echo '这是一个手机,';
    }
    public function alert()
    {
       echo '手机已经连接USB,';
    }
    public function doing()
    {
       echo '正在给手机充电。';
    }

}

class UPan implements MyUsb
{
    public function type()
    {
        echo '这是一个U盘,';
    }
    public function alert()
    {
        echo 'U盘已经连接USB,';
    }
    public function doing()
    {
        echo '正在读取数据。';
    }
}

class MyPc
{
    public static function pcUsb(MyUsb $what)   //定义参数的形式，来源于接口
    {
        $what->type();
        $what->alert();
        $what->doing();
    }
}

$Phone = new Phone();
$UPan = new UPan();

MyPc::pcUsb($Phone);
MyPc::pcUsb($UPan);