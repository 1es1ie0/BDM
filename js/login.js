$(document).ready(function(){
    $('#mail').on('keyup', function(){
        if($(this).val().length < 1){
            $('#mail_group').addClass('formulario_grupo-incorrecto');
            $('#mail_group').removeClass('formulario_grupo-correcto');
            document.querySelector(`#mail_group i`).classList.add('fa-times-circle');
            document.querySelector(`#mail_group i`).classList.remove('fa-check-circle');

        }else{
            $('#mail_group').addClass('formulario_grupo-correcto');
            $('#mail_group').removeClass('formulario_grupo-incorrecto');
            document.querySelector(`#mail_group i`).classList.add('fa-check-circle');
            document.querySelector(`#mail_group i`).classList.remove('fa-times-circle');
        }
    });
    $('#password').on('keyup', function(){
        if($(this).val().length < 1){
            $('#pass_group').addClass('formulario_grupo-incorrecto');
            $('#pass_group').removeClass('formulario_grupo-correcto');
            document.querySelector(`#pass_group i`).classList.add('fa-times-circle');
            document.querySelector(`#pass_group i`).classList.remove('fa-check-circle');
        }else{
            $('#pass_group').addClass('formulario_grupo-correcto');
            $('#pass_group').removeClass('formulario_grupo-incorrecto');
            document.querySelector(`#pass_group i`).classList.add('fa-check-circle');
            document.querySelector(`#pass_group i`).classList.remove('fa-times-circle');
        }
    });
    $('#submit_login').on('click', function(e){

        if($('#password').val().length < 1 ){
            $('#pass_group').addClass('formulario_grupo-incorrecto');
            $('#pass_group').removeClass('formulario_grupo-correcto');
            document.querySelector(`#pass_group i`).classList.add('fa-times-circle');
            document.querySelector(`#pass_group i`).classList.remove('fa-check-circle');
            
        }else{
            $('#pass_group').addClass('formulario_grupo-correcto');
            $('#pass_group').removeClass('formulario_grupo-incorrecto');
            document.querySelector(`#pass_group i`).classList.add('fa-check-circle');
            document.querySelector(`#pass_group i`).classList.remove('fa-times-circle');
        
        }

        if($('#mail').val().length < 1){
            $('#mail_group').addClass('formulario_grupo-incorrecto');
            $('#mail_group').removeClass('formulario_grupo-correcto');
            document.querySelector(`#mail_group i`).classList.add('fa-times-circle');
            document.querySelector(`#mail_group i`).classList.remove('fa-check-circle');
            
        }else{
            $('#mail_group').addClass('formulario_grupo-correcto');
            $('#mail_group').removeClass('formulario_grupo-incorrecto');
            document.querySelector(`#mail_group i`).classList.add('fa-check-circle');
            document.querySelector(`#mail_group i`).classList.remove('fa-times-circle');
            
        }
        if($('#mail').val().length < 1 || $('#password').val().length < 1){
            alert('Rellena todos los  campos');
            e.preventDefault();
        }
    });
});
