<?php

class Session
{

    public static function init()
    {
//        session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        // self::init();
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return false;
    }

}