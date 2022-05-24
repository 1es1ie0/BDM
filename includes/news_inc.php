<?php
include ('../classes/news-contr.classes.php');

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
    }else{
        header("location: ../index.php?error=noEntro");
        exit();
    }
    
        
        
        




?>