<?php
require_once "conexion.php";

	//Iniciar la sesión
	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	$id_usuario=$_SESSION['id'];


		if(isset($id_usuario)){
		$sql = "DELETE FROM lectores WHERE id_lec=?";
		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param("i", $id_usuario);
			if($stmt->execute()){
			header("location: login.php");
				}else{
					echo"Error. Datos no encontrados";
					exit();
				}
	}
			$stmt->close();
			$conn->close();
	}else{
		echo "Error! Por favor intente más tarde";
		exit();
	}
?>