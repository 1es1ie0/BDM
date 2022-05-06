<?php
include "dbh.classes.php";
class PorfileConn extends Dbh{
    protected function update($emailLogged,$email,$password,$name,$lastname,$alias,$phone){
        $stmt = $this->connect()->prepare('CALL modifyUser(?,?,?,?,?,?,?)');
        
        $hashPwd = password_hash($password,PASSWORD_DEFAULT);//encripta la contrasena

        if(!$stmt->execute(array($emailLogged,$email,$hashPwd,$name,$lastname,$alias,$phone))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }else{
            session_start();//almacena variables en un historial de navegacion
            $_SESSION["user_email"] = $email;
        }
        $stmt = null;
    }
}
?>