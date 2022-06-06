<?php 
include ('../classes/newsComment-contr.classes.php');
include_once('../classes/newsCommentConn.classes.php');

$comm = new News();
session_start();

if(isset($_POST["ajax_sumbit"])){ 
    $newsId = $_POST["id"];
    $userid =  $_POST["userid"];
    $comment = $_POST["comment"];
    
    $c = NewsCommentContr::withID($comment,$userid)->insertComments();
    $com = NewsCommentContr::withCOMMENT($comment)->getComments();
    
    $comentid= $_SESSION["commen"] ;
     //echo json_encode($comentid);
    $lig =NewsCommentContr::withCOMMENTLIGADO($comentid,$newsId )->getCommentsLigado();
    
    $dataCom=$comm->newsComments($newsId);
    //echo '<script>console.log('.$dataCom.');</script>';
    //header('refresh:0.1;url=../index.html?error=none');  header('refresh:0.1;url=../index.html?error=none');
    echo json_encode($dataCom);
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