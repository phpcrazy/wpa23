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
	$ex_view = explode(".", $view_file);
	if(count($ex_view) == 1) {
		include DD . "/app/view/" . $ex_view[0] . ".php";
	} else if(count($ex_view) == 2) {
		include DD . "/app/view/" . $ex_view[0] . "/" . $ex_view[1] .  ".php";
	}
	
	return ob_get_clean();
}

function dump($data, $die = false) {
	var_dump($data);
	if($die) {
		die();
	}
}

function redirect($url) {
	header("Location: " . config_get("app.site_url") . '/' . $url);
	exit();
}

?>