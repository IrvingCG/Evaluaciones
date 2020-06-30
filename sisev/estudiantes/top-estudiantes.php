<!doctype html>
<html lang="Es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Administracion WEB">
    

    <title>Alumno</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../fonts/css/fontawesome-all.css" crossorigin="anonymous">


<script defer src="../fonts/js/fontawesome-all.js"></script>
<script type="text/javascript">
  function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
tinymce.init({
  selector: 'textarea',
  height: 200,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen','emoticons',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | emoticons '
});

    </script>
<style>

.footer {

width: 100%;
position: fixed; /* Fija el contenedor a una posición */
bottom: 0px; /* El div se sitúa abajo */
z-index: 10; /* Lo muestra por encima de otros div */

 }

</style>
</head>
<body background="imagenes/fondoP5.png" >

<?php
include("../conexion.php");

$consult="SELECT * FROM dat_admin WHERE ci='$usuario' ";
$resultad=$link->query($consult);
         while ($row=$resultad->fetch_assoc()) {
             $id=$row['id'];
             $aps=$row['ap'];
             $ams=$row['am'];
             $noms=$row['nom'];
             $nivel=$row['nivel'];
             $curso=$row['curso'];
             $paralelo=$row['paralelo'];
             $foto=$row['foto'];
             $colegio=$row['colegio'];
 }          
             ?>
<!--hasta aqui-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h3> <i class="fas fa-edit fa-1x"></i>ALUMNO</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active text-center">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active text-center">
        <?php echo "<a href='principal.php' class='btn btn-warning btn-lg mr-3' role='button' aria-pressed='true'><i class='far fa-home'></i> Inicio</a> ";?>
      </li>
      <li class="text-center">
        <?php echo "<a href='trabajos_lista.php?nivel=$nivel&curso=$curso&paralelo=$paralelo' class='btn btn-outline-primary btn-lg' role='button' aria-pressed='true'><i class='fal fa-file-alt'></i> Trabajos</a> ";?>
      </li>
      <li class="text-center">
        <?php echo "<a href='#' class='btn btn-outline-warning btn-lg ml-3' role='button' aria-pressed='true'><i class='far fa-pen-alt'></i> Tareas</a> ";?>
      </li>
      <li class="text-center">
        <?php echo "<a href='foro_lista.php?nivel=$nivel&curso=$curso&paralelo=$paralelo' class='btn btn-outline-success btn-lg ml-3' role='button' aria-pressed='true'><i class='fal fa-comments'></i> Foros</a> ";?>
      </li>


    </ul>

        <div class="text-center">
      <a href="../cerrarsesion.php" class="btn btn-outline-danger my-2 my-sm-0"><h4><i class="fal fa-sign-out-alt"></i> Salir</h4></a>
        </div>
  </div>
</nav>
    <!--<body>-->