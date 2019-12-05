<?php


//class Registrant
//{
//    private static $_stores = [];
//    private static $_instance;    //私有的属性或者方法通常以下划线开头
//    private function __construct()
//    {
//    }
//    private function __clone()
//    {
//        // TODO: Implement __clone() method.
//    }
//    public static function getInstance()
//    {
//        if (!(self::$_instance instanceof self)) {
//            self::$_instance = new self();
//        }
//        return self::$_instance;
//    }
//
//    //获取对象
//    public function get($key)
//    {
//        if (array_key_exists($key, self::$_stores)) {
//            return self::$_stores[$key];
//        }
//        return null;
//    }
//
//    //存储对象
//    public function set($key, $instance)
//    {
//        if (is_object($instance) && is_string($key)) {
//            self::$_stores[$key] = $instance;
//            return true;
//        }
//        return false;
//    }
//
//    //判断对象是否在仓库中
//    public function isExist($key )
//    {
//        return array_key_exists($key, self::$_stores);
//    }
//
//}


class Registrant
{
    private static $_store = [];
    private static $_instance;
    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function get($key)
    {
        if (array_key_exists($key, self::$_store)) {
            return self::$_store[$key];
        }
        return null;
    }
    public function set($key, $instance)
    {
        if (is_object($instance) && is_string($key)) {

        }
    }
    public function isExist()
    {

    }


}
