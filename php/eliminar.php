<?php 
    include "conexion.php";
    $sql = "DELETE FROM empresa WHERE id_empresa={$_POST['id']}";
    $result = mysqli_query($conexion, $sql);
?>
<script>
   window.location.replace("http://localhost/proyecto/lista.php");
</script>