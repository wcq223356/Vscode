<?php


if (!function_exists('checkBack')) {   //function_exists(‘函数名’)用来判定该函数是否存在次文件中，存在true；

    function checkBack ($msg)
    {
        die("<script>alert('$msg');history.back();</script>");
    }
}