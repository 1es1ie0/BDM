<?php include ('./templates/header.php');
include('./classes/seccionConn.classes.php');
$database = new SeccionConn();
$secciones =$database->getSection();

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

<?php foreach($secciones as $S){?>
<div id="contenido_sections" >
<a href="./editar_seccion.php" style ="text-decoration: none; color:white;">
  <div class="card text-white  mb-3" style="background: <?php echo $S["COLOR"] ?>;">
    <div class="card-header"><?php echo $S["SECTION_NAME"] ?></div>
    <div class="card-body">
      <p class="card-text"><?php echo $S["DESCRIPTION"] ?></p>
    </div>
    </a>
  </div>
  <?php } ?>




<center>
  <div class="form-group">
      <a href="./editar_seccion.php"><input type="submit" class="btn btn-outline-warning btn-align btn-lg" value="Editar Seccion"></a>
      <a href="./crear_seccion.php"><input type="submit" class="btn btn-outline-info btn-align btn-lg" value="Agregar Seccion"></a>
  </div>
</center>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="../assets/js/demo.js"></script>
 <script>
window.onload = function () {
    $.getJSON("Tomardatos.php", exito);
};
        
 </script>
</body>

<?php include ('./templates/footer.php')?>