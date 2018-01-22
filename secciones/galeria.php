        <!--Contenido principal-->
        <div class="principal2">
                <div id="galeria1">
                    <div class="container mb-20">
                        <h1 class="titulos poketext center-block" id="pokemons">Categorias</h1>

                        <?php
                        $carpeta = opendir("img/categoria");

                        while($categoria = readdir($carpeta)):
                            if($categoria != "." && $categoria != ".." && $categoria != "desktop.ini"):

                                echo generarGaleria($categoria);
                            endif;
                        endwhile;

                        closedir($carpeta);


                        ?>

                    </div>
                </div>
        </div>
</body>
</html>
