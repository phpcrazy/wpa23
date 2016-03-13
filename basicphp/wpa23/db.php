<?php 

function connect_db() {
	$servername = config_get("database.hostname");
	$username = config_get("database.username");
	$password = config_get("database.password");
	$dbname = config_get("database.dbname");

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	return $conn;

}

function db_get_all($table_name) {

	$conn = connect_db();
	

	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
    	$products = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	} else {
    	$products = null;
	}

	mysqli_close($conn);

	return $products;
}

function db_get_select($table_name, array $columns) {
	$conn = connect_db();
	$im_columns = implode(", ", $columns);
	
	$sql = 'SELECT ' . $im_columns . " FROM " . $table_name;
	
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
    	$products = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	} else {
    	$products = null;
	}

	mysqli_close($conn);

	return $products;

}

function db_insert($table_name, $data_array) {
	$conn = connect_db();

	$array_keys = array_keys($data_array);
	$array_values = _put_quotes(array_values($data_array));
	$im_array_keys = implode(", ", $array_keys);
	$im_array_values = implode(", ", $array_values);
	

	$sql = "INSERT INTO " . $table_name . " (" . $im_array_keys . ") " . 
		" VALUES (" . $im_array_values . ")";

	mysqli_query($conn, $sql);
	mysql_close($conn);

}

function _put_quotes($name) {
	$return_value = array();
  	foreach ($name as $value) {
  		$t_value = trim($value);
  		if(gettype($value) == 'string') {
  			$return_value[] .= "'" . $t_value . "'";
  		} else {
  			$return_value[] .= $t_value;
  		}
  		
  		
  }
  return $return_value;
  
}


 ?>