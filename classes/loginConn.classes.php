<?php
include ('dbh.classes.php');

class LoginConn extends Dbh{

    protected function sign_in($email,$password){
        $stmt = $this->connect()->prepare('SELECT USER_PASS,USER_TYPE_ID FROM USERS WHERE EMAIL = ?;');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $check;
        if($stmt->rowCount() == 0){ 
            $stmt = null;
            header("location: ../index.php?error=userNotFound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);// regresa las filas que encontro en el query
        
        $checkPwd = password_verify($password,$pwdHashed[0]["USER_PASS"]); // revisa si son los mismos password hash

        if( $checkPwd == false ){
            $stmt = null;
            header("location: ../index.php?error=wrongPassword");
            exit();
        }else if($checkPwd == true){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();//almacena variables en un historial de navegacion
            $_SESSION["user_email"] = $email;
            $_SESSION["PASSWORD"]= $password;
            $_SESSION["TIPO_USER"]= $result[0]["USER_TYPE_ID"];
        }
        $stmt = null;//cierra conexion
    }
    public function getUser($emailLogged){
        $stmt = $this->connect()->prepare('CALL getUser(?);');
        if(!$stmt->execute(array($emailLogged))){
            $stmt = null;
            header("location: ../index.php?error=fail");
            exit();
        }
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }


}
?>