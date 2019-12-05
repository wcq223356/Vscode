<?php

class Test
{
    public static $num = 1;
    public static $num1 = 0;
    public static function foo()
    {
        while(self::$num <= 100) {
            self::$num1 += self::$num;
            self::$num++;
        }
        return self::$num1;
    }

}
echo Test::foo();