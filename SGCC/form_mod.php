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
    <title>Admin HC</title>
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
<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
    <?php
    include_once("header.php");
    ?>
    <section id="content">

          
           
			
            <div class="block-3 box-shadow">
	<p>&nbsp;</p>
    <?php
    include_once("marquee.php");
    ?>
					 

<div id="contenidoo" >
<div id="php">

<?php

$cedula = $_POST['Cedula'];
  $query = "select * from registros where Cedula = '$cedula'";     // Esta linea hace la consulta
    $result = mysqli_query($query); 

    while ($registro = mysqli_fetch_array($result)){ 
	$idfamilia = $registro['idfamilia'];
 	$nombres = $registro['Nombres'];
	$apellidos = $registro['Apellidos'];
	$edad =$registro["Edad"];
	$fn = $registro["F_N"];
  $genero = $registro["Genero"];
	 
	}
	
	
	
	
	$mod = $_POST["mod"];
	if($mod=="yes"){
if(isset($_POST["enviar"])){

$idfamilia = $_POST['idfamilia'];
$cedula = $_POST['Cedula'];
$nombres = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$edad = $_POST['Edad'];
$fn = $_POST['F_N'];
$genero = $_POST['Genero'];
 
$_GRABAR_SQL = "Update registros set idfamilia='$idfamilia', Nombres='$nombres', Apellidos='$apellidos', Edad='$edad', F_N='$fn', Genero='$genero' Where Cedula='$cedula'";
mysqli_query($_GRABAR_SQL);

$exito= "Datos Modificados Exitosamente!";
}

else {
 $merror="Error!";
    }
}
	
?> </div>

<span class="mensaje Estilo23">
<?php if (!empty($merror)) {echo "<p class=\"error\">" . $merror . "</p>";} ?></span>
<span class="subtitle Estilo23"><?php if (!empty($exito)) {echo "<p>" . $exito . "</p>";} ?></span>
<form method="post" action="" name="nuevo_art" id="formulario"  >
	<fieldset>
		<legend>Modificar Registro</legend>

		
		<label><b>Cedula:</b>
		<input required="required" disabled="disabled" value="<?php echo "$cedula"; ?>" type="text" />  <input style="display:none" value="<?php echo "$cedula"; ?>" name="Cedula" type="text" />
		</label>
    <label><b>Id de Familia</b>
    <input required="required" value="<?php echo "$idfamilia"; ?>" name="idfamilia" type="text" /></label>
		<label><b>Nombres</b>
		<input required="required" value="<?php echo "$nombres"; ?>" name="Nombres" type="text" /></label>
		<label><b>Apellidos</b>
		<input required="required" value="<?php echo "$apellidos"; ?>" name="Apellidos" type="text" /></label>
		<label><b>Edad</b>
		<input required="required" value="<?php echo "$edad"; ?>" name="Edad" type="number" class="form-input"/></label>
		<label><b>Fecha de Nacimiento</b>
		<input value="<?php echo "$fn"; ?>" name="F_N" type="date" /></label>
		<div style="display:block; position: relative;">
		<label style="font-size:15px; display:block; padding:3px; margin:9px; margin-left:20px; margin-right:27px;"> <b>Genero: </b> <br /> 
		<?php 
			if($genero=="F"){
			include_once("g_fem.php");
			}
			else
			{
			include_once("g_mas.php");
			}
		?>		
		</label>	
	  </div>		
	  
	
		 <br /> 
					<label for="enviar">
			<input style="display:none" value="yes" name="mod" type="text" />
			<input  type="submit" class="uno" name="enviar" id="enviar" value="Guardar" /></label>
	  </div>
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

