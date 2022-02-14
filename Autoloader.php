<?php

class Autoloader
{
    public static function registerAutoload()
    {
        spl_autoload_register(function ($class) {
            $file = ROOT .DS .str_replace('\\', DS, $class).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}

