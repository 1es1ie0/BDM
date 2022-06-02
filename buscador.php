<?php include ('./templates/header.php');
include('./classes/newsConn.classes.php');

$d = new NewsConn();
$news_dash =$d->getNewsAprobadasDASH();?>
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
  
      <input type="text"id="input_texto" class="form-controlsearch" aria-describedby="emailHelp" placeholder="¿Qué estás buscando?">
      <a class="bi bi-search" id="btn_buscar"style="color: #555; font-size: 1.5rem; margin: auto;" href="./buscador.php" onclick="searchNews()"></a>
    </div>
  </form>

  <div class="container-box">
<div class="container-search-result">
  <div class="card-width">
    <?php foreach($news_dash as $n){
      $n_images=$d->getImgPrincDash($n["NEWS_ID"]);
      ?>
    <div class="card border-secondary mb-3" >
    <form class="form" action="./includes/news_inc.php" method="post" >
                    <div class="card-header">Categoria</div>
                    <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
                      <div class="card-body">
                      <div class="row">
                      <div class="col-sm-4">
                      <?php foreach($n_images as $index => $i){
                          if ($index === array_key_first($n_images)){
                            ?>
                        <div class="position-relative image-hover">
                          
                          
                          <img src="<?php echo $i["IMAGE_BLOB"] ?>" class="img-fluid img-vista"/>
                          
                          <input type="submit" name="detalleDash" id="detalleDash" class="thumb-title"value ="Ver nota">

                        </div>
                        <?php
                        }else{}
                       } ?>
                      </div>
                      <div class="col-sm-8">
                        <div class="position-relative image-hover">
                          <h5 ><?php echo $n["TITLE"]?></h5>
                          <p class="fs-15"> <?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"]?></p>
                          
                          <p class="fs-15"> <?php echo $n["DESCRIPTION"]?> </p>
                        </div>
                      </div>
                    </div>
                      </div>
                  </div>
                      </form>
                </div>
<?php } ?>


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
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/Ajax/Buscador.js"></script>
</body>

<?php include ('./templates/footer.php')?>