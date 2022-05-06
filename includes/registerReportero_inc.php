<?php
include "../classes/registerReportero-contr.classes.php";
    if(isset($_POST["submit"])){
        $email = $_POST["correo"];
        $pwd = $_POST["password"];
        $confirm = $_POST["password-conf"];
        $alias = $_POST["usuario"];
        $names = $_POST["username"];
        $lastNames = $_POST["apellidos"];
        $phone = $_POST["telefono"];
        $image = $_POST["image"];

        if(!empty( $_FILES["image"]["name"] )){
            $fileName = basename($_FILES["image"]["name"]);
            $imageType = strtolower( pathinfo($fileName,PATHINFO_EXTENSION));
            $allowedTypes = array('png','jpg','gif');

            if( in_array($imageType,$allowedTypes) ){
                $imageName = $_FILES["image"]["tmp_name"];
                $base64Image = base64_encode(file_get_contents($imageName));
                $realImage = 'data:image/'.$imageType.';base64,'.$base64Image;
            $register = new RegisterReporteroContr($email,$pwd,$confirm,$alias,$names,$lastNames,$phone,$realImage);
            $register->registerReporteroUser();
           
            } else{
                header("location: ../index.php?error=no_valid_extension");
                exit();
            }

        }else{
            header("location: ../index?error=no_file");
            exit();
        }
        header("location: ../index.php?error=none");
        exit();



        
    }
?>