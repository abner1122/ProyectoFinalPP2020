<?php 
    include "conexion.php";
    include "header.php";
    $sql = "SELECT * FROM empresa WHERE id_empresa={$_POST['id']}";
    $result = mysqli_query($conexion, $sql);
    $empresa = mysqli_fetch_assoc($result);
?>
<div class="container">
    <div class="row">
        <div class="col">
        <form id="formulario" action="actualizar.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nit Empresa</label>
                <input value="<?php print $empresa['nit_empresa']; ?>" type="text" class="form-control" name="nit" aria-describedby="emailHelp" placeholder="NIT" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de la empresa</label>
                <input value="<?php print $empresa['nombre_empresa']; ?>" type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa el numero de telefono/Celular" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input value="<?php print $empresa['direccion_empresa']; ?>" type="text" class="form-control" name="direccion" aria-describedby="emailHelp" placeholder="Ingresa el Correo Electronico" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input value="<?php print $empresa['correo_empresa']; ?>" type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Categoria de la empresa" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input value="<?php print $empresa['telefono_empresa']; ?>" type="text" class="form-control" name="telefono" aria-describedby="emailHelp" placeholder="Categoria de la empresa" required="">
            </div>
            <button class="btn btn-primary" id="btnEnviar"> Guardar</button>
            <input type="hidden" name="id" value="<?php  print $empresa["id_empresa"]; ?>">
        </form> 
        </div>
    </div>
</div> 