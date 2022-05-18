<?php
include "dbh.classes.php";
class RegisterReporteroConn extends Dbh{

    protected function checkUser($email){
        $stmt = $this->connect()->prepare('SELECT EMAIL FROM USERS WHERE EMAIL = ?;');// prepare ejecuta un query
        if(!$stmt->execute(array($email))){//SI FALLA LA EJECUCION DEL QUERY
            $stmt = null;//muere la conexion
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount() > 0){
            $check = false; // ya existe el usuario
        }else{
            $check = true;// no existe el usuario
        }
        return $check;
    }

    protected function registerReportero($email,$password,$alias,$name,$lastname,$phone,$image){
        $stmt = $this->connect()->prepare('CALL insertUserReportero(?,?,?,?,?,?,?)');
        $fullName= $name +" "+ $lastname;
        $hashPwd = password_hash($password,PASSWORD_DEFAULT);//encripta la contrasena

        if(!$stmt->execute(array($email,$hashPwd,$name,$lastname,$alias,$phone,$image))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }else{
            
        }
        $stmt = null;
    }
    protected function retrieve($user_email){
        $stmt = $this->connect()->prepare('select PROFILE_PIC FROM USERS Where EMAIL = ?;');
        

        if(!$stmt->execute(array($user_email))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $Row= $stmt->fetchAll(PDO::FETCH_ASSOC);//obtiene los registros como un arreglo asociativo(BIDIMENSIONAL)
        session_start();
        $_SESSION["IMAGE_RETRIEVE"]=$Row[0]["PROFILE_PIC"];
        $stmt = null;
      

    }
}
?>