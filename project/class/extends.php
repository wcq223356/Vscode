<?php

class Parents
{
    public $name = '德丽莎';
    public function foo()
    {
        return $this->name;
    }

}

class Chridlen extends Parents
{
    public $age = 18;
    public function foo()
    {
        return parent::foo(); // TODO: Change the autogenerated stub
    }
    public function foo2()
    {
       return $this->age;
    }
}

$Chridlen = new Chridlen();
echo $Chridlen->foo(),$Chridlen->foo2();
