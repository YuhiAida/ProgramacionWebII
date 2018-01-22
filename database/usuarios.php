<?php

  if (file_exists("database/usuarios.Json")) {
    $json = file_get_contents("database/usuarios.json");
    $usuarios = json_decode($json, true);
  }else {
    $usuarios = [
      [
        'id' => 0,
        'usuario' => 'admin',
        'pass' =>password_hash('admin', PASSWORD_DEFAULT)
      ]
    ];

    file_put_contents('database/usuarios.json');

  }
 ?>
