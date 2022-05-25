<?php
require "../classes/seccion-contr.classes.php";
if(isset($_POST["submit"])){
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $orden = $_POST["orden"];
    $color=$_POST["color"];

    $seccion = new SeccionContr($titulo,$descripcion,$orden,$color);
    $seccion->registerSection();
    header("location: ../index.php?error=none");
}else if(isset($_POST["viewSec"])){
    echo $_POST["seccionID"];

    $sectionID = $_POST["seccionID"];
    $searchSec = new SeccionContrId($sectionID);
    $searchSec->withSection();
    header("location: ../editar_seccion.php?error=none");
}else if(isset($_POST["deleteSec"])){
    echo $_POST["seccionID"];

    $sectionID = $_POST["seccionID"];
    $searchSec = new SeccionContrId($sectionID);
    $searchSec->delSection();
    header("location: ../secciones.php?error=none");
}
?>