<?php
	//Recibir los datos desde el formulario
$user=$_POST['username'];
$pass=$_POST['password'];
$ci_id=$_POST['ci'];
$dir =$_POST['direccion'];
$telf=$_POST['telf'];

if(isset($user)&&isset($ci_id)&&isset($dir)&&isset($telf)&&isset($pass)){
	//Proceso de conexión a la BD
	require_once "conexion.php";
	
		$sql = "SELECT id_lec FROM lectores WHERE ci_lec=?";
		if($stmt = $conn->prepare($sql))
		{
			$stmt->bind_param("s",$ci_id);
			if($stmt->execute()){
				$result=$stmt->get_result();
				if($result->num_rows == 1){
					header("location: registro.php");
				}else{
						$sql="INSERT INTO lectores (nombre_lec, ci_lec, direccion_lec, telefono_lec, password_lec) VALUES (?,?,?,?,?)";
						if($stnt = $conn->prepare($sql)){
							$stnt->bind_param("sssss", $user, $ci_id, $dir, $telf, $pass);
							if($stnt->execute()){
								header("location: login.php");
								
							}else{
								echo "Error, intente de nuevo";
							}
							$stnt->close();
			}
				}
			}
			$stmt->close();	
	}else{
		header("location: index.php");
		exit();
	}
	
}else{
	echo "Asegurese de completar todos los campos";
}
?>