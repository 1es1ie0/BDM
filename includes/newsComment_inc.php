<?php 
include ('../classes/newsComment-contr.classes.php');
include_once('../classes/newsCommentConn.classes.php');
include_once ('../classes/news-contr.classes.php');

$comm = new News();


if(isset($_POST["ajax_sumbit"])){ 
    $newsId = $_POST["news_id"];
    $userid =  $_POST["user_id"];
    $comment = $_POST["comment"];
    
    $c = NewsCommentContr::withID($comment,$userid)->insertComments();
    $com = NewsCommentContr::withCOMMENT($comment)->getComments();
    
    $comentid= $_SESSION["commen"] ;
     //echo json_encode($comentid);
    $lig =NewsCommentContr::withCOMMENTLIGADO($comentid["COMMENT_ID"] ,$newsId )->getCommentsLigado();
    
    $dataCom=$comm->newsComments($newsId);
    echo $comentid["COMMENT_ID"];
    header('refresh:0.1;url=../noticia.php?error=none'); 
    
}
else if(isset($_POST["deleteComment"])){
    $idComment = $_POST["idComment"];

    $searchnews = new NewsConnId($idComment);
    $searchnews->delComentario();
    header('refresh:0.1;url=../noticia.php?error=none');
}
/*elseif(isset($_POST["submit"])){ 
    $newsId = $_POST["id"];
    $userid =  $_POST["userid"];
    $comment = $_POST["comment"];
    
    $c = NewsCommentContr::withID($comment,$userid)->insertComments();
    $com = NewsCommentContr::withCOMMENT($comment)->getComments();
    
    $comentid= $_SESSION["commen"] ;
    
    $lig =NewsCommentContr::withCOMMENTLIGADO($comentid["COMMENT_ID"],$newsId )->getCommentsLigado();
    
    $dataCom=$comm->newsComments($newsId);
var_dump($comentid);
    //echo json_encode($dataCom);
    header("location: ../noticia.php?error=none");
}*/
?>