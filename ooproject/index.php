<?php

interface AnimalInterface {

    public function eat();
}

interface FooInterface {
    public function bar();
}

trait Human // Design Pattern
{

    public function __construct()
    {
        echo "Yay! Constructor!";
    }

    public $value = "Idiot!";

    public function test()
    {
        echo "Testing!";
    }
}

trait Yoo {
    public function bro() {
        echo "Howdy!";
    }
}

abstract class Animal implements AnimalInterface, FooInterface {
    public function eat()
    {
    }
    public function bar()
    {
    }
}

class Dog extends Animal {
    use Human;
    use Yoo;
}

$dog = new Dog();

$dog->eat();

$dog->test();

echo $dog->value;
$dog->bro();