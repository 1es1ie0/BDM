<?php include ('./templates/header.php');


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
  <form class="form" action="./includes/secciones_inc.php" method="post" >
<div id="contenido_sections" >
  <div class="card text-white  mb-3" style="background: <?php echo $S["COLOR"] ?>;">
    <div class="card-header"><?php echo $S["SECTION_NAME"] ?></div>
    <div class="card-body">
      <p class="card-text"><?php echo $S["DESCRIPTION"] ?></p>

      <input type="text" name="seccionID" id="seccionID" style="display:none;"value="<?php echo $S["SECTION_ID"]; ?>">
      <input type="submit" name="viewSec" class="btn btn-outline-info btn-align btn-lg" value="Ver seccion" >
      <input type="submit" name="deleteSec" class="btn btn-outline-warning btn-align btn-lg" value="Eliminar" >
    </div>
    
    
  </div>
</form>
  <?php } ?>




<center>
  <div class="form-group">
     <!-- <a href="./editar_seccion.php"><input type="button" class="btn btn-outline-warning btn-align btn-lg" value="Editar Seccion"></a>-->
      <a href="./crear_seccion.php"><input type="button" class="btn btn-outline-info btn-align btn-lg" value="Agregar Seccion"></a>
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