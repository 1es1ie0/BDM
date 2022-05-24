<?php
include ('dbh.classes.php');

class NewsConn extends Dbh{

    protected function register($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id){
        
        $stmt= $this->connect()->prepare('CALL insertNews(?,?,?,?,?,?,?,?,?,?)');
        if(!$stmt->execute(array($text,$titulo,$descripcion,$firma,$fecha,$ciudad,$colonia,$pais,$keyword,$id))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["NEW_REGISTRADA"]=$resultado;
        $stmt = null;
    }
    protected function  images($imagen,$newsid,$id){
        
            $stmt= $this->connect()->prepare('CALL INSERT_IMAGES(?,?,?)');

            if(!$stmt->execute(array($newsid,$imagen,$id))){
                
                echo($stmt->errorInfo());
                $stmt = null;
               // header("location: ../index.php?error=stmtfailed1");
                exit();
               

            }
        
        $stmt = null;
    }


    
   
}
?>