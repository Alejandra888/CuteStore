<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>CuteStore</title>

  <!--llamando al CSS  --> 
  <link href="css/icon.css" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!--llama el menu-->
 <?php include("inc/menuindex.php");?>
 <?php include("inc/facebook.php");?>
<!--parallax-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container ">
        <br><br>
        <h1 class="header center"><img src="img/logo1.png" width="300" height="250"></h1>
        <div class="row center">
          <h5 class="header col s12 light  pink darken-2">Tu tienda de confianza </h5>
        </div>
       
        <br><br>

      </div>
    </div>

    <div class="parallax"><img src="img/wallpaper1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   seccion  de comentario   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
             <h5 class="center brown-text">Vision</h5>
             <p class="light">Ser una gran tienda nacional con envios a todo el pais que logre ayudar a todos los clientes.</p>
             </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
          
            <h5 class="center brown-text">¿Quienes somos?</h5>
            <p class="light">Somos una tienda en la cual encontraras una variedad de peluches para regalar para cualquier ocasion ya sea cumpleaños, aniversarios ,entre otros.</p>
        
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            
            <h5 class="center brown-text">Mision</h5>

            <p class="light">Ayudar a nuestros clientes a regalar peluches de calidad al mejor precio del mercado.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/wallpaper2.jpg"> <!--imagen del slider-->
 
      </li>
      <li>
       <img src="img/osor6.jpg"> <!--imagen del slider-->
      
     
    </ul>
  </div>
  
<?php include("inc/pie.php");?>

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/inicializacion.js"></script>

  </body>
  
</html>