<?php
session_start();
include 'funciones.php';
include 'arrays.php';
require_once('database/usuarios.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="styleSlider.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="master.css">
    <meta charset="utf-8">
    <title>Perfil de usuario</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Montserrat+Subrayada" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
    <nav>
        <ul>
            <?php generarNavbar();
            if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin') {
              echo "<li><a href='panel/index.php'>Panel de control</a></li>";
            }
            ?>
            <li>
              <a href="index.php">Volver al inicio</a>
            </li>
         </ul>
     </nav>
      <div class="contenido">
        <h1 class="datosUser">Datos de usuario</h1>
        <div class="datosUser">
          <form method="post" action="procesarCambiosPerfil.php" name="contactform" class="contacto-form">
              <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required="required" class="contacto-form-input" placeholder="Nombre de Usuario"><br>
              <button type="submit" name="submit"value="Enviar" id="submit" class="contacto-button">Cambiar nombre de usuario</button>
              <br>
          </form>


          <form class="" action="procesarCambiosPerfil.php" method="post">
            <input type="text" name="pass" required="required" class="contacto-form-input" placeholder="Contraseña"><br>
            <button type="submit" name="submit"value="Enviar" id="submit" class="contacto-button">cambiar Contraseña</button>
          </form>
        </div>
       </div>
       <br>
           <!--Footer con logo y redes-->
           <footer>
     	    	<div class="footer-container">
     	    		<div class="footer-logo">
     	    		    <a href="index.php"><img src="img/logo.png" alt="Logo abasto shopping" id="logo"></a>
     	    		</div>
                     <div class="footer-texto"><p>© 2017 Todos los derechos reservados</p></div>
     	    		<div class="contacto-redes">
     	    			<a href="https://twitter.com/abasto_shopping" target="_blank" class="twitter">
     	    				<img src="img/twitter_circle_color-256-3.png" alt="Twitter logo">
     	    			</a>

     	    			<a href="https://www.facebook.com/Abasto.Shopping/" target="_blank" class="facebook">
     	    				<img src="img/facebook-circle.png" alt="Facebook logo">
     	    			</a>
     	    		</div>
     	    	</div>
     	    </footer>
  </body>
</html>
