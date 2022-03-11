<?php
 require_once("includes/connection.php");

$delete = $_POST['delete'];
if (count($delete))
{
foreach ($delete as $v)
{
$sql="DELETE FROM registros WHERE Cedula = '$v'";
$res = mysql_query($sql);
}
}
//fin borrado de registros
	header("location:borrar.php");
?>
