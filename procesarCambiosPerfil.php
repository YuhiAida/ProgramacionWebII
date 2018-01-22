<?php
    session_start();
    require_once('database/usuarios.php');

    if (isset($_POST['usuario']) && file_exists('database/usuarios.php')) {

          foreach ($usuarios as $pos3 => $usuario3):
            if ($usuario3['usuario'] === $_SESSION['usuario']) {
                $usuario3['usuario'] = $_POST['usuario'];

                $datosNuevos = [
                  'id' => $pos3,
                  'usuario' => $_POST['usuario'],
                  'pass' => $usuario3['pass']
                ];

                $usuarios[$pos3] = $datosNuevos;
                $usuariosJson = json_encode($usuarios);
                file_put_contents('database/usuarios.json', $usuariosJson);

                /*echo "<pre>";
                print_r($datosNuevos);
                echo "</pre>";

                echo "<pre>";
                print_r($usuariosJson);
                echo "</pre>";*/
                header('location:logOut.php');
            }
          endforeach;

    }elseif (isset($_POST['pass']) && file_exists('database/usuarios.php')) {
      foreach ($usuarios as $pos3 => $usuario3):
        if ($usuario3['usuario'] === $_SESSION['usuario']) {
            $usuario3['pass'] = $_POST['pass'];
            print_r($usuario3);
            $datosNuevos = [
              'id' => $pos3,
              'usuario' => $usuario3['usuario'],
              'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT)
            ];

            $usuarios[$pos3] = $datosNuevos;
            $usuariosJson = json_encode($usuarios);
            file_put_contents('database/usuarios.json', $usuariosJson);

            echo "<pre>";
            print_r($datosNuevos);
            echo "</pre>";

            echo "<pre>";
            print_r($usuariosJson);
            echo "</pre>";
            header('location:logOut.php');
        }
      endforeach;
    }
 ?>
