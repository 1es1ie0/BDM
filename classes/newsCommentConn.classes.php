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
}
?>