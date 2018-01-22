<?php

require('database/usuarios.php');
require('funciones.php');

$datosRegistro = [
  'id' => ultimoId($usuarios)+1,
  'usuario' => $_POST['usuario'],
  'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT)
];

$usuarios[] = $datosRegistro;
$usuariosJson = json_encode($usuarios);
file_put_contents('database/usuarios.json', $usuariosJson);
header('Location:index.php?seccion=login');
 ?>
