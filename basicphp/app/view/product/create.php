<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- jQuery UI CSS -->
	<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">

	<!-- Bootstrap styling for Typeahead -->
	<link href="http://wpa23.dev/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
	<!-- Tokenfield CSS -->
	<link href="http://wpa23.dev/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="http://wpa23.dev/js/bootstrap-tokenfield.min.js" charset="UTF-8"></script>
	
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Product Entry Form</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				
				<form method="post" action="http://wpa23.dev/product/create" class="form-horizontal">
					<!-- Product Name -->
					<div class="form-group">
						<label for="product_name" class="col-sm-3 control-label">Product Name</label>
						<div class="col-sm-9">
							<input type="text" name="product_name" class="form-control" />	
						</div>	
					</div>

					<!-- Product Quantity -->
					<div class="form-group">
						<label for="product_quantity" class="col-sm-3 control-label">Product Quantity</label>
						<div class="col-sm-9">
							<input type="text" name="product_quantity" class="form-control" />	
						</div>	
					</div>

					<!-- Product Category -->
					<div class="form-group">
						<label for="product_category" class="col-sm-3 control-label">Product Category</label>
						<div class="col-sm-9">
							<input id="product_category" type="text" name="product_category" class="form-control" />	
						</div>	
					</div>
					
					<div class="form-group">		
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-default">Submit</button>	
						</div>			
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$("#product_category").tokenfield();
		});
	</script>
</body>
</html>