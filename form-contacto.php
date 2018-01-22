<!DOCTYPE html>
<?php
include 'funciones.php';
include 'arrays.php'
?>
<html lang="es">
  <head>
    <link rel="stylesheet" href="styleSlider.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
        <ul class="nav navbar-nav navbar-right">
            <?php generarNavbar();?>
         </ul>
     </nav>

      <div class="contenido" style="color:black">

        <?php
        if (!empty($_POST["mail"]) && !empty($_POST['nombre']) && !empty($_POST['comentario'])){

        $mail = $_POST['mail'];
        $nombre = htmlentities($_POST['nombre']);
        $comentario = $_POST['comentario'];

        echo $mail."<br><br>";
        echo $nombre."<br><br>";

        if (!empty($_POST['check_list'])) {
          foreach ($_POST['check_list'] as $check =>$checkvalor) {
            echo "CheckBox de $checkvalor seleccionado <br><br>";

            }
          }
          echo nl2br(htmlentities($comentario));


        file_put_contents ( "datos_formulario/" . $mail . ".txt", $comentario /*, $datos_formulario*/, FILE_APPEND);

        echo '<h1 style="color:black">Gracias '. $nombre .' su mensaje fue enviado correctamente</h1>';

      }else {
        echo "<h1>Error,complete los formularios</h1>";
      }
        ?>

        <button type="button" name="volver">
          <a href="index.php" style="color:black">Volver al inicio</a>
        </button>

       </div>
           <!--Footer con logo y redes-->
           <footer>
     	    	<div class="footer-container">
     	    		<div class="footer-logo">
     	    		    <a href="index.php"><img src="img/logo.png" alt="Logo abasto shopping" id="logo"></a>
     	    		</div>
                     <div class="footer-texto"><p>© 2017 Bernardo Biante Todos los derechos reservados</p></div>
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
