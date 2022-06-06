<?php include ('./templates/header.php');

include('./classes/newsCommentConn.classes.php');
include('./classes/newsConn.classes.php');
$pic=$_SESSION["PIC_IMAGE"];
$news_coment=$_SESSION["NEWS_DASH"] ;
$d = new NewsConn();
$com = new News();

function news_comments($comments){
  $html = '<table>';
  foreach( $comments as $comment){
      if(is_null($comment['PARENT'])){
          $html .= '<tr class="d-flex flex-column justify-content-start ml-2">';

          $html .= '<td class="d-flex flex-row user-info"><img class="rounded-circle"  src="' . htmlspecialchars($comment['PICTURE']) . '" width="40"><div  class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">' . htmlspecialchars($comment['ALIAS']) . '</span><span class="date text-black-50" style="color: white!important; ">' . htmlspecialchars($comment['FECHA']) . '</span></div></td><td class="mt-2" style="color: white;  padding: 10px;">' . htmlspecialchars($comment['TEXT']) ;
          if(strcasecmp($_SESSION["TIPO_USER"], "Reportero")==0 && $_SESSION["user_id"]==$_SESSION["CREATED_BY"]){
            $html.='<div class="mt-2 text-right"><button class="btn btn-warning btn-sm shadow-none" type="button" id="butto2n" >delete</button></div>';
          }
          $html.=  '</td id="' . htmlspecialchars($comment['ID']) . '">';
          $html .= '</tr>';
      }
      else {
          $pos = strpos($html,'</td id="'.htmlspecialchars($comment['PARENT']).'">',0);
          $subcomment = '</tr><tr style ="padding:25px;"class="d-flex flex-column justify-content-start ml-2"><td class="d-flex flex-row user-info"><img class="rounded-circle"  src="' . htmlspecialchars($comment['PICTURE']) . '" width="40"><div  class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">' . htmlspecialchars($comment['ALIAS']) . '</span><span class="date text-black-50" style="color: white!important; ">' . htmlspecialchars($comment['FECHA']) . '</span></div></td><td style="color: white;  padding: 20px;"> - ' . htmlspecialchars($comment['TEXT']) ;
          if(strcasecmp($_SESSION["TIPO_USER"], "Reportero")==0 && $_SESSION["user_id"]==$_SESSION["CREATED_BY"]){
            $subcomment.='<div class="mt-2 text-right"><button class="btn btn-warning btn-sm shadow-none" type="button" id="butto2n" >delete</button></div>';
          }
          $subcomment .='</td id="' . htmlspecialchars($comment['ID']) . '"></tr>';
          $html = substr($html, 0, $pos) . $subcomment . substr($html, $pos);
      }
  }
  $html .= '</table>'; // .= concatena
  return $html;
}
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/Comment.js"></script>
  </head>

  <body>
 
    <div class="container">
    <div class="container-box">
      <div class="row">
        <div class="col-sm-12">
        
          <div class="news-post-wrapper">

         
          <?php foreach($news_coment as $n){
            $_SESSION["ID"]=$n["NEWS_ID"];
            $_SESSION["CREATED_BY"]=$n["CREATED_BY"];
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
            <div class="d-flex flex-column comment-section">
                <div class="bg-light p-2">
                <span class="d-block font-weight-bold name">1,200 likes </span> 
                <button  class="btn btn-outline-primary btn-sm ml-1 shadow-none">Like</button>
                
                
                <br>
                <br>
                 

                <div class="d-flex flex-row user-info" >
                <?php 
                  $dataCom=$com->newsComments($_SESSION["ID"]);
                  if(isset($_SESSION["NEWS_COMMENTS"])){
                  echo news_comments($dataCom);
                  }
                        ?>
              </div>
              <div  class="d-flex flex-row user-info" id="ajaxResponse">
                </div>
           <?php if(isset($_SESSION["user_email"])){?>
            <form  class="form"   method="post">
                <div class="bg-light p-2">
              
            <input type="text" style="display:none" id="news_id"name="news_id" value="<?php echo $_SESSION["ID"]?>">
            
            <input type="text" style="display:none" id="user_id"name="user_id" value="<?php echo $_SESSION["user_id"]?>">
                <span class="d-block font-weight-bold name"><?php echo  $_SESSION["USER_NAME"]?></span>
               
                    <div class="d-flex flex-row align-items-start">
                      <img class="rounded-circle" src="<?php echo $pic?>" width="40">
                      <input class="form-control ml-1 shadow-none textarea" place="Deja tu comentario" id="comment"name="comment" required>
                    </div>
                    <div class="mt-2 text-right">
                    <!--<input class="btn btn-primary btn-sm shadow-none" type="button" id="submit" name="submit" value="Comentar2" >-->
                    <button class="btn btn-primary btn-sm shadow-none" type="button" id="butto2n" >Comentar</button>
                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button" id="cancel" onclick="cancelComment()">Cancelar</button>
                  </div>
                </div>
           </form>
                <?php }?>
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