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


      <li class="nav-item active">
<?php echo "<a class='nav-link btn btn-outline-success p-3 ml-2' href='jefe.php?token=$digitos' ><i class='far fa-key'></i> Administrador</a>";?>
      </li>

     
      

    </ul>

  </div>
</nav> 
</div><!--cierra el container-->
<div class="container">
 <!-- row -->
  <div class="row d-flex justify-content-center">
    <div class="col-md-5 text-light p-4 mt-4" style="background: rgba(47, 175, 255, 0.8);">
        <?php include("zerox.php");?>      
        <form action="<?php echo $ir;?>" method="post" >
              <p class="h4 text-center mb-4">INGRESO A LA EVALUACIÓN</p>
              <!-- Material input password -->
              <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-light text-info" id="basic-addon1"><i class="far fa-lock"></i></span>
                    </div>
                  <input type="password" name="<?php echo $us;?>" class="form-control" placeholder="Escriba su Matricula" aria-label="Nombre de Usuario" aria-describedby="basic-addon1" style="height: 50px;font-size: 15px;" autofocus required pattern="[0-9]{5,15}">
                  <input type="hidden" name="<?php echo $car;?>" value="<?php echo $num;?>" />
              </div>

              <div class="text-center mt-4 d-flex justify-content-star">
                  <button type="submit" class="btn btn-warning rounded-0" style="font-size: 25px;" ><i class="fal fa-sign-in-alt"></i> Ingresar</button>
              </div>
              <hr>
                 
        </form>
        <!-- Material form login -->
    </div><!--cierra el col-md-5-->
    <div class="col-md-6 text-light ml-2 p-4 mt-4" style="background: rgba(76, 75, 75, 0.6)">
      <div class="text-center lead"><b>ACCEDE A TU CUENTA PARA LA EVALUACIÓN</b></div>
      <div class="text-warning mt-3">
        <ul style="list-style:none;">
          <li><i class="fal fa-hand-point-right"></i> Ingresa a la Evaluación</li>
          <li><i class="fal fa-hand-point-right"></i> Responde las Preguntas</li>
          <li><i class="fal fa-hand-point-right"></i> Compara los resultados Obtenidos</li>
          <li><i class="fal fa-hand-point-right"></i> Imprime tus resultados de la Evaluación</li>
          <li><i class="fal fa-hand-point-right"></i> Participa en los  Foros</li>
        </ul>

      </div>
    </div>

   </div> 
</div>


        <!--<div class="d-flex justify-content-center">
          <p><a href="#" class="text-warning"><b>WWW.SUEVALUACION.COM</b></a></p>
        </div>-->
      </div>
    </footer>

<!--<img src="imagenes/fondo.jpg" class="img-fluid" alt="Responsive image">-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
</html>