<?php 


function HomeController() {
	// db_get_all("products")
	$data = [
		'title'		=> config_get("app.app_title"),
		'products'	=> db_get_select("products", ['id','name', 'price']),
	];

	echo load_view("home", $data);
	
}

function BlogController() {

	echo load_view("blog");
}

function PageController() {
	echo load_view("page");
}

?>