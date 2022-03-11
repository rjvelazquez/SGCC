<?php require_once("includes/connection.php"); 

?>
<?php  
session_start();
if(empty($_SESSION['username'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }

?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <title>C.C. 3 de Mayo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.3.js"></script>
	<script src="js/tms_presets.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/general.css">
<style type="text/css">
<!--
. {
padding: 0px;
margin: 0px;
}

.Estilo18 {font-size: 12px; font-weight: bold; }
.Estilo23 {font-size: 20px}
-->
</style>

</head>
  <body onLoad="imprimir();">
  <?php
    include_once("header.php");
    ?>
<div class="main"> 
  <div class="bg-img"></div>
<!--==============================header=================================-->
   
    <section id="content">
<div id="php">
<?php
$registros = 1500; 

$pagina = $_GET["pagina"];

if (!$pagina) {
$inicio = 0;
$pagina = 1;
}
else {
$inicio = ($pagina - 1) * $registros;
} 

 ?> 
 </div>
 
          
           
			
            <div class="block-3 box-shadow">
	<p>&nbsp;</p>
                     <?php
    include_once("marquee.php");
    ?>
					 

<div id="contenidoo" >

<span class="mensaje Estilo23">
<?php if (!empty($merror)) {echo "<p class=\"error\">" . $merror . "</p>";} ?></span>
<span class="subtitle Estilo23"><?php if (!empty($exito)) {echo "<p>" . $exito . "</p>";} ?></span>


<?php
//inicio borrado de registros
$nbrow = 0; //numero de registros
$cont = 0; //Para el checkbox

print "<form action='redireccionar_borrar.php' method='post' id='formulario2'>";
?>
<fieldset>
    <legend>BorrarRegistros</legend>
<?php
$result = mysqli_query("SELECT * FROM registros ORDER BY Cedula ASC");

//inicio consulta 
$resultados = mysqli_query("SELECT * FROM registros WHERE 'visible' = 0");
$total_registros = mysqli_num_rows($resultados) or die ( "<center>No Existen Registros!!! <br><a href=\"javascript:history.back()\">Regresar</a></center>"); //or die ( "Error en query: $sql, el error  es: " . mysql_error());
$resultados = mysqli_query("SELECT * FROM registros WHERE 'visible' = 0 ORDER BY Cedula ASC LIMIT $inicio, $registros");
$total_paginas = ceil($total_registros / $registros); 
//fin consulta 
?>

<center>
<table style="border:1px #FF0000; color:#000000; width:100%; text-align:center;">
<tr style="background:#FFD700;">
<?php
echo "<td><b>Seleccionar</b></td><td><b>ID de Familia</b></td><td><b>Cedula</b></td><td><b>Nombres</b></td><td><b>Apellidos</b></td><td><b>Edad</b></td><td><b>Genero</b></td><td><b>F_N</b></td> \n"; 
?>
</tr>

<?php
while($row=mysqli_fetch_array($resultados))
{
$nbrow++;
$cont++;

$idfamilia =$row["idfamilia"];
$Cedula =$row["Cedula"];
$nombre = $row["Nombres"];
$apellido =$row["Apellidos"];
$edad =$row["Edad"];
$Genero = $row["Genero"];
$F_N =$row["F_N"];
print "<tr bgcolor='#FFFACD'> ";
print "<td><div align=\"center\"><font color=\"#000000\"><input type=\"checkbox\" name=\"delete[]\" value=\"".$Cedula."\"></font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$idfamilia</font></div></td>";

print "<td> <div align=\"center\"><font color=\"#000000\">$Cedula</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$nombre</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$apellido</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$edad</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">Genero</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$F_N</font></div></td>";

}
?>
</fieldset>
</form>
</table>
<?php

print "<div align=\"center\"><p><input type='submit' name='borrar' value='Borrar'></p></div>";
?>
</center>
</table><br /> 
   
   </div>
  <div class="clear">
     <p>&nbsp;</p> 
 </div>
<?php mysqli_free_result($resultados); 
?>



<p>&nbsp;</p>
<p>&nbsp;</p>
	<p>&nbsp;</p>
</div>   

<p>&nbsp;</p>
</div>
			
    </section> 
	
<!--==============================footer=================================-->
   <?php
    include_once("pie.php");
    ?> 
</div>  
<script>
	Cufon.now();
</script>  
</body>
</html>
