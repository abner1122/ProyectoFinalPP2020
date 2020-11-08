<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$producto = (isset($_POST['producto'])) ? $_POST['producto'] : '';
$presentacion = (isset($_POST['presentacion'])) ? $_POST['presentacion'] : '';
$unidad = (isset($_POST['unidad'])) ? $_POST['unidad'] : '';
$moneda = (isset($_POST['moneda'])) ? $_POST['moneda'] : '';
$precio_compra = (isset($_POST['precio_compra'])) ? $_POST['precio_compra'] : '';
$precio_venta = (isset($_POST['precio_venta'])) ? $_POST['precio_venta'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$fecha_vencimiento = (isset($_POST['fecha_vencimiento'])) ? $_POST['fecha_vencimiento'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_producto = (isset($_POST['id_producto'])) ? $_POST['id_producto'] : '';


switch($opcion){
    case 1:
       
        $consulta = "INSERT INTO producto (producto, presentacion, unidad, moneda, precio_compra, precio_venta, stock, estado, fecha_vencimiento) VALUES ('$producto', '$presentacion', '$unidad', '$moneda', '$precio_compra', '$precio_venta', '$stock', '$estado', '$fecha_vencimiento') ";

        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM producto ORDER BY id_producto DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE producto SET producto='$producto', presentacion='$presentacion', unidad='$unidad',       moneda='$moneda', precio_compra='$precio_compra', precio_venta='$precio_venta', stock='$stock', estado='$estado', fecha_vencimiento='$fecha_vencimiento' WHERE id_producto='$id_producto' ";		

        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM producto WHERE id_producto='$id_producto' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM producto WHERE id_producto='$id_producto' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM producto";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
