<?php 
    include "conexion.php";
    $sql = "UPDATE empresa SET nit_empresa='{$_POST['nit']}', nombre_empresa='{$_POST['nombre']}', direccion_empresa='{$_POST['direccion']}', correo_empresa='{$_POST['correo']}', telefono_empresa='{$_POST['telefono']}'  WHERE id_empresa='{$_POST['id']}'";
    $result = mysqli_query($conexion, $sql);
?>
<script>
   window.location.replace("http://localhost/crudjulio/lista.php");
</script>