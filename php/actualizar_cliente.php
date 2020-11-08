<?php 
    include "conexion.php";
    include "header_clientes.php";
    $sql = "SELECT * FROM clientes WHERE id_cliente={$_POST['id_cliente']}";
    $result = mysqli_query($conexion, $sql);
    $cliente = mysqli_fetch_assoc($result);
?>

<div class="row d-flex justify-content-center">
      <div class="col-md-6 mb-5 p-4 border rounded">
        <h3><span class="material-icons">add</span> Actualizar datos de clientes</h3>
        <form id="formulario" action="actualizar_cliente_form.php" method="POST">
            <div class="form-group">
              <label class="font-weight-bold">Dpi cliente</label>
              <input value="<?php print $cliente['dpi_cliente']; ?>" type="text" class="form-control" name="dpi" placeholder="Dpi de cliente" required>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Nombres</label>
                  <input value="<?php print $cliente['nombre_cliente']; ?>" type="text" class="form-control" name="nombres" placeholder="Nombre cliente" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Apellidos</label>
                  <input value="<?php print $cliente['apellido_cliente']; ?>" type="text" class="form-control" name="apellidos" placeholder="Apellidos cliente" required>
                </div>                
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Teléfono</label>
                  <input value="<?php print $cliente['telefono_cliente']; ?>" type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label  class="font-weight-bold">Correo</label>
                  <input value="<?php print $cliente['correo_cliente']; ?>" type="email" class="form-control" name="correo" placeholder="Correo" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Dirección</label>
                  <input value="<?php print $cliente['direccion_cliente']; ?>" type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="font-weight-bold">Fecha de ingreso</label>
                  <input value="<?php print $cliente['fecha_ingreso']; ?>" type="date" class="form-control" name="fecha_ingreso" placeholder="Fecha de alta" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnEnviar">Guardar</button> 
            <input value="<?php print $cliente['id_cliente']; ?>" type="hidden" name="id_cliente"> 
        </form> 
        
      </div>

    </div>