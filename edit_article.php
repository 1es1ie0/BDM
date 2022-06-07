
   <?php include ('./templates/header.php');
   include('./classes/newsConn.classes.php');
   $N=$_SESSION["n_ID"];
   $d = new NewsConn();
   


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
        <?php foreach ($N as $n){?>
            
        <form action="./includes/news_inc.php"  method="post" enctype="multipart/form-data">
        <div class="row align-items-center justify-content-center "> 
        
        <?php $Comment =$d->getCommentAdmin($n["NEWS_ID"]);
        foreach($Comment as $i){
                ?>
                <div class="border-top py-5">
                    <div class="bg-light p-2">
                    <center><label  class="form-label mt-4">COMENTARIO ADMINISTRADOR</label></center>
                    
                    <input type="text" style="display:none" id="user_id"name="user_id" value="<?php echo $_SESSION["user_id"]?>">
                        <span class="d-block font-weight-bold name" ><?php echo  $i["ALIAS"]?></span>
                        
                        <div class="d-flex flex-row align-items-start">
                                <img class="rounded-circle" src="<?php echo $i["PICTURE"]?>" width="40">
                                <label  class="form-label mt-4"><?php echo $i["TEXT"]?></label>
                                
                            </div>
                            
                            </div>
                            
                        </div>
                </div>

            <?php
                
            } ?>
            <br>
            <div class="form-group">
            <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
                <label  class="form-label mt-4">Titulo</label>
                
                <input type="text " id="user_id" name="user_id" value=' <?php echo $_SESSION["user_id"] ?>' style="display:none!important;">
                <input type="text"   class="form-control"  id="titulo" name="titulo" value="<?php echo $n["TITLE"]?>">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Pais</label>
                <input type="text"   class="form-control" id="pais" name="pais"value="<?php echo $n["COUNTRY"]?>">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Colonia</label>
                <input type="text"   class="form-control" id="colonia"  name="colonia"value="<?php echo $n["SUBURB"]?>">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Ciudad<?echo $_SESSION["user_id"]?></label>
                <input  type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $n["CITY"]?>">
            </div>
            
             <div class="form-group">
                <label  class="form-label mt-4">Fecha en la que ocurrieron los eventos</label>
                <input type="text" class="form-control" id="fecha" name="fecha"value="<?php echo $n["DATE_OF_EVENTS"]?>">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Descripcion de la nota</label>
                <input type="text"id="descripcion" name="descripcion" class="form-control text-area-content" value="<?php echo $n["DESCRIPTION"]?>" >
                <!--<textarea id="descripcion" name="descripcion" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Contenido de la nota</label>
                <input type="text"id="text" name="text" class="form-control text-area-content" value="<?php echo $n["TEXT"]?>" >
                <!--<textarea id="text" name="text" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>

          
            <div class="col-6 col-md-5">
                
                    <!--
                    <div class="form-group row">        
                        <label for="formFile" class="form-label mt-4">Coloque un video</label>
                        <input class="form-control" type="file" id="formFile" name="formFile" value="load">
                    </div>-->
              
            </div>
            <div class="col-sm-12 pt-4">
                               <div class="row pb-2">
                                   <div class="col-sm-12 col-md-8">
                                   <label  class="form-label mt-4">Coloque una imagen</label>
                                   </div>
                                   <div class="col-sm-12 col-md-4" align="right">
                                       <a href="#" class="btn btn-success add_material">Agregar Imagen</a>
                                   </div>
                                   <div class="col-sm-12">
                                       <hr>
                                   </div>
                               </div>
                                <table class="table" id="tablemateriales">
                                    
                                    <tbody>
                                    <tr><td><input class="form-control" type="file" id="ciudad2"  name="imagen_cantidad[]" required></td><td></td></tr>
                                    </tbody>
                                </table>
            </div>

            <div class="form-group">
            <label for="formFile" class="form-label mt-4">Palabras clave</label>
            <input type="text" class="form-control form-control-sm"  value="<?php echo $n["KEY_WORDS"]?>" id ="keyword" name="keyword" type="text" >
            
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
            </div>
            <fieldset class="form-group">
                <legend class="mt-4">Secciones</legend>
                <?php foreach($secciones as $s){?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = ""value="<?php echo $s["SECTION_ID"] ?>" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        <?php echo $s["SECTION_NAME"] ?>
                        </label>
                    </div>
                    <?php }
                    ?>
                    
            </fieldset>
            <?php }?>

            <div class="form-group">
                <label  class="form-label mt-4">Firma del Autor</label>
                <input type="text" class="form-control firma" id="Firma" name="Firma"value="<?php echo $n["SIGN"] ?>">
            </div>

            <div class="form-group centered">
            <input type="submit" name="submit_edit" id="submit_edit"  class="btn btn-success btn-article editbtn" value="Enviar a revisión">
            </div>
            
        </div>
        </form>
       
    </div>
    </div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
      $('.add_material').click(function (e){
            e.preventDefault();
            $('#tablemateriales').append('<tr><td><input class="form-control" type="file" id="imagen_cantidad[]"    name="imagen_cantidad[]" required></td><td><a href="#" class="btn btn-danger DeleteButtonMaterial"><span class="fa fa-trash"></span></a></td></tr>');
        });
$("#tablemateriales").on("click", ".DeleteButtonMaterial", function(e) {
            e.preventDefault();
            $(this).closest("tr").remove();
            SacarTotalesMateriales();
        });

        
    </script>

  

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="../assets/js/demo.js"></script>
</body>


<?php include ('./templates/footer.php')?>