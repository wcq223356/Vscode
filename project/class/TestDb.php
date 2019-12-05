<?php

interface TestDb
{
    public function connect($conf);
    public function select();
    public function insert();
    public function update();
    public function delete();
}


class TestMysqli implements TestDb
{

    private $mysqli;
    public function __construct($conf)
    {
        $this->connect($conf);
    }

    public function connect($conf)
    {
       $this->mysqli = new mysqli(
           $conf['host'],
           $conf['username'],
           $conf['password'],
           $conf['dbname']

       );
       echo 'mysqli链接成功';

    }
    public function select()
    {
        return '选择.....';
    }
    public function insert()
    {
        return '增加行....';
    }
    public function update()
    {
        return '修改.....';
    }
    public function delete()
    {
        return '删除....';
    }
}


class TestPdo implements TestDb
{
    private $pdo;

    public function __construct($conf)
    {
        $this->connect($conf);
    }

    public function connect($conf)
    {
        $this->pdo = new pdo(
            $conf['dsn'],
            $conf['username'],
            $conf['password']

        );
        echo 'pdo链接成功';
    }
    public function select()
    {
        return '选择.....';
    }
    public function insert()
    {
        return '增加行....';
    }
    public function update()
    {
        return '修改.....';
    }
    public function delete()
    {
        return '删除....';
    }
}



//class MyTest
//{
//    public static function connDb($dbType, $conf)
//    {
//        return new $dbType($conf);
//    }
//}
class MyTest
{
    private static $_instance = [];
    private function __construct()
    {
        //让该类无法实例化
    }


    public static function connDb($dbType, $conf)
    {
        if(!array_key_exists($dbType, self::$_instance)) { //判断键值$dbType是否存在于$_instance数组中
            self::$_instance[$dbType]= new $dbType($conf);
        }
        return self::$_instance[$dbType];
    }
}

$Db = MyTest::connDb('TestMysqli', [
    'host' => 'localhost',
    'username' =>  'root',
    'password' => '123456',
    'dbname' => 'shop'
]);

echo '<br>';

$Db2 = MyTest::connDb('TestPdo', [
    'dsn'=> 'mysql:host=127.0.0.1;dbname=shop',
    'username' =>  'root',
    'password' => '123456',
]);



//var_dump($Db);
//echo $Db->select();


