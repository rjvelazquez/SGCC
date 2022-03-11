<?php require_once("includes/connection.php"); 

?>
<?php  
session_start();
if(empty($_SESSION['username'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
	date_default_timezone_set('America/La_Paz');
$operacion='listado general';
$fecha1=date("Y/m/d");
$hora1=date("H:i:s");
$dbusername=$_SESSION['username'];

$query =mysql_query("SELECT * FROM users");

$_GRABAR_SQL = "INSERT INTO logs (username,fecha,hora,operacion) VALUES ('$dbusername', '$fecha1', '$hora1', '$operacion')";
mysql_query($_GRABAR_SQL);

?>
 <!DOCTYPE html>
<html lang="es">
<head>
    <title>C.C. 3 de Mayo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
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
.Estilo23 {font-size: 9px}
-->
</style>

<script>
  function imprimir(){
  var objeto=document.getElementById('imprimeme');  //obtenemos el objeto a imprimir
  var ventana=window.open('');  //abrimos una ventana vac�a nueva
  ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
  ventana.document.close();  //cerramos el documento
  ventana.print();  //imprimimos la ventana
  ventana.close();  //cerramos la ventana
}
  </script>
</head>
  <body onLoad="imprimir();">
<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <?php
    include_once("header.php");
    ?>
<!--==============================content================================--> 
    <section id="content"><div class="ic"></div>
    <?php
    include_once("marquee.php");
    ?>
<div id="imprimeme" style="">
<form id='formulario2' method="get">
<fieldset>
		<legend style="font-size:18px;">Listado de Niños</legend>
	  
      <table style="border:1px #FF0000; color:#000000;  text-align:center; width:100%;">
  <tr style="background:#D10900;">
  	<th bordercolor="#FFFFFF" style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;" scope="col">N°</th>
    <th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">ID Familia</th>
    <th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">Cedula</th>
    <th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">Nombres </th>
	<th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">Apellidos </th>
    <th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">Edad </th>
	<th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">Genero </th>
	<th style=" border-bottom-width:3px; border-bottom-style:solid; border-bottom-color:#000000;"  scope="col">F-N </th>
	        </tr>
	  
	  
<?php 
    $query = "select * from registros where Edad < 18 ORDER BY idfamilia DESC";     // Esta linea hace la consulta
    $result = mysql_query($query); 
$contador=0;
    while ($registro = mysql_fetch_array($result)){ 

$contador++;
echo " 
      <tr  bgcolor='#CCCCCC' align='center'> 
	  <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$contador."</td> 
	  <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['idfamilia']."</td>
      <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['Cedula']."</td> 
      <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['Nombres']."</td> 
	  <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['Apellidos']."</td> 
      <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['Edad']."</td> 
	  <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['Genero']."</td> 
      <td style=' border-bottom-width:1px; border-bottom-style:solid; border-bottom-color:#000000;'>".$registro['F_N']."</td> 
	  </tr> 
"; 
} 
?> 

</table>

</fieldset>
</form>


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
