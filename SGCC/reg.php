<?php  
session_start();
if(empty($_SESSION['username'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<?php 
require_once("includes/connection.php");
//Recibir
$idfamilia = $_POST['idfamilia'];
$Cedula = $_POST['Cedula'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Edad = $_POST['Edad'];
$F_N = $_POST['F_N'];
$Genero = $_POST['Genero'];



 

$sql = 'SELECT * FROM registros';
        $rec = mysql_query($sql);
        $verificar_doc = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condición que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar
 
        while($result = mysql_fetch_object($rec))
        {
            if($result->Cedula == $_POST['Cedula']) //Esta condición verifica si ya existe el usuario
            {
                $verificar_doc = 1;
            }
        }
		 if($verificar_doc == 0)
        {

$_GRABAR_SQL="INSERT INTO registros (idfamilia, Cedula, Nombres, Apellidos,Edad, F_N,Genero) VALUES ('$idfamilia','$Cedula','$Nombres','$Apellidos','$Edad','$F_N','$Genero')";mysql_query($_GRABAR_SQL);


date_default_timezone_set('America/La_Paz');
$operacion='nuevo registro';
$fecha=date("Y/m/d");
$hora=date("H:i:s");
$dbusername=$_SESSION['username'];

$query =mysql_query("SELECT * FROM users");

$_GRABAR2_SQL = "INSERT INTO logs (username,fecha,hora,operacion) VALUES ('$dbusername', '$fecha', '$hora', '$operacion')";
mysql_query($_GRABAR2_SQL);
 echo
 "
  <p>los datos se han registrado correctamente.</p>
 <p><a href='index.php'>VOLVER ATRÁS</a></p>
 <p><a href='registrar.php'>Registar otro </a></p> ";
}
else {
 echo 
 "<p>Ya se encuentra un registro con esta cedula!</p>
 <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> ";
    }

?>  
