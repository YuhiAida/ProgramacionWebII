<?php
echo "<pre>";
print_r($_POST["id"]);
echo "</pre>";

require_once("../database/registroCategorias.php");


  if (empty($_POST["id"])) {
    header("Location:index.php?seccion=catList&estado=error");
  }else {
    foreach ($categorias as $indice => $categoria) {
      if ($_POST["id"] == $categoria["id"]) {
        $posicion = $indice;
      }
    }
  }

if (!isset($posicion)) {
  header("Location:index.php?seccion=catList&estado=error");
  die();
}else {
  if (is_file("../".$categorias[$posicion]["imagen"])) {
        unlink("../".$categorias[$posicion]["imagen"]);
      }else {

      }
      //fin
  if(is_file("../".$categorias[$posicion]["descripcions"])){
        unlink("../".$categorias[$posicion]["descripcions"]);
      }else {

      }
      //fin
      if(is_dir("../img/categoria/".$categorias[$posicion]["nombre"])){

          rmdir("../img/categoria/".$categorias[$posicion]["nombre"]);
      }

      unset($categorias[$posicion]);

      $categoriasJSON = json_encode($categorias);

      file_put_contents("../database/categorias.json", $categoriasJSON);
      header("Location:index.php?seccion=catList&estado=eliminado");
}
//fin
?>
