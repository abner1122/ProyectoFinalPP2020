<?php
include "conexion.php";

$dpi= $_POST ['dpi'];
$nombres= $_POST ['nombres'];
$apellidos= $_POST ['apellidos'];
$telefono= $_POST ['telefono'];
$correo= $_POST ['correo'];
$direccion= $_POST ['direccion'];
$fecha_ingreso= $_POST ['fecha_ingreso'];


$sql = "INSERT INTO clientes (dpi_cliente, nombre_cliente, apellido_cliente, telefono_cliente, correo_cliente, direccion_cliente, fecha_ingreso) VALUES ('$dpi', '$nombres', '$apellidos', '$telefono', '$correo', '$direccion', '$fecha_ingreso')" ;

if (mysqli_query ($conexion, $sql)) {
    echo "Datos Ingresados";
} else {
    echo "Error al Ingresar los datos";
}

?>
<script>
   window.location.replace("http://localhost/crud/lista_clientes.php");
</script>