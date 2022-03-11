<?php  
session_start();
if(empty($_SESSION['username'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>

<?php require_once("includes/connection.php"); ?>
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
    
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
    <style>
	.group {
border: 1px solid #999999;
margin: 0 auto;
padding: 20px;
width: 400px;
}
.contact-form {
width: 400px;
text-align: left;
}
.form-input {
display: block;
width: 380px;
height: 15px;
padding: 5px 10px;
margin-bottom: 15px;
font: 14px ’Helvetica Neue’, Helvetica, Arial, sans-serif;
color: #ccc;
background-color: #777;
border: 1px solid #999;
box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
-moz-transition: all 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
-o-transition: all 0.4s ease-in-out;
-ms-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
behavior: url(PIE.htc);
}

textarea.form-input {
width: 380px;
height: 200px;
overflow: auto;
}
.form-input:focus {
border: 1px solid #7fbbf9;
-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
}
.form-input:-moz-ui-invalid {
border: 1px solid #e00;
-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
}
.form-input.invalid {
border: 1px solid #e00;
-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
}
.form-btn {
padding: 0 15px;
height: 30px;
font: bold 12px ’Helvetica Neue’, Helvetica, Arial, sans-serif;
text-align: center;
color: #fff;
text-shadow: 0 1px 0 rgba(0, 0, 0, 0.7);
cursor: pointer;
border: 1px solid #0d3d6a;
outline: none;
position: relative;
background-color: #1d83e2;
background-image: -webkit-gradient(linear, left top, left bottom, from(#1d83e2), to(#0d3d6a)); /* Saf4+, Chrome */
background-image: -webkit-linear-gradient(top, #1d83e2, #0d3d6a); /* Chrome 10+, Saf5.1+, iOS 5+ */
background-image: -moz-linear-gradient(top, #1d83e2, #0d3d6a); /* FF3.6 */
background-image: -ms-linear-gradient(top, #1d83e2, #0d3d6a); /* IE10 */
background-image: -o-linear-gradient(top, #1d83e2, #0d3d6a); /* Opera 11.10+ */
background-image: linear-gradient(top, #1d83e2, #0d3d6a);
-pie-background: linear-gradient(top, #1d83e2, #0d3d6a); /* IE6-IE9 */
-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
-moz-background-clip: padding;
 -webkit-background-clip: padding-box;
 background-clip: padding-box;
 behavior: url(PIE.htc);
 }
 .form-btn:active {
 border: 1px solid #1d83e2;
 background-color: #0d3d6a;
 background-image: -webkit-gradient(linear, left top, left bottom, from(#0d3d6a), to(#1d83e2)); /* Saf4+, Chrome */
 background-image: -webkit-linear-gradient(top, #0d3d6a, #1d83e2); /* Chrome 10+, Saf5.1+, iOS 5+ */
 background-image: -moz-linear-gradient(top, #0d3d6a, #1d83e2); /* FF3.6 */
 background-image: -ms-linear-gradient(top, #0d3d6a, #1d83e2); /* IE10 */
 background-image: -o-linear-gradient(top, #0d3d6a, #1d83e2); /* Opera 11.10+ */
 background-image: linear-gradient(top, #0d3d6a, #1d83e2);
 -pie-background: linear-gradient(top, #0d3d6a, #1d83e2); /* IE6-IE9 */
 -moz-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
 -webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);

 box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
 behavior: url(PIE.htc);
 }
 label {
 margin-bottom: 5px;
 display: block;
 width: 300px;
 color: #555;
 font-size: 14px;
 font-weight: bold;
 }
 label span {
 font-size: 12px;
 color: #fff;
 font-weight: normal;
 }
 .contact-form.frame {
 background-color: #444444;
 border: 1px solid #CCCCCC;
 padding: 20px;
 } </style>
</head>
<body >
<div class="main"  >
  <div class="bg-img"></div>
<!--==============================header=================================-->
<?php
    include_once("header.php");
    ?>    
<!--==============================content================================--> 
    <section id="content"><div class="ic"></div>
        <div class="container_12">
          
            <div class="grid_12 top-1">
            <div class="block-3 box-shadow">
              <marquee>
              <h1 style="font-size:24px">Usted esta haciendo un Nuevo Registro</h1></marquee>
              <p>&nbsp;</p>
              <div class="group">
<form action="reg.php" method="post" >
  <div align="center">
  <label for="idfamilia"></label>
<div align="center">
  <label for="idfamilia">Id de Familia</label>
  <input type="text" name="idfamilia" class="form-input" required/>
</div>

<label for="Cedula"></label>
<div align="center">
  <label for="Cedula">Cedula</label>
  <input type="text" name="Cedula" class="form-input" required/>
</div>
<label for="Nombres"></label>
<div align="center">
  <label for="Nombres">Nombres</label>
  <input type="text" name="Nombres" class="form-input" required/>
</div>
<label for="Apellidos"></label>
<div align="center">
  <label for="Apellidos">Apellidos</label>
  <input type="text" name="Apellidos" class="form-input" required/>
</div>
 <label for="Edad"></label>
<div align="center">
  <label for="Edad">Edad</label>
  <input type="number" name="Edad" class="form-input"/>
</div>
  
  <label for="Genero"></label>
<div id="radio" align="center">
  <label for="Genero">Genero</label>
<div id="radio2">  <input id="radio3" type="radio" name="Genero" value="M" class="form-input" required/>
  Masculino
<input id="radio3" type="radio"  name="Genero" value="F" class="form-input" required/>Femenino</div>
</div>
<P>.</P>

  <label for="F_N"></label>
<div align="center">
  <label for="F_N">Fecha de Nacimiento</label>
  <input type="date" name="F_N" class="form-input"/>
</div>




  <input class="form-btn" name="submit" type="submit" value="Registrar!!" />

</form>
</div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
           	  
              
            </div>
          </div>
          <div class="clear"></div>
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
