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


<form action="form_mod.php" method="POST" id="formulario2">      
   <?php
//inicio borrado de registros
$nbrow = 0; //numero de registros
$cont = 0; //Para el checkbox


?>
<fieldset>
		<legend>Buscar y Modificar Registros</legend>
<?php



			$resultados = mysqli_query($con, "SELECT * FROM registros ");
		



//fin consulta 
?>

<center>
<table style="border:1px #FF0000; color:#000000; width:100%; text-align:center;">
<tr style="background:#FFD700;">
<?php
echo "<td><b></b></td><td><b>Id Familia</b></td><td><b>Cedula</b></td><td><b>Nombres</b></td><td><b>Apellidos</b></td><td><b>Edad</b></td><td><b>Genero</b></td> <td><b>F_N</b></td> \n"; 
?>
</tr>

<?php
while($row=mysqli_fetch_array($resultados))
{
$nbrow++;
$cont++;
$idfamilia =$row["idfamilia"];
$cedula =$row["Cedula"];
$nombres =$row["Nombres"];
$apellidos = $row["Apellidos"];
$edad =$row["Edad"];
$genero = $row["Genero"];
$fn = $row["F_N"];

print "<tr bgcolor='#FFFACD'> ";
print "<td><div align=\"center\"><font color=\"#000000\"><input type=\"radio\" name=\"Cedula\" value=\"".$cedula."\"></font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$idfamilia</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$cedula</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$nombres</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$apellidos</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$edad</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$genero</font></div></td>";
print "<td> <div align=\"center\"><font color=\"#000000\">$fn</font></div></td>";
}
?>

</form>
<div align="center">


<form method="POST"  action="form_mod.php" name="nuevo_art" id="formularioborrar"    
>		<label><b>Cedula:</b>
		<input required="required" value="" name="Cedula" type="text" /><input style=" left:40px; margin-right:20px;" type="submit" name="enviar" id="enviar" value="Buscar" /> </label> <br />
		

	   </form></div>
</fieldset>



</table>


	  <input type="submit" name="modificar" value="Modificar"> <br /> 
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
