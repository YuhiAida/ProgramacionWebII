        <!--Contenido principal-->
        <div id="pre-footer">
		<!--Mapa y informacion de contacto-->
			<section class="map-info" >
			<h2>Direccion</h2>

				<!--Mapa de google con la direccion-->
				<div id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.203629548361!2d-58.4107085!3d-34.6028742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc0cf5c054da4aa1!2sAbasto+Shopping!5e0!3m2!1ses-419!2sar!4v1507134193204" width="400" height="300" style="border:0" allowfullscreen></iframe>
        </div>
				<div>Av. Corrientes 3247, C1193AAR CABA</div>

				<!--Enlaces a redes sociales-->
				<div id="contacto-redes">
				<a href="https://twitter.com/abasto_shopping" target="_blank" class="twitter">
	    				<img src="img/twitter_circle_color-256-3.png" alt="Twitter logo">
	    			</a>

	    			<a href="https://www.facebook.com/Abasto.Shopping/" target="_blank" class="facebook">
	    				<img src="img/facebook-circle.png" alt="Facebook Logo">
	    			</a>
				</div>
			</section>

			<section class="contacto">

		     	 <!--Formulario de contacto-->
			      <form method="post" action="form-contacto.php" name="contactform" class="contacto-form">
			        <div class="contacto-form-column">
			          <h2 class="contacto-title">Contactanos</h2>
			          <label class="contacto-form-label">Mail</label><br>
			          <input type="email" name="mail" id="mail" pattern="^[A-Za-z0-9](([_.-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([.-]?[a-zA-Z0-9]+)*).([A-Za-z]{2,})$" required="required" class="contacto-form-input"><br>
			          <label class="contacto-form-label">Nombre Completo</label><br>
			          <input type="text" name="nombre" id="name" required="required" class="contacto-form-input"><br>
                <label for="CheckBox">Motivo</label><br>

			          Reclamo
			          <input type="checkbox" name="check_list[]" class="contacto-form-checkbox" value="reclamo">
			          Consulta
			          <input type="checkbox" name="check_list[]" class="contacto-form-checkbox" value="consulta">
			          Otro
			          <input type="checkbox" name="check_list[]" class="contacto-form-checkbox" value="otro">
			        </div>

			        <!--Cuadro de comentarios-->
			        <div class="contacto-form-column">
			          <label class="contacto-form-label">Mensaje:</label><br>
                <textarea name="comentario" required="required" rows="5" cols="30" id="comments" style="color:black"></textarea><br>
			          <button type="submit" name="submit"value="Enviar" id="submit" class="contacto-button">Enviar</button>
			        </div>
			      </form>

			        <!--Span para id de nav-->
					<span id="contacto"></span>
		    </section>
	    </div>
    </div>
</body>
</html>
