<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php foreach($blogs as $blog) { ?> 
			<div class="row">
			<div class="col-md-12">
				<h2><?php echo $blog['title']; ?></h2>		
				<p><?php echo $blog['body']; ?></p>
			</div>
		</div>
		<?php } ?>
		
	</div>
</body>
</html>