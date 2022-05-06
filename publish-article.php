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
        <div class="row align-items-center justify-content-center "> 

            <div class="form-group">
                <label  class="form-label mt-4">Titulo</label>
                <input  class="form-control"  placeholder="Titulo">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Lugar(Ciudad, Pais)</label>
                <input  class="form-control"  placeholder="Lugar">
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Comentario de admin</label>
                <textarea class="form-control text-area-description"  rows="3" placeholder="Deja una retroalimentacion"></textarea>
            </div>
            <div class="form-group">
                <label  class="form-label mt-4">Contenido de la nota</label>
                <textarea class="form-control text-area-content"  rows="3"></textarea>
            </div>

          
            <div class="col-6 col-md-5">
                
                    <div class="form-group row">
                        <label for="formFile" class="form-label mt-4">Coloque una imagen</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>
                    <div class="form-group row">        
                        <label for="formFile" class="form-label mt-4">Coloque un video</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
              
            </div>

            <div class="form-group">
            <label for="formFile" class="form-label mt-4">Palabras clave</label>
            <input class="form-control form-control-sm" type="text" placeholder="Ingrese palabras clave" >
                       
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
                <input  class="form-control firma"  placeholder="Firma del autor">
            </div>

            <div class="form-group centered">
            <button  class="btn btn-success btn-article">Enviar a revisión</button>
            </div>
            
        </div>
    </div>
    </div>
</body>


<?php include ('./templates/footer.php')?>