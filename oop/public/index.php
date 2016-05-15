<?php

define("DD",  realpath(__DIR__ . "/.."));

require  DD . "/vendor/autoload.php";

$app_title = Config::get("app.app_title");

echo $app_title;

use Wpa23\App\Application;


class Dog {
    public function __construct()
    {
        var_dump("Dog Registry");
    }

    public function Bark() {
        var_dump("Woof!");
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        var_dump("Dog Destrucy!");
    }
}

class Cat {
    public function __construct()
    {
        var_dump("Cat Registry");
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        var_dump("Cat Destrucy!");
    }
}

$dog = new Dog();
$cat = new Cat();

Application::add($dog);
Application::add(DBReadConnection::getInstance());
Application::add($cat);

$aung = Application::get("dog");
$aung->bark();

$aung->bark();








// DBReadConnection::getInstance();

// DBWriteConnection::getInstance();

//$student = DB::table("students")->where("name", "Thiha")->get();
//
//$students = DB::table("students")->get();
//
//$products = DB::table("products")->get();
//
//
//DB::table("products")->insert([
//   'name'   => 'iPhone SE',
//    'price' => '600000'
//]);
//
//// INSERT INTO students (name, price) VALUES (:name, :price)
//
//var_dump($student);
//var_dump($students);
//var_dump($products);


// $products = DB::table("products")->get();
// $students = DB::table("students")->where("id", 1)->get();