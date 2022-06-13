<?php

class Session
{
    public static function exists($name): bool
    {
        return isset($_SESSION[$name]);
    }

    public static function put($name, $value)
    {
        $_SESSION[$name] = $value;
        // return for print in html page
        return $_SESSION[$name];
    }

    public static function get($name): mixed
    {
        if (self::exists($name))
            return $_SESSION[$name];
        return false;
    }

    public static function delete($name): void
    {
        unset($_SESSION[$name]);
    }

    public static function flash($name, $string = 'null')
    {
        if (self::exists($name)) {
            $value = self::get($name);
            self::delete($name);
            return $value;
        } else {
            self::put($name, $string);
//            return null;
        }
    }
}