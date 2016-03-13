<?php 
// pretty url
// protect file browsing
// uri request
// redirect

function HomeController() {
	// db_get_all("products")
	$data = [
		'title'		=> config_get("app.app_title"),
		'blogs'		=> db_get_all("blogs"),
	];

	echo load_view("blog.index", $data);
	
}

function BlogController($action = null) {
	if($action ==  null) {
		$data = [
			'title'		=> config_get("app.app_title"),
			'blogs'		=> db_get_all("blogs"),
		];

		echo load_view("blog.index", $data);
	} else {
		if($action == 'create') {
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$title = htmlentities($_POST['title']);
				$body = $_POST['body'];
				$data = [
					'title'	=> $title,
					'body'	=> $body
				];
    			db_insert("blogs", $data);


    			redirect("blog");
			}

			_blog_create();
		}
	}
	
}

function _blog_create() {
	echo load_view("blog.create");
}

function PageController() {
	echo load_view("page");
}

?>
