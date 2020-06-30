<!doctype html>
<html lang="Es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/StyleSheet1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/css/fontawesome-all.css" crossorigin="anonymous">
    <script defer src="fonts/js/fontawesome-all.js"></script>

    <title>Evaluaciones</title>
<style>
.footer {

width: 100%;
position: fixed; /* Fija el contenedor a una posición */
bottom: 0px; /* El div se sitúa abajo */
z-index: 10; /* Lo muestra por encima de otros div */

 }

</style>
  </head>
  <body style="background-image: url(imagenes/fondoP4.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #66999;">
 <!--container -->   
<div class="container-fluid" style="background-color: rgba(20, 22, 19, 0.6);">
 <nav class="navbar navbar-expand-lg navbar-dark container p-4" style="background-color: rgba(20, 22, 19, 0.2);">
  <a class="navbar-brand" href="#"><i class="fal fa-edit fa-2x"></i>EDUCACIÓN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php
mt_srand(time());
$digitos = '';
for($i = 0; $i < 16; $i++){
   $digitos .= mt_rand(0,9);
}
;?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
       <li class="nav-item active">
        <a class="nav-link btn btn-outline-warning p-3 ml-2" href="index.php" ><i class="far fa-home"></i> Inicio</a>
      </li>
    </ul>

  </div>
</nav> 
</div><!--cierra el container-->
<!--nav bar-->

<div class="container">
<div class="row justify-content-center mt-4">
    <div class="col-12 col-sm-8 col-md-5 my-5 p-4" style="border-radius: 1em; background-image: url('imagenes/Edu.jpg');">
<!--desde aqui el FORM-->
<form action="login.php" method="post">
            <div class="input-group mb-1 p-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fal fa-user"></i></span>
                      </div>
                      <input name="usuario" type="password" class="form-control" placeholder="Ingresa tu Matricula de Identidad" aria-label="Nombre de Usuario" aria-describedby="basic-addon1" style="height: 3.5em;" autofocus required pattern="[0-9]{3,15}">
            </div>
<input type="hidden" name="cargo" value="4">
            <div class="input-group p-3 d-flex justify-content-between">
                      <a href="index.php" class="btn btn-warning text-white rounded-0" style="height: 3em;"><h5><i class="fal fa-arrow-to-left"></i> Regresar</h5></a>
                      <button type="submit" class="btn btn-success text-white rounded-0" style="height: 3em;"><h5><i class="fal fa-sign-in"></i>Entrar</h5></button>

            </div>
                <hr>
            

</form> 
<!-- hasta aqui el formulario-->
</div>
</div>  

</div>
        <!--<div class="d-flex justify-content-center">
          <p><a href="#" class="text-warning"><b>WWW.SUEVALUACION.COM</b></a></p>
        </div>-->
      </div>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script defer src="fonts/js/fontawesome-all.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="footer1">
    &#169 Educacion online 2020
    </div>

</body>

<!-- //Body -->

</html>

<!-- //html -->