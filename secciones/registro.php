<div class="login">
  <form method="post" action="procesarRegistro.php" name="contactform" class="contacto-form">
    <div>
      <h2>Registro</h2>

      <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required="required" class="contacto-form-input" placeholder="Nombre de Usuario"><br>
      <br>
      <input type="text" name="pass" required="required" class="contacto-form-input" placeholder="Contraseña"><br>
    </div>

    <div>
      <button type="submit" name="submit"value="Enviar" id="submit" class="contacto-button">Registrate</button>
    </div>
  </form>
</div>
