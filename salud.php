<?php include ('./templates/header.php');
include('./classes/newsConn.classes.php');

$d = new NewsConn();
$n_dash=$_SESSION["NEWS_SECTION"];
$populares = $d->getNews_POPULARES();
?>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>

    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />
    <link rel="stylesheet" href="../assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet"  href="../assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"/>
   
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
   
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./css/styles/style.css">

  </head>

  <body>
    <div class="container-scroller">
     
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="text-center">
                <br>
              <h1 class="text-center mt-5">Noticias</h1>
            </div>
          </div>
        </div>

        <?php foreach($n_dash as $n){
          $n_images=$d->getImgPrincDash($n["NEWS_ID"]);?>

              <form  action="./includes/news_inc.php" method="post"  >
              <div class="row" >
                <div class="col-lg-6  mb-5 mb-sm-2" >
                  <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
                  <div class="position-relative image-hover">
                  <?php foreach($n_images as $index => $i){
                                if ($index === array_key_first($n_images)){
                                  ?>
                    <img src="<?php echo $i["IMAGE_BLOB"] ?>"  class="img-fluid" />
                    <input type="submit" name="detalleDash" id="detalleDash" class="thumb-title"value ="Ver nota">
                    <?php
                              }
                            } ?>
                      
                </div>
                <h3 class="font-weight-600 mt-3"><?php echo $n["TITLE"]?></h3>
                <p class="fs-15"> <?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"]?></p>
                <p class="fs-15 font-weight-normal"><?php echo $n["DESCRIPTION"]?></p>
              
            
          </div>
         
          
          </div>
          </form>
          <?php }?>
          
        


         
        <div class="row mt-5">
          <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">Más Populares</h5>
          </div>
        </div>
        <div class="row mb-4">
        <?php foreach($populares as $index => $n){ 
                  $n_images=$d->getImgPrincDash($n["NEWS_ID"]);?>
        
          <div class="col-sm-3  mb-5 mb-sm-2">
            <div class="position-relative image-hover">
            <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
            <?php foreach($n_images as $index => $i){
                              if ($index === array_key_first($n_images)){
                                ?>
              <img src="<?php echo $i["IMAGE_BLOB"]?>"class="img-fluid"/>
              <input type="submit" name="detalleDash" id="detalleDash" class="thumb-title"value ="Ver nota">
              <?php }}
                            ?>
            </div>
            <h6 class="font-weight-600 mt-3"><?php echo $n["TITLE"]?></h6>
          </div>
          
          <?php } ?>

          </div>
        </div>
        </div>

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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../assets/js/demo.js"></script>

  </body>
</html>

<?php include ('./templates/footer.php')?>