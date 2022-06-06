
function searchNews() {
    $.ajax({
        url : './includes/newsComment_inc.php',
        type : 'POST',
        data : { 'id' : $("#news_id").val(),
                'userid':$("#user_id").val(),
                'comment': $("#comment").val(),'ajax_sumbit' : 1 },
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
        
        alert(json);
            var data_array = $.parseJSON(json);
            var html = "";
            for( let key of data_array ){
                if(key['PARENT'] == null){
                    html = html.concat('<div id="',key['ID'],'" style="color: black; padding: 10px;"><h5>',key['TEXT'],'</h5></div>');
                }
            }
            $("#ajaxResponse").html(html);
            for( let key of data_array ){
                if(key['PARENT'] != null){
                   let innerComment = "";
                   innerComment = innerComment.concat('<div id="', key['ID'],'" style="color: black; padding: 10px;"><h5>',"- ",key['TEXT'],'</h5></div>');
                   $(innerComment).insertAfter('#'+key['PARENT']+' h5:last-child');
                }
            }
        },
        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
        // de la petición y un texto con la descripción del error que haya dado el servidor
        error : function(jqXHR, status, error) {
            console.log(status);
            console.log(error);
            alert('Disculpe, existió un problema');
        },
        complete : function(jqXHR, status) {
            //alert('Petición realizada');
        }
    });

   }
function cancelComment(){
    $("#comment").val("") ;
}

$(document).ready(function(){
    $("#butto2n").on("click",function(){
        searchNews()
    });
    $("#cancel").on("click",function(){
        cancelComment();
    });
});