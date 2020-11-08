<?php 
include "conexion.php";

if(isset($_POST["username"])){

	$user = $_POST["username"];
	$pass = $_POST["password"];

	$sql = "SELECT usuario, password FROM usuarios WHERE usuario = '$user' ";

	$result = mysqli_query ($conexion, $sql);

	if (mysqli_num_rows($result) > 0 ){

		$dato = mysqli_fetch_assoc($result);
		
		if ($dato["usuario"] == $user && $dato["password"]== $pass){

			session_start();
			$_SESSION["validar"];
			header("location:../opciones.html");
		}else{
			header("location:./index.html");
		}

	}else{
		header("location:../index.html");
	}



}



