<?php include ('./templates/header.php');
$news_coment=$_SESSION["n_ID"] ;
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>

    <link
      rel="stylesheet"
      href="../assets/vendors/mdi/css/materialdesignicons.min.css"
    />

    <link rel="shortcut icon" href="../assets/images/favicon.png" />

   
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./css/styles/style.css">

  </head>

  <body>
 
    <div class="container">
    <div class="container-box">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <form action="./includes/news_inc.php" method="post" >
              <?php foreach($news_coment as $n){?>
                <div class="news-post-wrapper-sm ">
                <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
                  <h2 class="text-center"><?php echo $n["TITLE"]?></h2>
                
                  <p class="fs-15 d-flex justify-content-center align-items-center m-0"><?php echo $n["SIGN"] ?> | <?php echo $n["LAST_UDPATE_DATE"] ?></p>
                  <h6 class="pt-4 pb-4"><?php echo $n["TEXT"] ?> </h6>
                </div>
                <img src="<?php echo $n["IMAGE_BLOB"] ?>" class="img-fluid mb-4"/>
                
                <div class="news-post-wrapper-sm mb-4">
                  <p>
                  <?php echo $n["DESCRIPTION"] ?>
                    <br>
                
                   
                    <br>
                  </p>
                
                  <h4 class="mt-5 pt-5 font-weight-600 mb-4 pb-1">Subtitulo (Seccion con video)</h4>
                </div>
                <div class="row">
                  <div>
                    <img src="./assets/images/news/news-4.jpg" class="img-fluid"/>
                  </div>
                
                </div>
                <div class="news-post-wrapper-sm mt-5">
                  
                <br>
                
                <div class="border-top py-5">

                    <div class="form-group">
                      <input  class="form-control text-area-description"  style="display:none;"id="userId" name="userId"value="<?php echo $_SESSION["user_id"]?>">
                        <label  class="form-label mt-4">Comentarios</label>
                        <input class="form-control text-area-description" id="commentText" name="commentText"  rows="3">
                    </div>
                    <div class="form-group centered">
                    <input type="submit" name="regresar" id="regresar"  class="btn btn-warning  btn-article" value="Regresar el reportero">
                  
                    <input type="submit" name="aprobar" id="aprobar"  class="btn btn-success btn-article" value="Publicar">
                    </div>
                </div>
                <?php } ?>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/js/demo.js"></script>
  
  </body>
</html>

<?php include ('./templates/footer.php')?>