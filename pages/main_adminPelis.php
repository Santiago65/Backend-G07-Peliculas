<main>
        <h1 class="title-login">Administrador de Películas</h1>
            <section class="formulario-gestor-de-peliculas">
                <div class="container-gestor">
                    <input class="input-gestor" type="text" name="Id Película:"placeholder="Id Película:">
                    <input class="input-gestor" type="text" name="Título:"placeholder="Título:">
   
                </div> 
                <div class="container-gestor">
                    <input class="input-gestor" type="text" name="Género:" id="" placeholder="Género:">
                    <input class="input-gestor" type="text" name="Duración:" id=""placeholder="Duración:">
                </div>  
                
                <div class="container-textarea">
                
                 <textarea class="textarea" name="" id="" cols="" rows="">Sinopsis:</textarea>
                </div>
                <div class="container-gestor " id="file">
                    <input class="input-gestor" type="file" name="file" id="">
                </div>
                <div>
                    <input class="input-submit" type="submit" value="Agregar Películas">
                </div>   
               
            </section>
            <hr>
            <section>
              <h2>Listado de Películas</h2>
              <p class="listado-de-pelis">Para ver todos los datos de las películas, elija una y toque modificar.</p>
          
            </section>
            <section>
                <table class="tabla-modificadora">
                
                  <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                   
                  </tr>
                  <tr>
                    <td class="titulo">Moana</td>
                    <td class="genero"> Animation, aventura</td>
                    <td >
                      <img class="img-listado-peliculas"  src="../assets/img/moana.webp" alt="edit-pencil">
                    </td>
                    <td>
                      <input class="input-modificar" type="text" value="Modificar">
                      <input class="input-eliminar"  type="text" value="Eliminar">
                   </td>
                  </tr>
                 </table>
              </section>
    </main>  