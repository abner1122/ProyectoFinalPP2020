<?php

$servidor= "localhost";
$usuario= "root";
$clave= "";
$base= "dbproyecto";
$conexion=mysqli_connect($servidor , $usuario, $clave, $base);
if (!$conexion) {
    echo "error en la conexion";
    
}
