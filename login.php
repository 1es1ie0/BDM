<?php
  session_start();
?>
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
    <link rel="stylesheet" href="./css/bootstrap.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="./css/styles/stylelogin.css">

    <title>Iniciar Sesión</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('./assets/images/logofondo.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Iniciar Sesión en <strong>Noticias</strong></h3>
              
              </div>
              <form action="./includes/login_inc.php" method="post">
                <div class="form-group first formulario_grupo"id="mail_group">
                  <label for="mail" class="formulario_label">Correo electronico</label>
                  <div class="formulario_grupo-input">
                  <input type="text" id="mail" name="mail" class="form-login formulario_input" placeholder="ejemplo@gmail.com">
                  <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                  
                  <p class="formulario_input-error">formato de correo invalido.</p>
                </div>

                <div class="form-group last mb-3 formulario_grupo" id="pass_group">
                  <label for="password" class="formulario_label">Contraseña</label>
                  <div class="formulario_grupo-input">
                    <input type="password" id="password" name="password" class="form-login formulario_input" placeholder="Contraseña" >
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario_input-error">La contraseña es invalida.</p>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Recuerdame </span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  
                </div>
                
                <input type="submit" id="submit_login" name="submit" value="Ingresar" class="btn btn-lg btn-primary" href="./index.php">
              
                
                <p class="center-text">¿Aún no tienes cuenta? <a href="./signin.php"> Regístrate</a> </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
