<main class="main-container">
        <!--seccion 1-->
      <section data-aos="fade-down"  data-aos-easing="linear" 
      data-aos-duration="1500" class="seccion-primaria">
    
        <h1>Películas y Series ilimitadas en un solo lugar</h1>
        <p>Disfrutá donde quieras.</p>
        <p>Cancelá en cualquier momento.</p>
        <input class="input_registrarse" type="button" value="Registrarse" onclick="window.location.href='pages/registrarse.html'" />
      </section>
      <!--seccion 2-->
      <section data-aos="fade-up" data-aos-duration="1500"class="seccion-secundaria">
        <h2>¿Que estas buscando para ver?</h2>
        <form class="miniform-seccion-secundaria">
          <input class="input_textarea"type="text" name="" id="text" placeholder="Buscar..."/>
          <input class="input_buscar" type="button" value="Buscar" />
        </form>
      </section>
      <hr />
     
      <!--seccion 3-->
     <section id="tendencias" class="seccion-tendencias">
      <h2>Las Tendencias de Hoy</h2>
        <div class="container-peliculas" id="contenedor"></div>
    
        <div class="botones" >
          <button id="btn-anterior" class=" boton">Anterior</button>
          <button id="btn-siguiente" class=" boton">Siguiente</button>
        </div>
      </section>
     <hr>
      <!--seccion 4-->
      
      <section data-aos="fade-down"  data-aos-easing="linear" 
      data-aos-duration="1500" class="seccion-aclamadas">
      <h2 >Las Pelis más aclamadas</h2>
        <ul class="list-peliculas-aclamadas">
          <a href="./pages/detalle.html">
            <img class="imagen-galeria" 
              src="./assets/img/spiderman.webp"
              alt="Spiderman la pelicula"
              width="190"
            />
          </a>
          <a href="./pages/detalle.html">
            <img class="imagen-galeria"
              src="./assets/img/moana.webp"
              alt="moana la pelicula"
              width="190"
            />
          </a>
          
          <a href="./pages/detalle.html">
            <img class="imagen-galeria"
              src="./assets/img/raya-ultimo-dragon.webp"
              alt="raya y el ultimo dragon la pelicula"
              width="180"
            />
          </a>
          <a href="./pages/detalle.html">
            <img class="imagen-galeria"
              src="./assets/img/wish.webp"
              alt="whish la pelicula"
              width="190"
            />
            <a href="./pages/detalle.html">
              <img class="imagen-galeria"
                src="./assets/img/increibles2.jpeg"
                alt="los increibles la pelicula"
                width="182"
              />
            </a>
            <a href="./pages/detalle.html">
              <img class="imagen-galeria"
                src="./assets/img/La-Dama-Y-El-Vagabundo.jpg"
                alt="la dama y el vagabundo la pelicula"
                width="190"
              />
          </a>
          <a href="./pages/detalle.html">
            <img class="imagen-galeria"
              src="./assets/img/reyleon.jpg"
              alt="rey leon la pelicula"
              width="190"
            />
          </a>
          <a href="./pages/detalle.html">
            <img class="imagen-galeria"
              src="./assets/img/up.jpg"
              alt="up la pelicula"
              width="200"
            />
        </a>
        </ul>
      </section>
    
    </main>