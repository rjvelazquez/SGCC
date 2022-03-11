
<?php
require("constants.php");

//$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysqli_error());
//	mysqli_select_db(DB_NAME) or die("No hay base de datos");
	
$con = new mysqli(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
$con->set_charset("utf8");
	?>
