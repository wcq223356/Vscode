<?php


interface Process
{
    public function purchase();
    public function produce();
    public function packagist();
    public function sale();
}

class Phone implements Process
{
    public function purchase()
    {
        echo '购买手机材料<br>';
    }
    public function produce()
    {
        echo '制造手机<br>';
    }
    public function packagist()
    {
       echo '包装手机<br>';
    }
    public function sale()
    {
        echo '售卖手机<br>';
    }
}

class End
{
    public static function foo ($what, $doing)
    {
        $what->$doing();
    }
}

$phone = new Phone();

$phoneObj = End::foo($phone, 'purchase');
$phoneObj = End::foo($phone, 'produce');
$phoneObj = End::foo($phone, 'packagist');
$phoneObj = End::foo($phone, 'sale');
