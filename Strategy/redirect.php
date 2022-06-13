<?php

class Redirect
{
    public static function to($location = null): bool
    {
        header("location :$location");
        return TRUE;
    }
}