<?php
  try {
    require("link_db.php");
  } catch (\Throwable $th) {
    echo("error");
  }
  
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Dental Murillo</title>
        <link rel="shortcut icon" href="img/Logotipo.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/Estilos.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>

    <body>
            <header>
                    <div class="logo"><a href="index.php"><img src="img/LogotipoInvert.png" width="43px" height="43px"></a></div>
                    <div class="header"> 
                        <nav class="Titulo">
                            <ul>Dental Murillo</ul>
                        </nav>

                        

                        <nav class="menu-btn">
                          <label id="icono-menu" class="fas fa-bars"></label>
                        </nav>

                    <nav>
                      <ul id="menu" class="menu ocultar-menu">
                        <li><a href="index.php">Inicio</a></li>
                               <li><a href="servicios.php">Servicios</a></li>
                                    <li><a href="">Sobre nosotros</a>
                                       <ul>
                                          <li><a href="nosotros.html">¿Quienes somos?</a></li>
                                          <li><a href="mision.html">Misión</a></li>
                                          <li><a href="vision.html">Visión</a></li>
                                       </ul>
                                    </li>
                               <li><a href="contacto.php">Contacto</a></li>
                      </ul>
                    </nav>
                
                    </div>
            </header>

            <div id="contenido" class="contenido">

              <br><br><br><br><br>

              <div class = "signup-div">

                <p class = "subtit">Registrarse</p>

                <form class="signup-form" action="" method="post">

                    <label for="FirstName">Nombre:</label><br>
                    <input class="form-objts" type="text" name="FirstName" placeholder="Ingrese su nombre" required>
                    <label for="LastName">Apellidos:</label><br>
                    <input class="form-objts" type="text" name="LastName" placeholder="Ingrese sus apellidos" required>
                    <label for="Date">Fecha de nacimiento:</label><br>
                    <input class="form-objts" type="date" name="Date" min="1930-01-01" required>
                    <label for="Email">Correo electrónico:</label><br>
                    <input class="form-objts" type="email" name="Email" placeholder="Ingrese su correo electrónico" required>
                    <label for="Passwd">Contraseña:</label><br>
                    <input class="form-objts" type="password" name="Passwd" placeholder="Contraseña" required>
                    <label for="Passwd">Confirmar contraseña:</label><br>
                    <input class="form-objts" type="password" name="ConfirmPasswd" placeholder="Confirme su contraseña" required>
                    <input class="in_btn form-objts" type="submit" name="submit" value="Registrarse">

                </form>


              </div>    
              
                <br><br>
                <br><br><br><br> 
                    
              
                    
            </div>
            
            <footer class="footer"> Derechos reservados </footer>
            <script src="js/scripts.js"></script>
    </body>
</html>