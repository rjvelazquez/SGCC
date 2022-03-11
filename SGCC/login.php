<?php  
session_start();
if(!empty($_SESSION['username'])) { // Recuerda usar corchetes.
        header('Location: home.php');
    }
?>

<?php require_once("includes/connection.php"); ?>
<?php
date_default_timezone_set('America/La_Paz');
$operacion='inicio de sesion';
$fecha=date("Y/m/d");
$hora=date("H:i:s");



if(isset($_SESSION["username"])){
// echo "Session is set"; // for testing purposes
header("Location: home.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

  	
	$query =mysqli_query($con, "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
	$dbusername=$row['username'];
    $dbpassword=$row['password'];
   
    
    }

    if($username == $dbusername && $password == $dbpassword)

    {

session_start();
    $_SESSION['username']=$username;
   	
	$_GRABAR_SQL = "INSERT INTO logs (username,fecha,hora,operacion) VALUES ('$dbusername', '$fecha', '$hora', '$operacion')";
mysqli_query($con, $_GRABAR_SQL);
	

	




    /* Redirect browser */
    header("Location: home.php");
    }
    } else {

 $message =  "Contraseña invalida!";
    }

} else 
{
    $message = "Todos los campos son requeridos!";
}
}
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
    <script>
		$(window).load(function(){
			$('.slider')._TMS({
			prevBu:'.prev',
			nextBu:'.next',
			pauseOnHover:true,
			pagNums:false,
			duration:800,
			easing:'easeOutQuad',
			preset:'Fade',
			slideshow:7000,
			pagination:'.pagination',
			waitBannerAnimation:false,
			banners:'fade'
			})
		}) 	
    </script>
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
color: #FFFFFF;
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
 } 
	</style>
</head>
<body>

<div class="main">
  <div class="bg-img"></div>
<!--==============================header=================================-->
<?php
require_once("headerl.php");
?>
<!--==============================content================================--> 
    <section id="content"><div class="ic"></div>
        <div class="container_12">
          
            <div class="grid_12 top-1">
            <div class="block-3 box-shadow">
              <marquee><h1 style="font-size:24px">BIENVENIDOS A LA BASE DE DATOS DEL CONSEJO COMUNAL 3 DE MAYO</h1></marquee>
              
			  <div class="group">




<form id="login" action="" method="post">
<label style="text-align:center; margin-left:50px;"><h2 style="text-decoration:blink;">Iniciar Sesion</h2>
</label>
<label for="user"></label>
<div align="center">
  <label for="user">Usuario</label>
  <input type="text" name="username" class="form-input" required/>
</div>
<label for="pass"></label>
<div align="center">
  <label for="pass">Contraseña</label>
  <input type="password" name="password" class="form-input" required/>
</div>
  <input class="form-btn" name="login" type="submit" value="Iniciar Sesion" />
</form>
<?php 
$fecha=date("Y/m/d");
$hora=date("H:i:s");
date_default_timezone_set('America/La_Paz');

if (!empty($message)) {echo "<p class=\"error\">" . $message . "</p>";} ?>
			  
              </div>
          </div>
          <div class="clear"></div>
        </div>
 
<!--==============================footer=================================-->
<?php
    include_once("pie.php");?> 
</div>  
 
</body>
</html>
