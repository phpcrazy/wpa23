<?php

define("DD",  realpath(__DIR__ . "/.."));

require  DD . "/vendor/autoload.php";

$app_title = Config::get("app.app_title");

echo $app_title;


DBReadConnection::getInstance();

DBWriteConnection::getInstance();

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