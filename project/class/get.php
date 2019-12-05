<?php

class Person
{
    private $name = 'haha';
    protected  $age = 18 ;

    public function __get($name)
    {
       return 'sdsds'.$this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }


}

$Person = new Person();

$Person->name = 'jjjj';
echo $Person->name,$Person->age;
