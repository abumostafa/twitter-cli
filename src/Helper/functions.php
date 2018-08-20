<?php

if (!function_exists('env')) {

    function env(string $var, $default = null)
    {
        getenv();


    }
}