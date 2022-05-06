<?php
include "../classes/login-contr.classes.php";
    if(isset($_POST["submit"])){
        $email = $_POST["mail"];
        $pwd = $_POST["password"];

        $login = new LoginContr($email,$pwd);
        $login->loginUser();
        $login->getU();
        header("location: ../index.php?error=none");
    }
?>