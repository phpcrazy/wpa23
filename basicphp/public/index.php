<?php 


define("DD", __DIR__ . "/..");

require DD . "/wpa23/functions.php";
require DD . "/wpa23/db.php";
require DD . "/app/controller/controllers.php";


if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "home";
}


$controller = ucfirst($page) . "Controller";

if(function_exists($controller)) {
	call_user_func($controller);	
} else {
	echo "404!";
}


	



 ?>