<?php include ('./templates/header.php');


include('./classes/newsConn.classes.php');
$pic=$_SESSION["PIC_IMAGE"];
$news_coment=$_SESSION["NEWS_DASH"] ;
$d = new NewsConn();
$com = new News();


?>

<!DOCTYPE html>
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
 
    <div class="container">
    <div class="container-box">
      <div class="row">
        <div class="col-sm-12">
        
          <div class="news-post-wrapper">

         
          <?php foreach($news_coment as $n){
            $_SESSION["ID"]=$n["NEWS_ID"];
            $n_images=$d->getImgPrincDash($n["NEWS_ID"]);
            ?>
            <div class="news-post-wrapper-sm ">
              
            <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $n["NEWS_ID"]?>">
              <h2 class="text-center">
              <?php echo $n["TITLE"]?>
              </h2>
            
              <p class="fs-15 d-flex justify-content-center align-items-center m-0"><?php echo $n["SIGN"]?> | <?php echo $n["LAST_UDPATE_DATE"]?></p>
              <h6 class="pt-4 pb-4"> <?php echo $n["DESCRIPTION"]?></h6>
            </div>
            <?php foreach($n_images as $index => $i){
                            ?>
            <img src="<?php echo $i["IMAGE_BLOB"] ?>" class="img-fluid mb-4"/>
            <?php
                } ?>
                
            
         
            <div class="news-post-wrapper-sm mb-4">
              <p>
              <?php echo $n["TEXT"]?> 
              <br>
                <br>
              <!-- Ante ello, el SoFi Stadium en California ya se prepara para recibir este encuentro, así como la afición que quiere vivir
                de cerca este duelo inédito en un Super Bowl; uno de los aspectos que deberán tener en cuenta serán los costos de los precios. 
                <br>
                <br>
               La plataforma SeatGeek mencionó que el precio promedio que los clientes pagaban por un boleto del Super Bowl -hasta el lunes-
                era de 10 mil 427 dólares. Por su parte, StubHub señala un promedio de 9 mil 800 dólares por asiento, mientras que en el Super 
                Tazón del año anterior los precios rondaban entre los 8 mil 500 dólares.
                <br>
                <br>
             
                Cabe destacar que los precios de los boletos para el Super Bowl LVI podrían aumentar en los próximos días y se espera que se 
                venda un número récord de entradas para el duelo entre Rams y Bengals. 
                <br>
                <br>
                De acuerdo con la búsqueda de KTLA, en Ticketmaster, la venta de boletos más baratos y oficiales de la NFL se han cotizado en 6 mil  
                dólares por asiento, pero cuando se incluyen las tarifas, la suma final es más de 7 mil dólares. El par más caro costaba alrededor de
                 65 mil cada uno en la sección VIP, o más de 78 mil por boleto con las tarifas.  En Onlocation, el proveedor oficial de hospitalidad 
                 de la NFL tenía boletos desde 5 mil 700 dólares hasta 36 mil dólares por boleto. -->
              </p>
             
              <h4 class="mt-5 pt-5 font-weight-600 mb-4 pb-1">Subtitulo (Seccion con video)</h4>
            </div>
            
            <div class="row">
              <div>
                <img src="./assets/images/deportes/videofake.jpg" class="img-fluid"/>

                <a 
                    href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                    class="twitter-share-button" 
                    data-size="large" 
                    data-text="Compartir Noticia  Titulo:  Link: " 
                    data-hashtags="NocitiasWeb" 
                    data-show-count="false">
                    Tweet
                </a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
                
              
            </div>
            <?php
                } ?>

            <br>



            <div class="container mt-5">

            
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
          <?php $ID=$_SESSION["ID"]; ?>
            <div class="d-flex flex-column comment-section">
                <div class="bg-light p-2">
                <span class="d-block font-weight-bold name">1,200 likes </span> 
                <button  class="btn btn-outline-primary btn-sm ml-1 shadow-none">Like</button>
                
              
                <br>
                <br>
                  <div>
                  <?php 
                  $dataCom=$com->newsComments($ID);
                            if(isset($_SESSION["NEWS_COMMENTS"])){
                                $comments = $_SESSION["NEWS_COMMENTS"];
                                echo news_comments($comments);
                            }
                        ?>
                      <div class="d-flex flex-row user-info"><img class="rounded-circle"  src="./assets/images/default-user-img.png" width="40">
                          <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Usuario</span><span class="date text-black-50">Fecha de publicación</span></div>
                      </div>
                      <div class="mt-2">
                          <p class="comment-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                  </div>
                </div>

           <?php if(isset($_SESSION["user_email"])){?>
                <div class="bg-light p-2">
              
                <span class="d-block font-weight-bold name"><?php echo  $_SESSION["USER_NAME"]?></span>
               
                    <div class="d-flex flex-row align-items-start">
                      <img class="rounded-circle" src="<?php echo $pic?>" width="40">
                      <textarea class="form-control ml-1 shadow-none textarea" place="Deja tu comentario"></textarea>
                    </div>
                    <div class="mt-2 text-right">
                    <button class="btn btn-primary btn-sm shadow-none" type="button">Comentar</button>
                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancelar</button>
                  </div>
                </div>
                <?php }?>
</div>
</div>

            <div class="news-post-wrapper-sm mt-5">
              
             <br>
             
         
              <h5 >Contenido Relacionado</h5>

            <div class="border-top py-5">
              
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
    <script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  </body>
</html>

<?php include ('./templates/footer.php')?>