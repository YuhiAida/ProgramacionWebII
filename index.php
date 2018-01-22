
<?php
session_start();
include 'funciones.php';
include 'arrays.php';
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
    <title>Abasto Shopping</title>
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

         </ul>
     </nav>
      <div class="contenido">
        <?php generarContenido() ?>
       </div>
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
