<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>CuteStore</title>

  <!--llamando al CSS  --> 
  <link href="../css/icon.css" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php include("../inc/menu.php");?>
<?php include("../inc/facebook.php");?>
              
<div class="row">
                <form class="col s12">
                <div class="row">
                    <h2 class="center light-blue-text">Envianos un mensaje </h2>
                    <div class="input-field col s6">
                        
                    <input placeholder="Placeholder" id="email" type="text" class="validate">
                    <label for="email">Tu correo:</label>
                    </div>
                    <div class="input-field col s6">
                    <input id="asunto" type="text" class="validate">
                    <label for="asunto">Asunto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="texto" type="text" class="validate">
                    <label for="texto">Mensaje</label>
                    </div>
                </div>
                <a class="waves-effect waves-light btn center">Enviar</a>
                <a class="waves-effect waves-light btn center">Cancelar</a>
                </form>
            </div>
        </div>

<div class="fb-comments" data-href="https://www.facebook.com/Cute-Store-1362167270520408/" data-numposts="7"></div>
 
      <?php include("../inc/pie.php");?>
  
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script> 
    <script type="text/javascript" src="../js/inicializacion.js"></script> 
</body>
</html>