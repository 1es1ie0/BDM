<?php include ('./templates/header.php')?>
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
        <form action="./includes/news_inc.php"  method="post" >
        <div class="row align-items-center justify-content-center "> 

            <div class="form-group">
                <label  class="form-label mt-4">Nombre de la seccion</label>
                <input type="text"   class="form-control"  id="titulo" name="titulo" placeholder="Ingresa el nombre de la seccion...">
            </div>
             <div class="form-group">
                <label  class="form-label mt-4">Orden de la seccion</label>
                <input type="text"   class="form-control"  id="titulo" name="titulo" placeholder="Ingresa un orden para la seccion">
            </div>
     
             
            <div class="form-group">
                <label  class="form-label mt-4">Descripcion de la seccion</label>
                <input type="text"id="descripcion" name="descripcion" class="form-control text-area-content"  >
                <!--<textarea id="descripcion" name="descripcion" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>
          
            <div class="btn_group_colors" >
                <button type="button" class="btn btn-primary rounded morado" style="background: purple;"></button>
                <button type="button" class="btn btn-primary rounded azul" style="background: blue;"></button>
                <button type="button" class="btn btn-primary rounded verde" style="background: rgb(0, 194, 0);"></button>
                <button type="button" class="btn btn-primary rounded amarillo" style="background: yellow;"></button>
                <button type="button" class="btn btn-primary rounded naranja" style="background: rgb(255, 131, 15);"></button>
                <button type="button" class="btn btn-primary rounded rojo" style="background: red;"></button>
                <button type="button" class="btn btn-primary rounded rosa" style="background: rgb(255, 118, 221);"></button>
            </div>

            
            <div class="form-group centered">
            <input type="submit" class="btn btn-success btn-article" value="Guardar cambios">
            </div>
            
        </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="../assets/js/demo.js"></script>
</body>


<?php include ('./templates/footer.php')?>