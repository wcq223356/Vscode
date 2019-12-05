<?php

//class Test
//{
//    private static $_instance = null;
//    private function __construct()
//    {
//    }
//    public static function getInstance()
//    {
//        if(is_null(self::$_instance)) {
//            self::$_instance = new self();
//        }
//        return self::$_instance;
//    }
//
//    public function find()
//    {
//        return ;
//    }
//
//}
//
//$obj = Test::getInstance();
//$obj2 = Test::getInstance();
//$obj = find();

require './autoload.php';

class Test
{
    private static $_instance = null;
    public $arg;
    private $mysqli;
    private function __construct($conf)
    {
        $this->connect($conf);
    }

    private function connect($conf)
    {
       try{
           $this->mysqli = new mysqli(
               $conf['host'],
               $conf['username'],
               $conf['password'],
               $conf['dbname']

           );
           echo '链接成功';
       } catch (Exception $e){
           return $e->getMessage();
       }
    }

    public static function getInstance($conf)
    {
        if(is_null(self::$_instance)) {
            self::$_instance = new self($conf);
        }
        return self::$_instance;
    }

    public function find()
    {
        echo $this->arg = 'ssssss';
    }

}

$obj = Test::getInstance(
    [
        'host' => 'localhost',
        'username' =>  'root',
        'password' => '123456',
        'dbname' => 'shop'
    ]
);

$obj->find();

//$obj2 = Test::getInstance(
//    [
//        'host' => 'localhost',
//        'username' =>  'root',
//        'password' => '123456',
//        'dbname' => 'shop'
//    ]
//);

