<?php include ('./templates/header.php');
require('.\classes\seccionConn.classes.php');
$ddatabase = new SeccionConn();
$secciones =$ddatabase->getSection();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Style -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./css/styles/style.css">
    <!-- endinject -->
    <title>Crear nota</title>
  </head>

<body>
  

  <div class="container-box">
  <div class="text-center">
    <h3 class="text-center mt-5">Secciones</h3>
  </div>
  <br>
 <?php
 foreach($secciones as $s){
 ?>
  <div class="card text-white  mb-3" style="background: purple;">
      <div class="card-header"><?php echo $s["SECTION_NAME"]?></div>
      <div class="card-body">
      <p class="card-text"><?php echo $s["DESCRIPTION"]?></p>
  </div>
</div>
<?php
 }
?>

<div class="card text-white  mb-3" style="background: blue;">
  <div class="card-header">Seccion 2</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>
<div class="card text-white mb-3" style="background: rgb(0, 194, 0);">
  <div class="card-header">Seccion 3</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>
<div class="card text-white  mb-3" style="background: yellow;">
  <div class="card-header">Seccion 4</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>
<div class="card text-white  mb-3" style="background: rgb(255, 131, 15);">
  <div class="card-header">Seccion 5</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>
<div class="card text-white  mb-3" style="background: red;">
  <div class="card-header">Seccion 6</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>

<div class="card text-white mb-3" style="background: rgb(255, 118, 221);">
  <div class="card-header">Seccion 7</div>
  <div class="card-body">
    <p class="card-text">Descripcion de la seccion</p>
  </div>
</div>

<center>
  <div class="form-group">
      <a href="./editar_seccion.php"><input type="submit" class="btn btn-outline-warning btn-align btn-lg" value="Editar Seccion"></a>
      <a href="./crear_seccion.php"><input type="submit" class="btn btn-outline-info btn-align btn-lg" value="Agregar Seccion"></a>
  </div>
</center>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="../assets/js/demo.js"></script>
</body>

<?php include ('./templates/footer.php')?>