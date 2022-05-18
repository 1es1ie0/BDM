<?php

      session_start();
      require('.\classes\loginConn.classes.php');
      $db = new LoginConn();
if(isset($_SESSION["user_email"])){
$user= $_SESSION["user_email"];

$data = $db->getUser($user);
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Noticias</title>
        <link rel="stylesheet" href="./css/bootstrap.css" /> 
        
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary arriba">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Noticias</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarColor01" style="">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="./index.php">Minuto a minuto
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./nacional.php">Nacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./internacional.php">Internacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./salud.php">Salud</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./politica.php">Politica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./negocios.php">Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./deportes.php">Deportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./espectaculos.php">Espectaculos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
                              <?php 
                              if(isset($_SESSION["user_email"])){
                              foreach($data as $i){
                                $_SESSION["user_id"]=$i["USER_ID"];
                                $i["USER_PASS"];
                               
                              if(!empty($i["DESCRIPTION"])){
                                $tipo=$_SESSION["TIPO_USER"];

                                if(strcasecmp($i["DESCRIPTION"],"Admin")==0){
                            ?>
                                          <a class="dropdown-item" href="./profile.php">Perfíl</a>
                                          <a class="dropdown-item" href="./admin-comentario.php">admin comentario</a>
                                          <a class="dropdown-item" href="./admin-notificaciones.php">admin notificaciones</a>
                                          <a class="dropdown-item" href="./registro-reporteros.php">registro reportero</a>
                                          <a class="dropdown-item" href="./secciones.php">Secciones</a>
                                          <a class="dropdown-item" href="./crear_seccion.php">Nueva seccion</a>
                                          <a class="dropdown-item" href="./editar_seccion.php">Editar seccion</a>
                                          <a class="dropdown-item" href="./login.php">Cerrar Session</a>
                            <?php
                            }
                            elseif(strcasecmp($i["DESCRIPTION"] , "Reportero")==0) {
                            ?>
                            <a class="dropdown-item" href="./profile.php">Perfíl</a>
                            <a class="dropdown-item" href="./publish-article.php">Crear articulo</a>
                            <a class="dropdown-item" href="./reportero-notificaciones.php">reportero notificaciones</a>
                            <a class="dropdown-item" href="./reportero-noticias.php">Ver mis noticias</a>
                            <a class="dropdown-item" href="./login.php">Cerrar Session</a>
                            <?php 
                                }
                                elseif(strcasecmp($i["DESCRIPTION"] , "Usuario registrado")==0) {
                            ?>
                                    <a class="dropdown-item" href="./profile.php">Perfíl</a>
                                    <a class="dropdown-item" href="./login.php">Cerrar Session</a>
                            <?php 
                                } 
                              }
                              else{
                            ?>
                            <a class="dropdown-item" href="./noticia.php">ver noticia</a>
                            
                            <?php 
                                }
                              }
                            }
                                ?>
            
            
            </div>
        </li>
      </ul>
      <form class="d-flex">
        
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="bi bi-search" style="color: white; font-size: 1.5rem" href="./buscador.php"></a>
        </li>
        <li class="nav-item">
        <?php 
                                if(isset($_SESSION["user_email"])){
                            ?>
                                <a class="nav-link signin" href="./login.php"> <?php echo $_SESSION["user_email"] ?> </a>

                            <?php 
                                }
                                else {
                            ?>
                                  <a class="nav-link signin" href="./login.php">Ingresar</a>
                                <?php 
                                }
                            ?>
        </li>
    
        
      </form>
    </div>
  </div>
</nav>



</body>
</html>