<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Dental Murillo</title>
        <link rel="shortcut icon" href="img/Logotipo.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/Estilos.css">
        <link rel="stylesheet" href="css/all.min.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

                <div class="contacto">

                    <br><br><br><br><br>
                
                    <h1 class="titulo1">Contacto</h1>
                    
                    <br><br>
                    
                      <p class="p3">
                        <strong>SEO Community Manager:</strong><br> <span class="p4"> Espinoza Duran Jesús Javier <br>  Tel. 616 111 53 33 <br> a353765@uabc.edu.mx </span>
                        <br><br><strong>Programador:</strong><br> <span class="p4"> Martínez Castro José Luis <br> Tel. 616 126 94 22 <br> jose354653@gmail.com </span>
                      </p>
                     
                      <br>
                
                      <form class="formulario" action="enviar.php" method="POST">
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <input type="text" name="telefono" placeholder="Teléfono">
                        <input type="email" name="email" placeholder="Correo electrónico" required>
                        <textarea name="mensaje" placeholder="Escribe tu mensaje..."></textarea>
                        <div class="g-recaptcha" data-sitekey="6LcmlMUUAAAAAEcVF4s8lVPR9t942joaUHSYYpTP"></div>
                        <br><input id="enviar-btn" type="submit" name="submit" value="Enviar">
                      </form>
                
                      <br><br><br>
                
                </div>
                    
            </div>



            <footer class="footer"> Derechos reservados </footer>
            <script src="js/scripts.js"></script>
    </body>
</html>
