<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 5/7/16
 * Time: 6:20 PM
 */


// Closure
// Method Chain

//$foo = 56;
//
//$test = function($foo) {
//    return "Hello World!" . $foo;
//};
//
//echo $test($foo);


class DynamicChain {
    public $num = 60;

    public function one() {
        $this->num += 40;
        return $this;
    }

    public function two() {
        $this->num += 20;
        return $this;
    }

    public function  three() {
        $this->num +=50;
        echo $this->num;
    }
}
$test = new DynamicChain();
// $test->one()->two()->three();

class StaticChain {
    public $num;
    private static $_instance;
    public static function first() {
        if(!self::$_instance instanceof  StaticChain) {
            echo "Construct!" . "<br />";
            self::$_instance = new StaticChain();
        }
        return self::$_instance;
    }
    public function __construct()
    {
        var_dump("Run!!! Yayy!!");
        $this->num = 10;
    }
    public function __destruct()
    {
        var_dump("Kill!!! Yayy!!");
    }
    public function second() {
        $this->num += 40;
        return $this;
    }
    public function third() {
        $this->num += 50;
        return $this;
    }
    public function fourth() {
        $this->num += 50;
        var_dump($this->num);
    }
}

StaticChain::first()->second()->third()->fourth();
StaticChain::first()->second()->fourth();
StaticChain::first()->fourth();