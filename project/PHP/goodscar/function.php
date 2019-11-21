<?php

include 'conf.php';

if (!function_exists('addCookie')) {
    function addCookie ($cookieName, $cookieValue)
    {

        setcookie($cookieName, $cookieValue, $conf['cookie']['cookie_ecprise'], $conf['cookie']['cookie_path']);
    }
}