<?php
include_once ('dbh.classes.php');

class News extends Dbh {

    public function newsComments($newsId){
        
        $stmt = $this->connect()->prepare('CALL P_GET_COMMENT_NEWS(?)');
        
        if(!$stmt->execute(array($newsId))){
            $stmt = null;
            header("location: ../noticia.php?error=stmtfailed");
            exit();
        }

        $check;
        if($stmt->rowCount() == 0){
            $stmt = null;
            exit();
        }
        
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC); //almacena toda la info de la tabla en un arreglo bidimensional de filas y columnaas
        
        
        $_SESSION["NEWS_COMMENTS"] = $comments;
        $stmt = null;
        return $comments;
    }
    public function insertNewComment($comment,$iduser){
        $stmt = $this->connect()->prepare('CALL P_INSERT_COMMENT_NEWS(?,?)');
        
        if(!$stmt->execute(array($comment,$iduser))){
            $stmt = null;
            header("location: ../noticia.php?error=stmtfailed");
            exit();
        }
        $com = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $stmt = null;
        return $com;
    }
    public function getCommentID($comment){
        $stmt = $this->connect()->prepare('CALL P_GET_COMMENT_ID(?)');
        if(!$stmt->execute(array($comment))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../noticia.php?error=stmtfailed");
            exit();
        }
        $com = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["commen"] = $com;
        $stmt = null;
        return $com;
        
    }
    public function insertCommentLigado($comment,$newid){
        $stmt = $this->connect()->prepare('CALL P_INSERT_COMMENT_LIGADO(?,?)');
        
        if(!$stmt->execute(array($comment,$newid))){
            $stmt = null;
            header("location: ../noticia.php?error=stmtfailed");
            exit();
        }
    }
}
?>