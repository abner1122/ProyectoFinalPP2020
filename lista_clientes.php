
<?php
include "./php/conexion.php";
include "./php/header_clientes.php";


$sql = "SELECT * FROM clientes WHERE 1";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <div class="container">
    <div class="row">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id cliente</th>
                <th scope="col">Dpi</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha ingreso</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php print $row["id_cliente"]; ?></td>
                  <td><?php print $row["dpi_cliente"]; ?></td>
                  <td><?php print $row["nombre_cliente"]; ?></td>
                  <td><?php print $row["apellido_cliente"]; ?></td>
                  <td><?php print $row["telefono_cliente"]; ?></td>
                  <td><?php print $row["correo_cliente"]; ?></td>
                  <td><?php print $row["direccion_cliente"]; ?></td>
                  <td><?php print $row["fecha_ingreso"]; ?></td>
                  <td>
                    <form action="php/eliminar_cliente.php" method="POST" >
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                      <input type="hidden" name="id_cliente" value="<?php  print $row["id_cliente"]; ?>">
                    </form>
                  </td>
                  <td>
                    <form action="php/actualizar_cliente.php" method="POST" >
                      <button type="submit" class="btn btn-primary">Editar</button>
                      <input type="hidden" name="id_cliente" value="<?php  print $row["id_cliente"]; ?>">
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
          <center>
          <a class="btn btn-success" href="clientes.html">Agregar</a>
          </center>
      </div>
    </div>
  </div>
    <?php
} else {
  echo "No hay resultados";
}

mysqli_close($conexion);
?>
