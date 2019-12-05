 <?php


 //同时继承两个trait类，方法重名的情况
trait A
{
    public function foo()
    {
        echo 'A';
    }
}

trait B
{
    public function foo()
    {
        echo 'B';
    }
}

class C
{
    use A,B {
        A ::foo insteadof B;    //相当于A中的foo方法把B中的foo方法替换了
        A ::foo as ftt;         //相当于A中的foo方法取了个别名ftt
    }

}

$C = new C();
$C->foo();
$C->ftt();
