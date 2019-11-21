<?php

if(!function_exists('sizeUnit')) {
    function sizeUnit($size)
    {
       $unit = ['B', 'KB', 'MB', 'GB'];
       $index = 0;
       while ($size > 1024) {
           $size = $size / 1024;
           $index++;
       }
        return round($size, 2).$unit[$index];
    }
}
