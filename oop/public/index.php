<?php

define("DD",  realpath(__DIR__ . "/.."));

require  DD . "/vendor/autoload.php";

$app_title = Config::get("app.app_title");

echo $app_title;