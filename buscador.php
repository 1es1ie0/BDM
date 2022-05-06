<?php include ('./templates/header.php')?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->

    
    <!-- Style -->
    <link rel="stylesheet" href="css/styles/style.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

<body>
  <form class="form-search">
    <div class="search-section">
  
      <input type="text" class="form-controlsearch" aria-describedby="emailHelp" placeholder="¿Qué estás buscando?">
      <a class="bi bi-search" style="color: #555; font-size: 1.5rem; margin: auto;" href="./buscador.php"></a>
    </div>
  </form>

  <div class="container-box">
<div class="container-search-result">
  <div class="card-width">

    <div class="card border-secondary mb-3" >
                    <div class="card-header">Categoria</div>
                      <div class="card-body">
                      <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative image-hover">
                          <img src="./assets/images/news/news-6.jpg" class="img-fluid img-vista"/>
                          <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="position-relative image-hover">
                          <h5 >Ejemplo de titulo de noticia 1</h5>
                          <p class="fs-15"> Autor | Fecha de publicación</p>
                        </div>
                      </div>
                    </div>
                      </div>
                  </div>
                </div>



          <div class="card border-secondary mb-3" >
              <div class="card-header">Categoria</div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-4">
                            <div class="position-relative image-hover">
                              <img src="./assets/images/news/news-7.jpg" class="img-fluid img-vista"/>
                              <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>

                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="position-relative image-hover">
                              <h5 >Ejemplo de titulo de noticia 2</h5>
                              <p class="fs-15"> Autor | Fecha de publicación</p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
  </div>
</div>        
</div>
</div>
</body>

<?php include ('./templates/footer.php')?>