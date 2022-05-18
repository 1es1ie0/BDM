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

    $register = new NewsContr($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id);
   
        $register->registerNews();
        header("location: ../index.php?error=none");


}
?>