<?php

class Input
{
    public static function exists($type = 'post'): ?bool
    {
        if (isset($_POST["SUBN"])) {
            var_dump($_SERVER['REQUEST_METHOD']);
            return $_POST['name'] != '';
        }
        if (isset($_GET['SUBE'])) {
            var_dump($_SERVER['REQUEST_METHOD']);
            return $_GET['email'] != '';
        }
    }

    public static function get($item)
    {
        if ($item == "get") {
            echo $_GET['email'];
        } elseif ($item == "post") {
            echo $_POST['name'];
        } else {
            echo "Enter Correct Form Method !!!";
        }
    }
}