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
        <ul class="tabs black-transparent">
            <li class="tab"><a class="blue-text right" href="#test1">Iniciar Sesion</a></li>
            <li class="tab"><a class="blue-text right" href="#test2">Registrate</a></li>
        </ul>
<div id="test1">
    <div class="container">
        <div class="section">
            <div class="row">
                    <form class="col s10">
                    <div class="row">
                        <h2 class="center light-blue-text"> Iniciar Sesion </h2>
                        <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nombres de Usuario:</label>
                        </div><br>
                    <div class="row">
                        <div class="input-field col s10">
                        <input id="password" type="password" class="validate">
                        <label for="password">Contraseña:</label>
                        </div>
                        </div>
                    </div>
                    <a class="waves-effect waves-light btn center" onclick="pulsar()">Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
</div>

<!--Formulario para registrarse con nueva cuenta-->
<div id="test2">
            <div class="row">
                <form class="col s12">
                <div class="row">
                    <h2 class="center light-blue-text"> Registrate si no tienes cuenta </h2>
                    <div class="input-field col s6">
                        
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">Nombres:</label>
                    </div>
                    <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Apellidos:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Contraseña:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Confirmar contraseña:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                <a class="waves-effect waves-light btn center">Guardar</a>
                <a class="waves-effect waves-light btn center">Cancelar</a>
                </form>
            </div>
        </div>

     <?php include("../inc/pie.php");?>
<!--  Scripts-->
  <script src="../js/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/inicializacion.js"></script>
  <script src="../js/mensaje.js"></script>
  </body>
</html>