<?php

class My
{
    public $name = '魏超群';
    public $sex = '男';
    public $age = '28';
    public $height = '174';
    public $weight = '75KG';


    public function who()
    {
        return $this->name . ' 性别： ' . $this->sex . ' 年龄： ' . $this->age .
            ' 身高： ' . $this->height . ' 体重： ' . $this->weight;
    }

    public function eat($food)
    {
        return $this->name . '吃' . $food;
    }

    //f方法里调用方法
    public function test()
    {
        return $this->eat();
    }




}

$My = new My();
echo $My->who();
echo $My->eat('包子');