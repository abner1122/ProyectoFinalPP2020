<?php
include "conexion.php";
$nit= $_POST ['nit'];
$nombre= $_POST ['nombre'];
$direccion= $_POST ['direccion'];
$correo= $_POST ['correo'];
$telefono= $_POST ['telefono'];

$sql = "INSERT INTO empresa (nit_empresa, nombre_empresa, direccion_empresa, correo_empresa, telefono_empresa)VALUES ('$nit', '$nombre', '$direccion', '$correo', '$telefono')" ;
if (mysqli_query ($conexion, $sql)) {
    echo "Datos Ingresados";
} else {
    echo "Error al Ingresar los datos";
}
?>
<script>
   window.location.replace("http://localhost/crud/lista.php");
</script>