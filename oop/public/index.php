<?php

define("DD",  realpath(__DIR__ . "/.."));

require  DD . "/vendor/autoload.php";

$app_title = Config::get("app.app_title");

echo $app_title;

$student = DB::table("students")->where("name", "Thiha")->get();

$students = DB::table("students")->get();

$products = DB::table("products")->get();

var_dump($student);
var_dump($students);
var_dump($products);


// $products = DB::table("products")->get();
// $students = DB::table("students")->where("id", 1)->get();