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
    protected function registerTerminada($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id){
        
        $stmt= $this->connect()->prepare('CALL insertNewsTerminada(?,?,?,?,?,?,?,?,?,?)');
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
    protected function update($titulo,$pais,$colonia,$ciudad,$descripcion,$keyword,$firma,$text,$fecha,$id,$newsid){
        
        $stmt= $this->connect()->prepare('CALL EDIT_NEWS_REPORTERO(?,?,?,?,?,?,?,?,?,?,?)');
        if(!$stmt->execute(array($text,$titulo,$descripcion,$firma,$fecha,$ciudad,$colonia,$pais,$keyword,$id,$newsid))){
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
    public function getNewsAprobadasDASH(){
        $stmt = $this->connect()->prepare('CALL NEWS_GET_ALL()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["N_APROBADAS"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getImgPrincDash($idNews){
        $stmt = $this->connect()->prepare('CALL GET_NEWS_IMAGES_PUBLICADAS(?)');
        if(!$stmt->execute(array($idNews))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        //$_SESSION["N_IMAGE"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsID_EnRedaccion($id){
        $stmt = $this->connect()->prepare('CALL GET_NEWSREPORTERO_REDACCION(?)');
        if(!$stmt->execute(array($id))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsID_Terminadas($id){
        $stmt = $this->connect()->prepare('CALL GET_NEWSREPORTERO_TERMINADAS(?)');
        if(!$stmt->execute(array($id))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsID_Aprobadas($id){
        $stmt = $this->connect()->prepare('CALL GET_NEWSREPORTERO_APROBADA(?)');
        if(!$stmt->execute(array($id))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["NEWS"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNewsID_DASH($id){
        $stmt = $this->connect()->prepare('CALL VER_NOTA_DASH(?)');
        if(!$stmt->execute(array($id))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
        $_SESSION["NEWS_DASH"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNews_Recientes(){
        $stmt = $this->connect()->prepare('CALL NEWS_RECIENTES()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //session_start();
        //$_SESSION["NEWS_DASH"] = $news;
        $stmt = null;
        return $news;
        
    }
    public function getNews_POPULARES(){
        $stmt = $this->connect()->prepare('CALL NEWS_POPULARES()');
        if(!$stmt->execute()){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //session_start();
        //$_SESSION["NEWS_DASH"] = $news;
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
    public function getNewsAprobadas(){
        $stmt = $this->connect()->prepare('CALL GET_NEWS_PUBLICADAS()');
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
    public function getnewsID($newsID){
        $stmt = $this->connect()->prepare('CALL GET_NEW_ID(?)');
        if(!$stmt->execute(array($newsID))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../secciones.php?error=stmtfailed");
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
        $_SESSION["n_ID"] = $n;
        $stmt = null;
        return $n;
        
    }
    public function ReporteroApruebanewsID($newsID){
        $stmt = $this->connect()->prepare('CALL ADMIN_APROBO(?)');
        if(!$stmt->execute(array($newsID))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../admin-notificaciones.php?error=stmtfailed");
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
      
        $stmt = null;
        return $n;
        
    }
    public function EditorApruebanewsID($newsID){
        $stmt = $this->connect()->prepare("UPDATE NEWS SET STATUS ='Aprobada',  LAST_UDPATE_DATE = sysdate() WHERE NEWS_ID = ?;");
        if(!$stmt->execute(array($newsID))){// hace el intercambio con los signos
            $stmt = null;
            header("location: ../admin-notificaciones.php?error=stmtfailed");
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
      
        $stmt = null;
        return $n;
        
    }
    protected function deleteNew($newsID){
        $stmt = $this->connect()->prepare('UPDATE NEWS SET ACTIVE = FALSE WHERE NEWS_ID = ?;');


        if(!$stmt->execute(array($newsID))){
            $stmt = null;
            header("location ../secciones.php?error=stmtFailed");
            exit();
        }

    }
    protected function insertLike($newsID,$conteo){
        $stmt = $this->connect()->prepare('UPDATE NEWS SET LIKES = ? WHERE NEWS_ID = ?;');


        if(!$stmt->execute(array($conteo,$newsID))){
            $stmt = null;
            header("location ../noticia.php?error=stmtFailed");
            exit();
        }
        
        $stmt=null;
        

    }
    public function getLike($newsID){
        $stmt = $this->connect()->prepare('CALL GET_LIKES(?);');
        if(!$stmt->execute(array($newsID))){
            $stmt = null;
            header("location ../noticia.php?error=stmtFailed");
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $_SESSION["LIKE"] = $n;
        return $n;
    }
    protected function SEARCHNew($titulo, $descripcion,$keyword,$fechaInicio,$fechaFinal){
        $stmt = $this->connect()->prepare('CALL P_BusquedaAvanzada(?,?,?,?,?);');


        if(!$stmt->execute(array($titulo, $descripcion,$keyword,$fechaInicio,$fechaFinal))){
            $stmt = null;
            header('refresh:0.1;url=../buscador.php?error=stmtFailed');
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
        $_SESSION["SEARCH"] = $n;
        $stmt = null;
        return $n;
    }
    public function getCommentAdmin($newid){
        $stmt = $this->connect()->prepare('CALL P_GET_COMMENT_ADMIN(?);');


        if(!$stmt->execute(array($newid))){
            $stmt = null;
            header('refresh:0.1;url=../buscador.php?error=stmtFailed');
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $stmt = null;
        return $n;
    }
    public function deleteComment($newid){
        $stmt = $this->connect()->prepare(' CALL P_DELETE_COMMENTS(?);');


        if(!$stmt->execute(array($newid))){
            $stmt = null;
            header('refresh:0.1;url=../buscador.php?error=stmtFailed');
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $stmt = null;
        return $n;
    }
    public function insertCommentAdmin($newsID,$commentText,$userId){
        $stmt = $this->connect()->prepare('CALL COMMENT_ADMIN(?,?,?);');


        if(!$stmt->execute(array($newsID,$commentText,$userId))){
            $stmt = null;
            header('refresh:0.1;url=../admin-notificaciones.php?error=stmtFailed');
            exit();
        }
        $n = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        $stmt = null;
        return $n;
    }


    
   
}

?>