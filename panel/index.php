<!DOCTYPE html>
<html>
  <head lang="es">
    <?php
      session_start();
      require('../arrays.php');
      require('../funciones.php');
      if ($_SESSION['usuario'] !== 'admin') {
        header('location:../index.php');
      }
    ?>
    <meta charset="utf-8">
    <title>Panel control</title>
    <link rel="stylesheet" href="../master.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Montserrat+Subrayada" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
    <h1>Bienvenido</h1>

    <nav>
        <ul>
            <?php generarNavbarPanel();?>
            <li>
              <a href="../index.php">Volver al inicio</a>
            </li>
         </ul>
     </nav>

     <div class="catList">
       <?php generarContenidoPanel() ?>
      </div>

  </body>
</html>
