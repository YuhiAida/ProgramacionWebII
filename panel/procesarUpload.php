<?php
  require_once("../database/registroCategorias.php");
  require_once("../funciones.php");


  if(empty($_POST["nombreCategoria"]) || empty($_POST["descripcionCategoria"]) || empty($_FILES["imagenCategoria"])){

      header("Location:index.php?seccion=edit&estado=vacio");
      die();
  }else {

    $nombre = $_POST["nombreCategoria"];
    $descripcion = $_POST["descripcionCategoria"];
    $imagen = $_FILES["imagenCategoria"];
//Se comprueba el tipo de imagen y se asigna a la variable formato para analisar despues.
    if($imagen["type"] == "image/jpeg"){
        $formato = "jpg";
    }elseif($imagen["type"] == "image/png"){
        $formato = "png";
    }elseif($imagen["type"] == "image/gif"){
        $formato = "gif";
    }else{
        //si el formato no es el indicado se redirecciona al error.
        header("Location:index.php?seccion=edit&estado=formato");
        die();
      }
      //si la carpeta existe se redirecciona al error.
    if (is_dir("../img/categoria/$nombre")) {
      header("Location:index.php?seccion=edit&estado=existe;");
      die();
    }else {
      //si es uno delos formatos admitidos se crea el directorio con el nombre y se guarda la descripcion y la imagen.
      mkdir("../img/categoria/$nombre");
      file_put_contents("../img/categoria/$nombre/descripcion.txt", $descripcion);
      move_uploaded_file($imagen["tmp_name"], "../img/categoria/$nombre/$nombre.$formato");
    }

    foreach ($categorias as $categoria) {
      if ($categoria["nombre"] == $nombre) {
        continue;
      }else {
        echo "<h2>Errorh2</h2>";
      }
    }

    $id = ultimoId($categorias) + 1;

    $nuevaCategoria = [
      "id" => $id,
      "nombre" => $nombre,
      "imagen" => "img/categoria/$nombre/$nombre.$formato",
      "descripcions" => "img/categoria/$nombre/descripcion.txt"
    ];

    $categorias[] = $nuevaCategoria;
    $categoriasJSON = json_encode($categorias);

    file_put_contents("../database/categorias.json", $categoriasJSON);

    header("Location:index.php?seccion=catList&estado=realizado");
  }
 ?>
