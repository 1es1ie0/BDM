<?php
include "../classes/seccion-contr.classes.php";
if(isset($_POST["submit"])){
    $titulo = $_POST["titulo"];
    $orden = $_POST["orden"];
    $color=$_POST["color"];

    $seccion = new SeccionContr($titulo,$orden,$color);
    $seccion->registerSection();
    header("location: ../index.php?error=none");
}
?>