<?php 
    include "conexion.php";
    $sql = "DELETE FROM clientes WHERE id_cliente={$_POST['id_cliente']}";
    $result = mysqli_query($conexion, $sql);
?>
<script>
   window.location.replace("http://localhost/crud/lista_clientes.php");
</script>