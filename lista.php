
<?php
include "./php/conexion.php";
include "./php/header.php";


$sql = "SELECT * FROM empresa WHERE 1";
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
                <th scope="col">Nit</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php print $row["nit_empresa"]; ?></td>
                  <td><?php print $row["nombre_empresa"]; ?></td>
                  <td><?php print $row["direccion_empresa"]; ?></td>
                  <td><?php print $row["correo_empresa"]; ?></td>
                  <td><?php print $row["telefono_empresa"]; ?></td>
                  <td>
                    <form action="php/eliminar.php" method="POST" >
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                      <input type="hidden" name="id" value="<?php  print $row["id_empresa"]; ?>">
                    </form>
                  </td>
                  <td>
                    <form action="php/actualizar_formulario.php" method="POST" >
                      <button type="submit" class="btn btn-primary">Editar</button>
                      <input type="hidden" name="id" value="<?php  print $row["id_empresa"]; ?>">
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
          <center>
          <a class="btn btn-success" href="empresa.html">Agregar</a>
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
