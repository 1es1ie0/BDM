<?php 
include "../classes/news.classes.php";
class NewsCommentContr extends NewsCommentConn{

    private $newsId;

    public function __construct(){}
    
    public static function withID( $newsId ) { // mandarlo directamente sin necesidad de una instancia
        $instance = new self();
        $instance->fillWithId( $newsId );
        return $instance;
    }

    protected function fillWithId($newsId) {
        $this->newsId = $newsId;
    }

    public function getComments(){
        return $this->newsComments($this->newsId);
    }
}
?>
