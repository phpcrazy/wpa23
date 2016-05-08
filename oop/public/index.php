<?php

define("DD",  realpath(__DIR__ . "/.."));

require  DD . "/vendor/autoload.php";

$app_title = Config::get("app.app_title");

echo $app_title;

$students = DB::table("students")->get();

foreach ($students as $student) {
   var_dump($student['name']);
}
// $products = DB::table("products")->get();
// $students = DB::table("students")->where("id", 1)->get();