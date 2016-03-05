<?php 


function HomeController() {

	$data = [
	'title'	=> 'Myanmar Links',
	'products'	=> [
			[
				'id'	=> 1,
				'name'	=> 'Applie',
				'price'	=> 500,
			],
			[
				'id'	=> 2,
				'name'	=> 'Orange',
				'price'	=> 500,
			],
			[
				'id'	=> 3,
				'name'	=> 'PineApple',
				'price'	=> 500,
			],
		]
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