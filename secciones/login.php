  <div class="login">
  <form method="post" action="procesarLog.php" name="contactform" class="contacto-form">
    <div>
      <h2>Login</h2>
      <?php
      if (!empty($_GET["seccion"]) && !empty($_GET["estado"])) {
          if ($_GET["estado"] == "error") {
            echo "<div class='alert alert-danger'>
                     <h3>Mail o contraseña incorrecto</h3>
                  </div>";
          }else {
            header("Location: index.php?seccion=login");
          }
      }
       ?>
      <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required="required" class="contacto-form-input" placeholder="Nombre de usuario"><br>
      <br>
      <input type="text" name="pass" required="required" class="contacto-form-input" placeholder="Contraseña"><br>
    </div>

    <div>
      <button type="submit" name="submit"value="Enviar" id="submit" class="contacto-button">Enviar</button>
    </div>
  </form>
</div>
