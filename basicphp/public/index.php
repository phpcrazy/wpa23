<?php 


define("DD", __DIR__ . "/..");

require DD . "/wpa23/functions.php";
require DD . "/wpa23/db.php";
require DD . "/app/controller/controllers.php";

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);

$request = array_diff($request_uri, $script_name);

$request = array_values($request);

if(count($request) == 0) {
	$request[0]	= "home";
} 

$controller = ucfirst($request[0]) . "Controller";

if(function_exists($controller)) {
	array_shift($request);

	call_user_func_array($controller, $request);	
} else {
	echo "404!";
}


	



 ?>