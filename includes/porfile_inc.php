<?php
include "../classes/porfile-contr.classes.php";
if(isset($_POST["submit"])){
        $email = $_POST["correo"];
        $pwd = $_POST["password"];
        $confirm = $_POST["password-conf"];
        $alias = $_POST["usuario"];
        $names = $_POST["username"];
        $lastNames = $_POST["apellidos"];
        $phone = $_POST["telefono"];
        //$image = $_POST["image"];
        session_start();
        $emailLogged = $_SESSION["user_email"];

        $register = new PorfileContr($emailLogged,$email,$pwd,$confirm,$alias,$names,$lastNames,$phone);
        $register->modifyUser();
        header("location: ../index.php?error=none");


}

?>