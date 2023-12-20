<?php
	//Recibir los datos desde el formulario
$user=$_POST['username'];
$pass=$_POST['password'];

if(isset($user)){
	//Proceso de conexión a la BD
	require_once "conexion.php";
	
	//Iniciar la sesión
	session_start();
	
		$sql = "SELECT * FROM lectores WHERE nombre_lec=? AND password_lec=?";
		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param("ss",$user,$pass);
			if($stmt->execute()){
				$result=$stmt->get_result();
				if($result->num_rows == 1){
					
					//obtenemos los resultados de la consulta 
					$row = $result->fetch_array(MYSQLI_ASSOC);
					$param_nombre=$row["nombre_lec"];
					$param_id=$row["id_lec"];
					
					//creamos los valores sesión
					$_SESSION['id']=$param_id;
					$_SESSION['nombre']=$param_nombre;
					
					//redireccionamos al usuario
					header("location: index.php");
					
				}else{
					//redireccionamos al usuario
					header("location: login.php");
				}
			}
			$stmt->close();	
	}else{
		//redireccionamos al usuario
		header("location: login.php");
		exit();
	}
$conn->close();
}else{
	echo "Asegurese de completar todos los campos";
}
?>