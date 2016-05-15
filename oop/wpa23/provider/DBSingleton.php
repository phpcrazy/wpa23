<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 5/15/16
 * Time: 5:29 PM
 */
trait DBSingleton
{
    private static $_instance = null;

    public static function getInstance() {
        $class = __CLASS__;

        if(!(self::$_instance instanceof $class)) {
            self::$_instance = new $class();
        }
        return self::$_instance;
    }

}