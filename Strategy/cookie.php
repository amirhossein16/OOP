<?php

class Cookie
{
    public static function exists($name): bool
    {
        return isset($_COOKIE[$name]);
    }

    public static function get($name)
    {
        return $_COOKIE[$name] ?? null;
    }

    public static function put($name, $value, int $expiry): bool
    {
        return setcookie($name, $value, time() + $expiry);
        // ************** incorrect !!! *************
        //        if (setcookie($name, $value, $expiry("/")))
        //            return true;
        //        return false;
    }

    public static function delete($name)
    {
        if (isset($_COOKIE[$name])) {
            unset($_COOKIE[$name]);
            self::put($name, null, time() - 1);
        } else
            return false;
    }
}