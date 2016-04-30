<?php



class Cat extends Animal {
    public function __destruct()
    {
        echo "Cat Destruct!";
    }
    public function meon() {
        echo "Meon!";
    }
}

abstract class Animal {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function eat() {
        echo "Eat!";
    }
}

class Dog extends Animal {

    public $value = []; // array()

    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function __set($name, $value)
    {
        $this->value[$name] = $value;
    }
    public function __get($name)
    {
        return $this->value[$name];
    }
    public function bark() {
        echo "Woof!";
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name);
        var_dump($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump($name);
        var_dump($arguments);
    }

    public static function bite() {
        echo "Bite!";
    }
}
Dog::bite(); // :: scope resolution operator
Dog::run("60KM/h", "Mad");
die();
$dog = new Dog("Aung Net", "red");
$dog->name = "Aung Net";
$dog->bark();
$dog->color = "red";
var_dump($dog->color);
$dog->dance("Hip Hop");
echo $dog->name;