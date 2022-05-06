const formulario= document.getElementById("formulario_signIn");
const inputs = document.querySelectorAll('#formulario_signIn input')
const expresiones ={
    nombre:/^[a-zA-ZÀ-ÿ\s]{1,40}$/,// Letras y espacios, pueden llevar acentos.
    apellidos:/^[a-zA-ZÀ-ÿ\s]{1,40}$/,// Letras y espacios, pueden llevar acentos.
    correo:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/, //tiene que tener una letra en minuscula, una en Mayuscula,Al menos un digito y un caracter especial, sin espacios
    telefono: /^\d{10}$/, // solo 10 numeros.
    usuario: /^[a-zA-Z0-9]{4,16}$/ // Letras, numeros
    /* url: /^{1, }$/,*/
}

const valores={
    username: false,
    apellidos: false,
    correo: false,
    password: false,
    telefono:false,
    usuario: false,
    image:false
}
//$(document).ready(function(){
//alert("hola");
//});
const valFormulario = (e) =>{
    switch( e.target.name){
        case "correo":
            validacionCampos(expresiones.correo, e.target, 'correo');
        break;
        case "username":
            validacionCampos(expresiones.nombre, e.target, 'username');
        break;
        case "apellidos":
            validacionCampos(expresiones.apellidos,e.target,'apellidos');
        break;
        case "password":
            validacionCampos(expresiones.password,e.target,'password');
            confirmPassword();
        break;
        case "password-conf":
            confirmPassword();
        break;
        case "telefono":
            validacionCampos(expresiones.telefono,e.target,'telefono');
        break;
        case "usuario":
            validacionCampos(expresiones.usuario,e.target,'usuario');
        break;
        case "image":
        
            
        break;
    }
}


const validacionCampos=( expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`${campo}_group`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`${campo}_group`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#${campo}_group i`).classList.add('fa-check-circle');
        document.querySelector(`#${campo}_group i`).classList.remove('fa-times-circle');
        document.querySelector(`#${campo}_group .formulario_input-error`).classList.remove('formulario_input-error-activo');
        valores[campo] = true;
    }else{
        document.getElementById(`${campo}_group`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`${campo}_group`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#${campo}_group i`).classList.add('fa-times-circle');
        document.querySelector(`#${campo}_group i`).classList.remove('fa-check-circle');
        document.querySelector(`#${campo}_group .formulario_input-error`).classList.add('formulario_input-error-activo');
        document.querySelector(`#${campo}_group .formulario_input-error`).classList.add('formulario_input-error-activo');
        valores[campo] = false;
    }
}

const confirmPassword= () =>{
    const password1 = document.getElementById('password');
    const password2= document.getElementById('password-conf');
    if(password1.value !== password2.value){
        document.getElementById(`confirmPassword_group`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`confirmPassword_group`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#confirmPassword_group i`).classList.add('fa-times-circle');
        document.querySelector(`#confirmPassword_group i`).classList.remove('fa-check-circle');
        document.querySelector(`#confirmPassword_group .formulario_input-error`).classList.add('formulario_input-error-activo');
        document.querySelector(`#confirmPassword_group .formulario_input-error`).classList.add('formulario_input-error-activo');
        valores['password'] = false;
    } else{
        document.getElementById(`confirmPassword_group`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`confirmPassword_group`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#confirmPassword_group i`).classList.add('fa-check-circle');
        document.querySelector(`#confirmPassword_group i`).classList.remove('fa-times-circle');
        document.querySelector(`#confirmPassword_group .formulario_input-error`).classList.remove('formulario_input-error-activo');
        valores['password'] = true;
    }
}


inputs.forEach((input)=>{
    input.addEventListener('keyup', valFormulario);
    input.addEventListener('blur', valFormulario);
})

formulario.addEventListener('submit', (e)=>{
    

    if(valores.username && valores.apellidos && valores.correo && valores.password &&valores.usuario &&valores.telefono ){
        document.querySelectorAll('formulario_grupo-correcto').forEach((icono)=>{
            icono.classList.remove('formulario_grupo-correcto');
        });
        document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
        
    }else{
        e.preventDefault();
        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
    }
})

$(document).on('change','input[type="file"]',function(){
	// this.files[0].size recupera el tamaño del archivo
	// alert(this.files[0].size);
	
	var fileName = this.files[0].name;
	var fileSize = this.files[0].size;

	if(fileSize > 3000000){
		alert('El archivo no debe superar los 3MB');
		this.value = '';
		this.files[0].name = '';
	}else{
		// recuperamos la extensión del archivo
		var ext = fileName.split('.').pop();
		
		// Convertimos en minúscula porque 
		// la extensión del archivo puede estar en mayúscula
		ext = ext.toLowerCase();
    
		// console.log(ext);
		switch (ext) {
			case 'jpg':
                document.getElementById(`image_group`).classList.remove('formulario_grupo-incorrecto');
                document.getElementById(`image_group`).classList.add('formulario_grupo-correcto');
                document.querySelector(`#image_group i`).classList.remove('fa-times-circle');
                document.querySelector(`#image_group i`).classList.add('fa-check-circle');
			case 'jpeg':
                document.getElementById(`image_group`).classList.remove('formulario_grupo-incorrecto');
                document.getElementById(`image_group`).classList.add('formulario_grupo-correcto');
                document.querySelector(`#image_group i`).classList.remove('fa-times-circle');
                document.querySelector(`#image_group i`).classList.add('fa-check-circle');
			case 'png':
                document.getElementById(`image_group`).classList.remove('formulario_grupo-incorrecto');
                document.getElementById(`image_group`).classList.add('formulario_grupo-correcto');
                document.querySelector(`#image_group i`).classList.remove('fa-times-circle');
                document.querySelector(`#image_group i`).classList.add('fa-check-circle');
			 break;
			default:
                document.getElementById(`image_group`).classList.add('formulario_grupo-incorrecto');
                document.getElementById(`image_group`).classList.remove('formulario_grupo-correcto');
                document.querySelector(`#image_group i`).classList.add('fa-times-circle');
                document.querySelector(`#image_group i`).classList.remove('fa-check-circle');

				alert('El archivo no tiene la extensión adecuada');
				this.value = ''; // reset del valor
				this.files[0].name = '';
		}
	}
});