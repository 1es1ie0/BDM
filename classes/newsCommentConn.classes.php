<?php
include "../classes/dbh.classes.php";
class News extends Dbh {

    protected function newsComments($newsId){
        
        $stmt = $this->connect()->prepare('CALL P_GET_NEWS_COMMENTS(?)');
        
        if(!$stmt->execute(array($newsId))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $check;
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=no_comments");
            exit();
        }
        
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC); //almacena toda la info de la tabla en un arreglo bidimensional de filas y columnaas
        session_start();
        $_SESSION["NEWS_COMMENTS"] = $comments;
        $stmt = null;
        return $comments;
    }
}
?>