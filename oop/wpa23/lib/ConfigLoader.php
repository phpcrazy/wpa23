<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 5/8/16
 * Time: 5:37 PM
 */

class Config {
    public static function get($config_data) {
        $e_value = explode(".", $config_data);
        $config = include DD . "/app/config/" . $e_value[0] . ".php";
        return $config[$e_value[1]];
    }
}