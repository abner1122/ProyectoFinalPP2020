<?php 

include_once "conexion.php";

$id_cliente = $_POST ['id_cliente'];
$dpi= $_POST ['dpi'];
$nombres= $_POST ['nombres'];
$apellidos= $_POST ['apellidos'];
$telefono= $_POST ['telefono'];
$correo= $_POST ['correo'];
$direccion= $_POST ['direccion'];
$fecha_ingreso= $_POST ['fecha_ingreso'];

$sql = "UPDATE clientes SET dpi_cliente='$dpi', nombre_cliente='$nombres', apellido_cliente='$apellidos', telefono_cliente='$telefono', correo_cliente='$correo', direccion_cliente='$direccion', fecha_ingreso='$fecha_ingreso'  WHERE id_cliente='{$_POST['id_cliente']}' "; 
$result = mysqli_query($conexion, $sql);

?>
<script>
   window.location.replace("http://localhost/crud/lista_clientes.php");
</script>