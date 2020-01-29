
<div class="container mt-5">
	<div>
        <h2>Lista de peliculas</h2>
        <button type="button"  class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo <i class="fa fa-plus"></i></button>

        <div >
            <table class="table"  id="table_peliculas">
                <thead>
                    <tr class="bg-primary text-white">
                        <th name="nombre">Nombre</th>
                        <th name="descripcion">Descripcion</th>
                        <th name="director">Director</th>
                        <th name="genero">Genero</th>   
                      
                    </tr>
                </thead>
                <tbody>

                    
                </tbody>
            </table>
           
        </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de pelis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/cine/index.php/peliculas/guardar" method="post" id="form-ingresar-pelicula">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" placeholder="nombre" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Director:</label>
                            <input type="text" name="director" class="form-control" placeholder="director">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Genero:</label>
                            <input type="text" name="genero" class="form-control" placeholder="genero">
                        </div>
                        <input type="submit" id="btn_guardar_peli" class="btn btn-primary" value="Guardar">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  
                    </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>