<?php


//单例模式
class Single      //以下三私一公必须有
{
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
        if(!(self::$_instance instanceof self)) {
            self::$_instance = new static();
        }
        return static:: $_instance;
    }
}
Single::getInstance();