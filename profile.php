<?php 

include ('./templates/header.php')?>
<?php
//include ('C:\xampp\htdocs\PIABDM_INTER\classes\loginConn.classes.php');
//require ("./classes/dbh.classes.php");
//require('.\classes\loginConn.classes.php');

//$db = new LoginConn();
//$user= $_SESSION["user_email"];
//$data = $db->getUser($user);
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
  

      <!-- Style -->
      <link rel="stylesheet" href="css/styles/stylesignin.css">
        <!-- Style -->
    <link rel="stylesheet" href="css/styles/style.css">

    <title>Crear una cuenta</title>
  </head>


<body>
    <section class="home">
        <div class="box">
            <?php foreach($data as $i){
                $i["USER_PASS"];
                ?>
            <div class="in-flex">
        
            
                <img src="<?php echo $i["PROFILE_PIC"] ?>"  class="profile-pic"  />
                <br>
                <br>
                <h5 class="userdata"><?php echo $i["USER_ALIAS"] ?></h5>
                <h6 class="userdata"><?php echo $i["DESCRIPTION"] ?></h6>
            </div>
                
                
               
                <div class="in-flex">
                    <div class="form-pad">
                        <form action="./includes/porfile_inc.php" method="post" class="formulario" id="formulario_signIn" enctype="multipart/form-data">
                    
                                <!-- Grupo Nombre -->
                            <div class="form-group first formulario_grupo" id="username_group">
                                    
                                <label for="username" class="formulario_label">Nombre(s)</label>
                                <div class="formulario_grupo-input">
                                <input type="text" class="form-signin formulario_input" id="username" name="username" placeholder="Nombre(s)" value="<?php echo $i["USER_NAME"] ?>">
                                <i class="formulario_validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario_input-error">El Nombre solo puede tener letras, espacios y acentos.</p>
                            </div>
                                <!-- Grupo Apellidos -->
                            <div class="form-group middle formulario_grupo" id="apellidos_group">
                            <label for="apellidos" class="formulario_label">Apellidos</label>
                            <div class="formulario_grupo-input">
                            <input type="text" id="apellidos" name="apellidos" class="form-signin formulario_input" placeholder="Apellidos" value="<?php echo $i["USER_LASTNAME"] ?>" >
                            <i class="formulario_validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">Los apellidos tienen que ser de 4 a 16 digitos y solo puede contener letras.</p>
                            </div>
                                <!-- Grupo Correo -->
                            <div class="form-group middle formulario_grupo" id="correo_group">
                            <label for="correo" class="formulario_label">Correo electronico</label>
                            <div class="formulario_grupo-input">
                                <input type="text" id="correo" name="correo" class="form-signin formulario_input" value="<?php echo $i["EMAIL"] ?>" >
                                <i class="formulario_validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">El formato del correo electronico es incorrecto.</p>
                                <!-- El correo solo puede contener letras, numeros,puntos,guiones y guion bajo -->
                            </div>
                                <!-- Grupo usuario -->
                            <div class="form-group middle formulario_grupo" id="usuario_group">
                            <label for="usuario" class="formulario_label">Nombre de Usuario</label>
                            <div class="formulario_grupo-input">
                            <input type="text" id="usuario" name="usuario" class="form-signin formulario_input" placeholder="Alias" value="<?php echo $i["USER_ALIAS"] ?>" >
                            <i class="formulario_validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">El usuario tiene que ser de 4 a 12 digitos y solo acepta letras y numeros.</p>
                            </div>
                            
                                <!-- Grupo telefono -->
                            <div class="form-group middle formulario_grupo" id="telefono_group">
                            <label for="telefono" class="formulario_label">Numero</label>
                            <div class="formulario_grupo-input">
                            <input type="text" id="telefono" name="telefono" class="form-signin formulario_input" placeholder="Ej: 8123456789" value="<?php echo $i["PHONE"] ?>">
                            <i class="formulario_validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">El telefono tiene que ser de 10 digitos y solo acepta numeros.</p>
                            </div>
                            <div class="form-group-pass">
                                    <!-- Grupo Contrasena -->
                                <div class="form-group middle formulario_grupo" id="password_group">
                                <label for="password" class="formulario_label">Contraseña</label>
                                <div class="formulario_grupo-input">
                                    <input type="password" id="password" name="password" class="form-signin formulario_input" placeholder="Contraseña"  value="<?php echo $i["USER_PASS"] ?>" >
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
                            </div>
                            
                                
                            <a href="./index.php"><input type="submit" name="submit" value="Guardar cambios" class="btn btn-lg btn-primary"/></a>
                           
                        </form>
                    </div>
                </div>
             </div>
             <?php 
                }
             ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <!-- <script src="../assets/js/demo.js"></script>-->
    <script type="text/javascript" src="js/signin.js"></script>
    </body>


<?php include ('./templates/footer.php')?>