<?php include ('./templates/header.php');
$secciones_edit=$_SESSION["SECCIONES_ID"] ;

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/styles/style.css">

    <title>Crear nota</title>
  </head>


<body>
    <div class="container">
    <div class="container-box">
        <form action="./includes/secciones_inc.php"  method="post" >
        <div class="row align-items-center justify-content-center "> 

            <div class="form-group">
                <?php foreach($secciones_edit as $S){?>
                <label  class="form-label mt-4">Nombre de la seccion</label>
                <input type="text"   class="form-control"  id="titulo" name="titulo" value="<?php echo $S["SECTION_NAME"] ?>">
            </div>
             <div class="form-group">
                <label  class="form-label mt-4">Orden de la seccion</label>
                <input type="text"   class="form-control"  id="orden" name="orden" value="<?php echo $S["ORDER_SECTION"] ?>">
            </div>
     
             
            <div class="form-group">
                <label  class="form-label mt-4">Descripcion de la seccion</label>
                <input type="text"id="descripcion" name="descripcion" class="form-control text-area-content" value= "<?php echo $S["DESCRIPTION"] ?>" >
                <!--<textarea id="descripcion" name="descripcion" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>
          
            <div class="form-group" >
            <label  class="form-label mt-4">Selecciona el color deseado</label>
                <input type="color" id="color" name="color"class="btn btn-primary rounded morado" style="background: #222;" value="<?php echo $S["COLOR"] ?>">
                
            </div>
            <?php }?>
            
            <div class="form-group centered">
                
            <input type="text" name="seccionID" id="seccionID" style="display:none;"value="<?php echo $S["SECTION_ID"]; ?>">
                
            <button class="btn btn-outline-info btn-align btn-lg" onclick="location.href='./secciones.php';">Regresar</button>
            <input type="submit" name="submit_edit" id="submit_edit"class="btn btn-outline-success btn-align btn-lg" value="Guardar cambios">
            </div>
            
        </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="../assets/js/demo.js"></script>
</body>


<?php include ('./templates/footer.php')?>