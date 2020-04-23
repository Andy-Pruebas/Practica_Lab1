<?php
session_start();
include "conex.php";
$conn  = conectar();
$resul = $conn->query("select * from articulos");
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <meta charset="utf-8">
                <title>
                    Crud de la empresa
                </title>
            </meta>
        </link>
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                    <h1>
                        Listado de Productos
                    </h1>

                <div>
                    <form class="form-inline" action="buscar.php" method="post">
                    <div class="form-group">
                        <input class="form-control" id="b" name="b" placeholder="Ingrese un codigo o Nombre a buscar" type="text">
                    <button type="submit" type="button" name="buscar" class="btn btn-info" >Buscar<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
                                   </div>

           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registro">
  Nuevo
</button>
                       
                    </form>
                </div>            
               
 
                <table class="table table-striped col-md-4 col-xs-6">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                descripcin
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Stock
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>

                        <?php
while ($row = $resul->fetch_object()) {
    echo '<tr>
        <td>' . $row->id . '</td>
        <td>' . $row->descripcion . '</td>
        <td>S/.' . $row->precio . '</td>
        <td>' . $row->stock . '</td>
        <td>
       <!-- <a class="btn btn-Secondary" href="actulizar.php?id='.$row->id.'">Editar</a> -->
      <a class="btn btn-danger" href="eliminar.php?id='.$row->id.'">Eleminar</a>
       <button type="button" class="btn btn-Secondary" data-toggle="modal" data-target="#update">
  Editar
</button>
        </td>
       
    </tr>';
}
?>

                </table>
            </div>
        </div>

         <script crossorigin="anonymous" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" src="https://code.jquery.com/jquery-3.2.1.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
	</div>
<!-- Modal -->
<div class="modal fade" id="Registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de informacion sobre el articulo</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Articulo
                    </h3>
                    <form action="registrar.php" id="formulario" method="POST" name="formulario">
                    	    <label for="nombre">
                                Codigo
                            </label>
                            <input class="form-control" id="id" name="id" placeholder="Codigo" required="" type="text">
                            </input>
                        <div class="form-group">
                            <label for="asunto">
                                Descripcion
                            </label>
                            <input class="form-control" id="descripcion" name="descripcion" placeholder=" Escribe el nombre del articulo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="numero">
                                Precio
                            </label>
                            <input class="form-control" id="precio" name="precio" placeholder="Precio " required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="numero">
                                Stock
                            </label>
                            <input class="form-control" id="stock" name="stock" placeholder="Stock " required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="registrar" name="registrar" type="submit" value="registrar datos del articulo"/>
                       
                      
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
        <!--fin modal -->
        <!-- Modal para editar -->

        <!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>
                        Editar datos del articulo
                    </h3>
                    <form action="actualizar.php" id="formulario" method="POST" name="formulario">
                        <div class="form-group">
                            <label for="nombre">
                                Codigo
                            </label>
                            <input class="form-control" id="id" name="id" 1placeholder="Codigo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="asunto">
                                Descripcion
                            </label>
                            <input class="form-control" id="descripcion" name="descripcionu"placeholder=" Escribe el nombre del articulo" required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="numero">
                                Precio
                            </label>
                            <input class="form-control" id="precio" name="preciou" placeholder="Precio " required="" type="text">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="numero">
                                Stock
                            </label>
                            <input class="form-control" id="stock" name="stocku" placeholder="Stock " required="" type="text">
                            </input>
                        </div>
                        <input class="btn btn-primary" id="enviar" name="actulizar" type="submit" value="Actualizar datos"/>                       
                      
                    </form>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
        <!-- Modal para editar -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="conecta.js"></script>
    </body>
</html>