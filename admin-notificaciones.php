<?php include ('./templates/header.php');

include('./classes/newsConn.classes.php');
$database = new NewsConn();
$news =$database->getNewsRedaccion();
$newsterminadas =$database->getNewsTerminadas();
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
    
              <h3 class="text-center mt-5">Administrador</h3>
            </div>

<div class="container-search-result">
  <div class="card-width">

  <div class="text-center">
    
              <h5 class="text-center mt-5">En redaccion</h5>
              <hr width="1" size="500">
            </div>
  <?php foreach($news as $n){?>
    <div class="card border-secondary mb-3" >
    <form class="form" action="./includes/news_inc.php" method="post" >
                    <div class="card-header">Categoria</div>
                    <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
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
                        <input type="submit" name="ver" id="ver" class="btn btn-outline-info btn-sm ml-1 shadow-none align-right" value ="Ver">
                      </div>
                    </div>
                      </div>
  </form>
                  </div>
                
<?php }

?>

<h5 class="text-center mt-5">Terminadas</h5>
              <hr width="1" size="500">
            </div>
  <?php 
  if(isset($_SESSION["NEWS_TERMINADA"])){
  foreach($newsterminadas as $n){?>
    <div class="card border-secondary mb-3" >
    <form class="form" action="./includes/news_inc.php" method="post" >
                    <div class="card-header">Categoria</div>
                    <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
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
                        <input type="submit" name="deleteNew" class="btn btn-outline-warning btn-align btn-lg" value="Eliminar" >
                        <input type="submit" name="ver" id="ver" class="btn btn-outline-info btn-sm ml-1 shadow-none align-right" value ="Ver">
                      </div>
                    </div>
                      </div>
  </form>
                  </div>
                
<?php }
  }else{
    ?><h7 class="text-center mt-5">No hay noticias a mostrar</h7><?php
  }

?>


         
            
    
  </div>
</div>        
</div>
</div>
</body>

<?php include ('./templates/footer.php')?>