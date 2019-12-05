<?php


class MyAutoload
{
    public static function autoload($className)
    {
        $fileUrl = './' . $className . '.php';
        require $fileUrl;
    }
}
