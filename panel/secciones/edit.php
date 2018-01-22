<div class="letraNegra">

    <form action="procesarUpload.php" method="post" enctype="multipart/form-data">
       	<b>Nombre de la categoria</b>
       	<br>
       	<input placeholder="Nombre" type="text" name="nombreCategoria" size="20" maxlength="100">
        <br>
        <textarea name="descripcionCategoria" rows="10" cols="30" maxlength="50" placeholder="Descripcion"></textarea>
       	<br>
        <br>

       	<b>Imagen para la nueva categoria</b>
       	<br>
        <input type="file" accept="image/png, image/jpeg, image/gif" name="imagenCategoria"/>
       	<br>
        <br>
       	<input type="submit" value="Enviar">
        <?php
        if (!empty($_GET["seccion"]) && !empty($_GET["estado"])) {
            if ($_GET["seccion"] == "edit" && $_GET["estado"] == "formato") {
              echo "<div class='alert alert-info'>
                       <h3>Elija una imagen del formato png, jpg</h3>
                    </div>";
            }else if ($_GET["estado"] == "vacio") {
              echo "<div class='alert alert-danger'>
                       <h3>Complete el formulario</h3>
                    </div>";
            }
        } ?>
    </form>
</div>
