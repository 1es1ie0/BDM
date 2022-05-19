<?php
include "../classes/seccion-contr.classes.php";
if(isset($_POST["submit"])){
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $orden = $_POST["orden"];
    $color=$_POST["color"];

    $seccion = new SeccionContr($titulo,$descripcion,$orden,$color);
    $seccion->registerSection();
    header("location: ../index.php?error=none");
}
?>