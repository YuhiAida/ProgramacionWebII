<!--Contenido principal-->
<div class="home">
  <div class="banner">
    <h1>Acerca de</h1>
    <p>El Abasto de Buenos Aires (conocido como Abasto Shopping, Abasto a secas o El Abasto) es uno de los centros comerciales más grandes y exitosos de Buenos Aires.</p>
  </div>
  <div class="texto">
    <h3>Historia</h3>
    <p>Ocupa el lugar del antiguo Mercado de Abasto Proveedor, que abrió en 1893, fue ampliado en 1934 y cerró en 1984. Luego de una década de abandono, fue comprado por la desarrolladora IRSA (de George Soros), asociada con la firma chilena Parque Arauco, remodelado y ampliado para transformarse en shopping. La obra estuvo a cargo de la constructora Caputo S.A. comenzó en enero de 1997 y fue inaugurada el 9 de noviembre de 1998, con la presencia del Presidente Carlos Menem y el Jefe de Gobierno Fernando de la Rúa.</p>

    <h3>Arquitectura</h3>
    <p>El shopping fue diseñado por tres estudios de arquitectura en conjunto: Manteola-Sánchez Gomez-Santos-Solsona-Salaberry (MSGSSS) (proyecto urbano), Benjamin Thompson Architects (BTA, de Cambridge, Estados Unidos) y Pfeifer-Zurdo (diseñadores de interiores).​ Se diseñaron más de 230 locales repartidos en cuatro plantas, un patio de comidas en el último piso, una sala de arcades incluyendo una vuelta al mundo y otros juegos mecánicos, dos subsuelos de estacionamiento, un multicine de 12 salas (el Hoyts Abasto), el Museo de los Niños y la Plaza del Zorzal, una plaza seca y cubierta con un techo de vidrio.

Se trata en realidad de la remodelación de dos edificios distintos y la construcción de un edificio nuevo, conectando los otros dos. El más antiguo es el primer edificio del Mercado de Abasto, una estructura de mampostería y hierro con techos de chapa que data de 1893 y está sobre el frente de la calle Lavalle. El segundo fue diseñado por los arquitectos Delpini-Sulcic-Bes e inaugurado en 1934, una estructura de hormigón armado con bóvedas de estilo art decó que forma la fachada principal sobre la Avenida Corrientes. Y el edificio nuevo, diseñado por MSGSSS, Pfeifer-Zurdo y BTA funciona como puente entre las dos construcciones antiguas, con una fachada vidriada y dos plazas secas con escalinatas (una sobre la calle Agüero y la otra sobre Anchorena).

En su momento, la demolición de los interiores originales del Mercado de Abasto generó una polémica, ya que fue uno de los primeros edificios porteños con escaleras mecánicas, pero se mantuvo toda la cáscara original de ambos edificios antiguos, y se vaciaron totalmente los interiores.</p>

    <h4>Curiosidades</h4>
    <p>El patio de comidas del Abasto cuenta con tres locales de la empresa McDonald's, y uno de ellos es el único McDonald's Kosher fuera de Israel en todo el mundo,​ el "Museo de los Niños", entre otras cosas.</p>
  </div>

  <div class="imagenes">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/slider/1.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/slider/2.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/slider/3.jpg" style="width:100%">
          
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <script type="text/javascript">
      var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          setTimeout(showSlides, 3000);
        }
      </script>
  </div>
</div>
