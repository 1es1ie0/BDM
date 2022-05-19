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
                <label  class="form-label mt-4">Titulo</label>
                <input type="text " id="user_id" name="user_id" value=' <?php echo $_SESSION["user_id"] ?>'>
                <input type="text"   class="form-control"  id="titulo" name="titulo" placeholder="Ingresa el titulo de la noticia...">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Pais</label>
                <input type="text"   class="form-control" id="pais" name="pais" placeholder="Pais...">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Colonia</label>
                <input type="text"   class="form-control" id="colonia"  name="colonia" placeholder="Colonia...">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Ciudad<?echo $_SESSION["user_id"]?></label>
                <input  type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad...">
            </div>
            <?php foreach($data as $i){
                if(strcasecmp($i["DESCRIPTION"],"Admin")==0){?>
            <div class="form-group">
                <label  class="form-label mt-4">Comentario de admin </label>
                <!--<textarea class="form-control text-area-description"  rows="3" placeholder="Deja una retroalimentacion..."></textarea>-->
            </div>
            <?php
                }
            } ?>
             <div class="form-group">
                <label  class="form-label mt-4">Fecha en la que ocurrieron los eventos</label>
                <input type="text" class="form-control" id="fecha" name="fecha" placeholder="2022/04/14">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Descripcion de la nota</label>
                <input type="text"id="descripcion" name="descripcion" class="form-control text-area-content"  >
                <!--<textarea id="descripcion" name="descripcion" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Contenido de la nota</label>
                <input type="text"id="text" name="text" class="form-control text-area-content"  >
                <!--<textarea id="text" name="text" class="form-control text-area-content"  rows="3">Contenido...</textarea>-->
            </div>

          
            <div class="col-6 col-md-5">
                
                    <div class="form-group row">
                        <label for="formFile" class="form-label mt-4">Coloque una imagen</label>
                        <input class="form-control" type="file" id="formFile" name="formFile" value="load" >
                        </div>
                    <div class="form-group row">        
                        <label for="formFile" class="form-label mt-4">Coloque un video</label>
                        <input class="form-control" type="file" id="formFile" name="formFile" value="load">
                    </div>
              
            </div>

            <div class="form-group">
            <label for="formFile" class="form-label mt-4">Palabras clave</label>
            <input type="text" class="form-control form-control-sm" id ="keyword" name="keyword" type="text" placeholder="Ingrese palabras clave..." >
                       
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
            </div>
            <fieldset class="form-group">
                <legend class="mt-4">Categorias</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Nacional
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                        Internacional
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Politica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                        Salud
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Negocios
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="form-check-label" for="flexCheckChecked">
                        Deportes
                        </label>
                        
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Espectaculos
                        </label>
                    </div>
                    
                   
            </fieldset>


            <div class="form-group">
                <label  class="form-label mt-4">Firma del Autor</label>
                <input type="text" class="form-control firma" id="Firma" name="Firma"  placeholder="Firma del autor...">
            </div>

            <div class="form-group centered">
            <input type="submit" name="submit"  class="btn btn-success btn-article" value="Enviar a revisión">
            </div>
            
        </div>
        </form>
    </div>
    </div>
</body>


<?php include ('./templates/footer.php')?>