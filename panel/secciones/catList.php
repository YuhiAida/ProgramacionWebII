<div class="catList">
    <table>
      <thead>
          <tr>
              <th>#id</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Acciones</th>
          </tr>
      </thead>

      <tbody>

         <?php
         require '../database/registroCategorias.php';
          foreach($categorias as $categoria):
          ?>
              <tr>
                  <td><?= $categoria["id"]; ?></td>
                  <td><?= $categoria["nombre"]; ?></td>
                  <td>
                      <img src="../<?= $categoria["imagen"]; ?>" alt="<?= $categoria["nombre"]; ?>" width="50">
                  </td>
                  <td>
                      <a href="index.php?seccion=edit" class="btn btn-success btn-xs">Editar</a>
                      <form action="delete.php" method="post">
                          <input type="submit" class="btn btn-danger btn-xs"value="Eliminar"></input>
                          <input type="hidden" name="id" value="<?= $categoria["id"]?>">
                      </form>
                  </td>
              </tr>

          <?php
            endforeach;

          ?>
          <?php
          if (!empty($_GET["seccion"]) && !empty($_GET["estado"])) {
              if ($_GET["seccion"] == "catList" && $_GET["estado"] == "realizado") {
                echo "<div class='alert alert-success'>
                         <h3>La categoria fue agregada correctamente</h3>
                      </div>";
              }else if ($_GET["estado"] == "eliminado") {
                echo "<div class='alert alert-info'>
                         <h3>La categoria fue eliminada correctamente</h3>
                      </div>";
              }
          }
            ?>
      </tbody>
    </table>
</div>
