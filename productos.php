<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Parcial II - Proyectos</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
  </head>
    
  <body> 
    <div class="alert alert-secondary text-center">
        <h2>Proyecto final de programación</h2>
        <p>Abner del cid - Julio juarez <br>
            <strong class="text-danger">Acciones para la tabla productos</strong> 

        </p>

        <a class="btn btn-primary material-icons" href="opciones.html">
            <span class="material-icons">home</span>
        </a>
    </div>
     <header>
     <h3 class='text-center'></h3>
     </header>    
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-warning" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>  
            
        </div>    
    </div>    
    <br>  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaProductos" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Id producto</th>
                            <th>Producto</th>
                            <th>Presentación</th>
                            <th>Unidad</th>                                
                            <th>Moneda</th>  
                            <th>Precio compra</th>
                            <th>Precio venta</th>
                            <th>Stock</th>
                            <th>Estado</th>
                            <th>Fecha vencimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formProductos">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Producto:</label>
                            <input type="text" class="form-control" id="producto" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Presentación</label>
                            <input type="text" class="form-control" id="presentacion" required>
                        </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="" class="col-form-label">Unidad</label>
                            <input type="text" class="form-control" id="unidad" required>
                        </div>               
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Moneda</label>
                            <input type="text" class="form-control" id="moneda" required>
                        </div>               
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="col-form-label">Precio de compra</label>
                            <input type="text" class="form-control" id="precio_compra" required>
                        </div>
                    </div>  
                </div>
                <div class="row"> 
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label for="" class="col-form-label">Precio de venta</label>
                            <input type="text" class="form-control" id="precio_venta" required>
                        </div>               
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="" class="col-form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" required>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Estado</label>
                            <input type="number" class="form-control" id="estado" required>
                        </div>
                    </div>    
                    <div class="col-lg-8">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Fecha de vencimiento</label>
                        <input type="date" class="form-control" id="fecha_vencimiento" required>
                        </div>            
                    </div>  
                     
                </div>  
                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="prod.js"></script>  
    
    
  </body>
</html>
