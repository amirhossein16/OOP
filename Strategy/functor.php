<?php

class functor
{
    public static function init($class, $method, ...$argv)
    {
        echo "$class :: $method (" . implode(",", $argv) . ") <b style='color: red'> => </b> ";
        var_dump($class::$method(...$argv));
        echo "<br>";
    }
}