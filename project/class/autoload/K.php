<?php


class k
{
    public static $num = 1;
    public static function foo()
    {
        return self::$num++;
    }
}
