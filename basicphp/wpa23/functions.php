<?php 

function config_get($value) {
	$e_value = explode(".", $value);
	$config = include DD . "/app/config/" . $e_value[0] . ".php";
	return $config[$e_value[1]];
}


function load_view($view_file, $data = null) {
	ob_start();
	if($data != null) {
		extract($data);	
	}
	include DD . "/app/view/" . $view_file . ".php";
	return ob_get_clean();
}

function dump($data, $die = false) {
	var_dump($data);
	if($die) {
		die();
	}
}

?>