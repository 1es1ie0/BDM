<?php 
include_once ('newsCommentConn.classes.php');
class NewsCommentContr extends News{
    private $comment;
    private $iduser;
    private $newsId;

    public function __construct(){}
    
    public static function withID( $comment,$iduser) { // mandarlo directamente sin necesidad de una instancia
        $instance = new self();
        $instance->fillWithId( $comment,$iduser );
        return $instance;
    }

    protected function fillWithId($comment,$iduser) {
        $this->comment = $comment;
        $this->iduser = $iduser;
    }

    public function insertComments(){
        return $this->insertNewComment($this->comment,$this->iduser);
    }

    public static function withCOMMENT( $comment) { // mandarlo directamente sin necesidad de una instancia
        $instance = new self();
        $instance->fillWithComment( $comment );
        return $instance;
    }

    protected function fillWithComment($comment) {
        $this->comment = $comment;
    }

    public function getComments(){
        return $this->getCommentID($this->comment);
    }
    public static function withCOMMENTLIGADO( $comment,$newid) { // mandarlo directamente sin necesidad de una instancia
        $instance = new self();
        $instance->fillWithCommentLigado( $comment,$newid );
        return $instance;
    }

    protected function fillWithCommentLigado($comment,$newid) {
        $this->comment = $comment;
    }

    public function getCommentsLigado(){
        return $this->insertCommentLigado($this->comment,$this->newid);
    }
}
?>
