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
    $imagen = $_POST["imagen_cantidad[]"];

    $register = new NewsContr($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id);
   
        $register->registerNews();
        
    if(isset($_SESSION["NEW_REGISTRADA"])){
        echo 'si entro';
        $result=$_SESSION["NEW_REGISTRADA"];
        foreach($result as $r){
        NewsConn::withImage($imagen,$r["NEWS_ID"],$id);
        }
    }else{
        header("location: ../index.php?error=noEntro");
        exit();
    }
    
        
        
        



}
?>