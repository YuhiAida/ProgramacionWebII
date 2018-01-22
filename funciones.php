

    <!--generarNavbar---------------------------------------------------------->
<?php
function ultimoId($array){
    usort($array, function ($a, $b) {
        return $b['id'] - $a['id'];
    });

    $primerRegistro = $array[0];

    $ultimoId = $primerRegistro["id"];

    return $ultimoId;
}



 function generarNavbar(){
        require 'arrays.php';

          foreach ($navbar as $url => $nombre):
          echo '<li><a href="' . $url .'"> ' . $nombre .' </a></li>';
        endforeach;
          if (isset($_SESSION['usuario'])) {
            echo("<li><a href='perfil.php'>Bienvenido {$_SESSION['usuario']}</a></li>");
            echo("<li><a href='logOut.php'>Salir</a></li>");
          }else{
            foreach ($registroLogin as $key => $value) {
              echo '<li><a href="' . $key .'"> ' . $value .' </a></li>';
            }
          }
    }


      function generarNavbarPanel(){
          require 'arrays.php';

          foreach ($navbarPanel as $url => $nombre):
          echo '<li><a href="' . $url .'"><span>' . $nombre .'</span></a></li>';
          endforeach;
          if (isset($_SESSION['usuario'])) {
            echo("<li><a href='../perfil.php'>Bienvenido {$_SESSION['usuario']}</a></li>");
            echo("<li><a href='../logOut.php'>Salir</a></li>");
          }
          }
    //generarNavbar------------------------------------------------------------>






    //generarContenido--------------------------------------------------------->
    function generarContenido($current_page = 'home')
    {

    if(!empty($_GET['seccion'])) {
        $current_page = $_GET['seccion'];
    }

    switch ($current_page) {
        case 'galeria':
            include_once 'secciones/galeria.php';
            break;
        case 'contacto':
            include_once 'secciones/contacto.php';
            break;
        case 'home':
          include_once 'secciones/home.php';
          break;
        case 'registroSuccess':
          include 'registro.php';
          break;
        case 'login':
          include_once 'secciones/login.php';
          break;
        case 'registro':
          include_once 'secciones/registro.php';
          break;

        default:
            include_once 'secciones/404.php';
    }
  }

  //generarContenido--------------------------------------------------------->



  //generarContenidoPanel------------------------------------------------------->

  function generarContenidoPanel($current_page = 'catList')
  {

  if(!empty($_GET['seccion'])) {
      $current_page = $_GET['seccion'];
  }

  switch ($current_page) {
      case 'edit':
          include_once 'panel/secciones/edit.php';
          break;
      case 'catList':
          include_once 'panel/secciones/catList.php';
          break;

      default:
          include_once 'secciones/404.php';
  }
}
  //generarContenidoPanel------------------------------------------------------>


     function generarGaleria($nombre){

         $carpeta = opendir("img/categoria/$nombre");

         while($imagen = readdir($carpeta)):

             if($imagen != "." && $imagen != ".." && $imagen != "descripcion.txt" && $imagen != "desktop.ini"):

                 return '<div class="col-xs-16 col-md-3">
                     <div class="thumbnail">
                         <img src="img/categoria/'. $nombre .'/'. $imagen .'" alt="'. $nombre .'" class="img-responsive">
                         <div class="caption">
                             <h4>'. ucfirst($nombre) .'</h4>
                             <p class="scrollable">'. nl2br(file_get_contents("img/categoria/$nombre/descripcion.txt")) .' </ p>
                         </div>
                     </div>
                 </div>';


             endif;
         endwhile;



     }
?>
