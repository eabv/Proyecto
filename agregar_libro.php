<?php

	require_once "conexion.php";
	

	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	//Generamos las variables de ingreso
	$id_usuario=$_SESSION['id'];
	$id_libro=$_GET['var'];

	//Generando fecha actual
	$fecha_act =date("Y-m-d");

	//Generando fecha de entrega
	$fecha_prestamo =date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+7, date("Y")));

		$sql = "INSERT INTO prestamos (fecha_prestamo, fechaDevolucion_prestamo, id_lec, id_libro) VALUES ('$fecha_act','$fecha_prestamo','$id_usuario','$id_libro')";

				echo $conn->query($sql);

		/*$consulta = "SELECT * FROM prestamos WHERE id_libro='$id_libro' AND id_lec='$id_usuario'";
		$resultado=$conn->query($consulta);
			if($result->num_rows > 0){
				echo "";
			}else{
				
				
				
			}
	
		
		

		/*$sql = "SELECT * FROM libros WHERE id_libro='$id_libro'";

		echo "$sql";
		//$p=mysql_query($sql);
		$resultado=$conn->query($sql);
		
		$rp= mysqli_fetch_array($resultado);
		$repuesta = array();
		foreach ($rp as $key => $value) {
			$repuesta[$key]=$value;//asignamos todos los campos que te traes del select dentro de un arreglo
		}
		//enviamos el arreglo a ajax
		print_r($repuesta);

		/*if($stmt = $conn->prepare($sql)){
			$stmt->bind_param("s", $id_libro);
			if($stmt->execute()){
				
				if($stmt2 = $conn->prepare($sql2)){
				$stmt2->bind_param("ssii", $fecha_act, $fecha_prestamo, $id_usuario, $id_libro);
				if($stmt2->execute()){
					echo "Se adquirió el libro";
				}else{
					echo "Error, intente de nuevo";
				}
				$stmt2->close();
			}
			}else{
				echo "Libro no disponible al momento";
			}
			$stmt->close();
		}else{
			echo "Error - 1";
		}

	echo "$id_libro";
*/
?>
