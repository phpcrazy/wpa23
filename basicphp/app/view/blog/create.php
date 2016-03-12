<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Create</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="http://wpa23.dev/blog/create" class="form-horizontal">
					<div class="form-group">
						<label for="title" class="control-label">Title</label>
						<input type="text" name="title" class="form-control" />
					</div>
					<div class="form-group">
						<label for="body" class="control-label">Body</label>
						<textarea id="body-text" class="form-control" name="body" rows="10"></textarea>
					</div>
					<div class="form-group">					
						<button type="submit" class="btn btn-default">Submit</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		
		CKEDITOR.replace('body-text');
				
	</script>
</body>
</html>