<?php
include_once ('dbh.classes.php');

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

    public function getNews(){
        $stmt = $this->connect()->prepare('CALL GET_NEWS()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsRedaccion(){
        $stmt = $this->connect()->prepare('CALL GET_NEWS_REDACCION()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS_REDACCION"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsTerminadas(){
        $stmt = $this->connect()->prepare('CALL GET_NEWS_TERMINADA()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS_TERMINADA"] = $news;
        $stmt = null;
        return $news;
        
    }


    
   
}
?>