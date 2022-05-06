<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
     <!-- Para el formulario -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">


    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/styles/stylesignin.css">

    <title>Crear una cuenta</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('./assets/images/logofondo.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Crear cuenta <strong>Noticias</strong></h3>
              </div>
              <form action="./includes/register_inc.php" method="post" class="formulario" id="formulario_signIn" enctype="multipart/form-data">
                <!-- Grupo Correo -->
                <div class="form-group middle formulario_grupo" id="correo_group">
                  <label for="correo" class="formulario_label">Correo electronico</label>
                  <div class="formulario_grupo-input">
                    <input type="text" id="correo" name="correo" class="form-signin formulario_input" placeholder="ejemplo@gmail.com" >
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">El formato del correo electronico es incorrecto.</p>
                    <!-- El correo solo puede contener letras, numeros,puntos,guiones y guion bajo -->
                </div>

                  <!-- Grupo usuario -->
                  <div class="form-group middle formulario_grupo" id="usuario_group">
                  <label for="usuario" class="formulario_label">Nombre de Usuario</label>
                  <div class="formulario_grupo-input">
                  <input type="text" id="usuario" name="usuario" class="form-signin formulario_input" placeholder="Alias" >
                  <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">El usuario tiene que ser de 4 a 12 digitos y solo acepta letras y numeros.</p>
                </div>
              
                <div class="form-group first formulario_grupo" id="username_group">
                      <!-- Grupo Nombre -->
                  <label for="username" class="formulario_label">Nombre(s)</label>
                  <div class="formulario_grupo-input">
                  <input type="text" class="form-signin formulario_input" id="username" name="username" placeholder="Nombre(s)">
                  <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">El Nombre solo puede tener letras, espacios y acentos.</p>
                </div>

                  <!-- Grupo Apellidos -->
                <div class="form-group middle formulario_grupo" id="apellidos_group">
                  <label for="apellidos" class="formulario_label">Apellidos</label>
                  <div class="formulario_grupo-input">
                  <input type="text" id="apellidos" name="apellidos" class="form-signin formulario_input" placeholder="Apellidos" >
                  <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">Los apellidos tienen que ser de 4 a 16 digitos y solo puede contener letras.</p>
                </div>

                 <!-- Grupo telefono -->
                 <div class="form-group middle formulario_grupo" id="telefono_group">
                  <label for="telefono" class="formulario_label">Telefono</label>
                  <div class="formulario_grupo-input">
                  <input type="text" id="telefono" name="telefono" class="form-signin formulario_input" placeholder="Ej: 8123456789" >
                  <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">El telefono tiene que ser de 10 digitos y solo acepta numeros.</p>
                </div>
                
                  <!-- Grupo Contrasena -->
                <div class="form-group middle formulario_grupo" id="password_group">
                  <label for="password" class="formulario_label">Contraseña</label>
                  <div class="formulario_grupo-input">
                    <input type="password" id="password" name="password" class="form-signin formulario_input" placeholder="Contraseña" >
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">La contraseña debe tener una letra en minúscula, una en mayúscula,
                    Al menos un dígito y un caracter especial, sin espacios. La longitud es de 8 a 15 digitos</p>
                  
                </div>
                <!-- Grupo Confirmar Contrasena -->
                <div class="form-group middle formulario_grupo" id="confirmPassword_group">
                  
                  <label for="password-conf"class="formulario_label">Confirmar contraseña</label>
                  <div class="formulario_grupo-input">
                    <input type="password" id="password-conf" name="password-conf" class="form-signin formulario_input" placeholder=" Confirmar contraseña" >
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">Las contraseñas no coincide.</p>
                </div>

                <div class="form-group last formulario_grupo " id="image_group">
                    <label for="formFile" class="form-label mt-4 formulario_label">Selecciona una foto de perfil</label>
                    <div class="formulario_grupo-input">
                    <input class="form-signin formulario_input" id="image" name="image" type="file" value="load" >
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario_input-error">No ha ingresado una foto de perfil</p>
                </div>
                
<br> <br>
                <div class="formulario_mensaje" id="formulario_mensaje" >
                  <p><i class="fas fa-exclamation-triangle"></i><b>ERROR:</b>Rellena el registro correctamente</p>
                </div>
                <br>
                <a href="./index.php"><input type="submit" name="submit" value="Crear cuenta" class="btn btn-lg btn-primary"/></a>
                <p class="center-text">¿Ya tienes una cuenta? <a href="./login.php"> Ingresa ahora</a> </p>

                
                
             
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/signin.js"></script>
  <script></script>
  </body>
</html>