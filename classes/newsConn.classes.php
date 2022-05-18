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
        $stmt = null;
    }
}
?>