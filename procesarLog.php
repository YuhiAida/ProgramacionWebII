<?php
session_start();
require_once('database/usuarios.php');

foreach ($usuarios as $pos => $usuario) {
  if ($usuario['usuario'] == $_POST['usuario']) {
    if (password_verify($_POST['pass'], $usuario['pass'])) {
      $posicion = $pos;
      $_SESSION['usuario'] = $usuario['usuario'];
    }
  }else {
    header('Location: index.php?seccion=login&estado=error');
  }
}

if (isset($posicion) && $_SESSION['usuario'] !== 'admin') {
  header('Location: perfil.php');
}elseif (isset($posicion) && $_SESSION['usuario'] == 'admin') {
  header('location:panel/index.php');
}else {
  header('Location: index.php?seccion=login&estado=error');
}

 ?>
