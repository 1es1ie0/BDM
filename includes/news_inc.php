<?php
include ('../classes/news-contr.classes.php');
include_once('../classes/newsConn.classes.php');
if(isset($_POST["submit"])){
    $titulo = $_POST["titulo"];
    $pais = $_POST["pais"];
    $colonia = $_POST["colonia"];
    $ciudad = $_POST["ciudad"];
    $descripcion = $_POST["descripcion"];
    $keyword = $_POST["keyword"];
    $firma = $_POST["Firma"];
    $text = $_POST["text"];
    $fecha = $_POST["fecha"];
    $id= $_POST["user_id"];
    $imagen = $_FILES["imagen_cantidad"];
    $category = $_POST["category"];

    if(!empty($_FILES["imagen_cantidad"])){
        $register = new NewsContr($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id);
        $register = NewsContr::with($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id)->registerNewsTerminada();
    }

    if(isset($_SESSION["NEW_REGISTRADA"])){
        $result=$_SESSION["NEW_REGISTRADA"];
        // OLA LELI TQM
        /*echo 'si entro';
        echo $imagen;
        $result=$_SESSION["NEW_REGISTRADA"];
        foreach($result as $r){
        NewsConn::withImage($imagen,$r["NEWS_ID"],$id);*/        
        foreach($category as $cat){
            $db = new NewsConn();
            $query = $db->insertSection($result["NEWS_ID"], $cat);
        }
       

       

        $count=count($_FILES['imagen_cantidad']['name']);
        
        for($i=0; $i<$count; $i++){
            $fileName = basename($imagen["name"][$i]);
            $imageType = strtolower( pathinfo($fileName,PATHINFO_EXTENSION));
            $allowedTypes = array('png','jpg','gif');
            if(in_array($imageType,$allowedTypes)){
                $imageName = $imagen["tmp_name"][$i];
                $base64Image = base64_encode(file_get_contents($imageName));
                $realImage = 'data:image/'.$imageType.';base64,'.$base64Image;
               $image =NewsContr::withImage($realImage,$result["NEWS_ID"],$id)->uploadImage();
            }
            else{
                header("location: ../load.php?error=no_valid_extension");
                exit();
            }

        }
        }
       header("location: ../reportero-noticias.php?error=none");
    }if(isset($_POST["Borrador"])){
        $titulo = $_POST["titulo"];
        $pais = $_POST["pais"];
        $colonia = $_POST["colonia"];
        $ciudad = $_POST["ciudad"];
        $descripcion = $_POST["descripcion"];
        $keyword = $_POST["keyword"];
        $imagen = $_FILES["imagen_cantidad"];
    
        if(!empty($_FILES["imagen_cantidad"]))
    
            $register = new NewsContr($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id);
            $register = NewsContr::with($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id)->registerNews();
            
        if(isset($_SESSION["NEW_REGISTRADA"])){
            $result=$_SESSION["NEW_REGISTRADA"];
            
            /*echo 'si entro';
            echo $imagen;
            $result=$_SESSION["NEW_REGISTRADA"];
            foreach($result as $r){
    
                
            NewsConn::withImage($imagen,$r["NEWS_ID"],$id);*/
            $count=count($_FILES['imagen_cantidad']['name']);
            
            for($i=0; $i<$count; $i++){
                $fileName = basename($imagen["name"][$i]);
                $imageType = strtolower( pathinfo($fileName,PATHINFO_EXTENSION));
                $allowedTypes = array('png','jpg','gif');
                if(in_array($imageType,$allowedTypes)){
                    $imageName = $imagen["tmp_name"][$i];
                    $base64Image = base64_encode(file_get_contents($imageName));
                    $realImage = 'data:image/'.$imageType.';base64,'.$base64Image;
                   $image =NewsContr::withImage($realImage,$result["NEWS_ID"],$id)->uploadImage();
                }
                else{
                    header("location: ../load.php?error=no_valid_extension");
                    exit();
                }
    
            }
            }
        }else if(isset($_POST["ver"])){
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $searchnews = new NewsConnId($newsID);
        $searchnews->withNews();
        header("location: ../admin-comentario.php?error=none");
    }
    else if(isset($_POST["aprobar"])){
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $searchnews = new NewsConnId($newsID);
        $searchnews->Aprobar();
        header("location: ../admin-notificaciones.php?error=none");
    }else if(isset($_POST["deleteNew"])){
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $searchnews = new NewsConnId($newsID);
        $searchnews->delNews();
        header("location: ../admin-notificaciones.php?error=none");
    }else if(isset($_POST["verAprobada"])){
        echo $_POST["news_id"];
    
        $searchnews = new NewsConnId($newsID);
        $searchnews->withNews();
        header("location: ../noticia.php?error=none");
    }
    else if(isset($_POST["aprobarRep"])){
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $searchnews = new NewsConnId($newsID);
        $searchnews->AprobarEditor();
        header("location: ../admin-notificaciones.php?error=none");
    } else if(isset($_POST["edicionReportero"])){
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $searchnews = new NewsConnId($newsID);
        $searchnews->withNews();
        header("location: ../edit_article.php?error=none");
    }else if(isset($_POST["submit_edit"])){ // EDITAR MOVERLE SARITA
        echo $_POST["news_id"];
    
        $newsID = $_POST["news_id"];
        $titulo = $_POST["titulo"];
        $pais = $_POST["pais"];
        $colonia = $_POST["colonia"];
        $ciudad = $_POST["ciudad"];
        $descripcion = $_POST["descripcion"];
        $keyword = $_POST["keyword"];
        $firma = $_POST["Firma"];
        $text = $_POST["text"];
        $fecha = $_POST["fecha"];
        $id= $_POST["user_id"];
        //$imagen = $_FILES["imagen_cantidad"];

        $updated = new NewsContrUpdate($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id,$newsID );
        $updated = NewsContrUpdate::with($titulo,$pais,$colonia, $ciudad,$descripcion,$keyword,$firma, $text,$fecha,$id,$newsID)->updateNews();
        
        header("location: ../reportero-noticias.php?error=none");
    }else if(isset($_POST["detalleDash"])){
        $newsID= $_POST["news_id"];
    
        $searchnews = new NewsConnId($newsID);
        $searchnews->DetalleDash();
        header("location: ../noticia.php?error=none");
    }else if(isset($_POST["regresar"])){
        $newsID= $_POST["news_id"];
        $commentText= $_POST["commentText"];
        $userId= $_POST["userId"];
    
        $searchnews = new NewsCommentAdmin($newsID,$commentText,$userId);
        $searchnews->commentAdminNews();
        header('refresh:0.1;url=../admin-notificaciones.php?error=none');
    }else if(isset($_POST["SEARCH"])){
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $keyword = $_POST["keyword"];
        $fechaInicio = $_POST["fechaInicio"];
        $fechaFinal = $_POST["fechaFinal"];
    
        $searchnews = new NewsSearch($titulo,$descripcion,$keyword,$fechaInicio,$fechaFinal);
        $searchnews->FlitrarNews();
        header("location: ../buscador.php?error=none");
    }
    else if(isset($_POST["likes"])){
        $newsid = $_POST["news_id"];
        $conteo = $_POST["conteo"];
    
        $searchnews = new NewsConnLike($newsid,$conteo);
        $searchnews->newLike();
        header('location: ../noticia.php?error=none');
    }else if(isset($_POST["deleteComment"])){
        $idComment = $_POST["idComment"];
    
        $searchnews = new NewsConnId($idComment);
        $searchnews->delComentario();
        header('refresh:0.1;url=../noticia.php?error=none');
    }
    else if(isset($_POST["secciones"])){
        $sectionID = $_POST["section_id"];

        $db =new NewsConn();
        $section = $db->getNewsSection($sectionID);
        header('refresh:0.1;url=../salud.php?error=none');
    }
    




?>