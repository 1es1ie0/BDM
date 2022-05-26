<?php include ('./templates/header.php');
include('./classes/newsConn.classes.php');
$uid=$_SESSION["user_id"];
$database = new NewsConn();
$news =$database->getNewsID_EnRedaccion($uid);
$newsTer=$database->getNewsID_Terminadas($uid);
$newsAp=$database->getNewsID_Aprobadas($uid);
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/styles/style.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Crear nota</title>
  </head>

<body>
  

  <div class="container-box">
  <div class="text-center">
    
              <h3 class="text-center mt-5">Mis noticias</h3>
            </div>

<div class="container-search-result">
  <div class="card-width">
  <h5 class="text-center mt-5">En redaccion</h5>
<?php foreach($news as $n){?>
    <div class="card border-secondary mb-3" >
    <form class="form" action="./includes/news_inc.php" method="post" >
    <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
                    <div class="card-header">Categoria</div>
                      <div class="card-body">
                      <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative image-hover">
                          <img src="<?php echo $n["IMAGE_BLOB"] ?>" class="img-fluid img-vista"/>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="position-relative image-hover">
                          <h5 ><?php echo $n["TITLE"]?></h5>
                          <p class="fs-15"> <?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"] ?></p>
                        </div>
                        <input  type="submit" class="btn btn-outline-info btn-sm ml-1 shadow-none align-right" id="edicionReportero" name="edicionReportero"value="Ver">
                      </div>
                    </div>
                      </div>
</form>
                  </div>
                
<?php }

?>
<h5 class="text-center mt-5">Terminadas</h5>

<?php foreach($newsTer as $n){?>
    <div class="card border-secondary mb-3" >
                    <div class="card-header">Categoria</div>
                      <div class="card-body">
                      <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative image-hover">
                          <img src="<?php echo $n["IMAGE_BLOB"] ?>" class="img-fluid img-vista"/>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="position-relative image-hover">
                          <h5 ><?php echo $n["TITLE"]?></h5>
                          <p class="fs-15"> <?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"] ?></p>
                        </div>
                        <button  class="btn btn-outline-info btn-sm ml-1 shadow-none align-right" onclick="location.href='./noticia.php';">Ver</button>
                      </div>
                    </div>
                      </div>
                  </div>
                
<?php }

?>

<h5 class="text-center mt-5">Publicadas</h5>
<?php foreach($newsAp as $n){?>
    <div class="card border-secondary mb-3" >
                    <div class="card-header">Categoria</div>
                      <div class="card-body">
                      <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative image-hover">
                          <img src="<?php echo $n["IMAGE_BLOB"] ?>" class="img-fluid img-vista"/>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="position-relative image-hover">
                          <h5 ><?php echo $n["TITLE"]?></h5>
                          <p class="fs-15"> <?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"] ?></p>
                        </div>
                        <button  class="btn btn-outline-info btn-sm ml-1 shadow-none align-right" onclick="location.href='./admin-comentario.php';">Ver</button>
                      </div>
                    </div>
                      </div>
                  </div>
                
<?php }

?>

          
  </div>
</div>        
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../assets/js/demo.js"></script>
</body>

<?php include ('./templates/footer.php')?>