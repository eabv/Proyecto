<?php
	require_once "conexion.php";

	//Iniciar la sesión
	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	
	$id_usuario=$_SESSION['id'];
	$nombre_usuario=$_SESSION['nombre'];

	if(isset($id_usuario)){
		$sql = "SELECT * FROM lectores WHERE id_lec=?";
		if($stmt = $conn->prepare($sql))
		{
			$stmt->bind_param("s", $id_usuario);
			if($stmt->execute()){
				$result=$stmt->get_result();
				if($result->num_rows == 1){
					$row = $result->fetch_array(MYSQLI_ASSOC);
					$param_nombre=$row["nombre_lec"];
					$param_ci=$row["ci_lec"];
					$param_dir=$row["direccion_lec"];	
					$param_telefono=$row["telefono_lec"];
					
					
				}else{
					echo"Error. Datos no encontrados";
					exit();
				}
			}
			else{
				echo"Error! Intente más tarde";
				exit();
			}
			$stmt->close();
		}	
	}else{
		header("location: usuario.php");
		exit();
	}


	if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST['nombre_lec']) && isset($_POST['ci_lec']) && isset($_POST['direccion_lec']) && isset($_POST['telefono_lec'])){
				$sql="UPDATE lectores SET nombre_lec=?, ci_lec=?, direccion_lec=?, telefono_lec=? WHERE id_lec=?";
				if($stnt = $conn->prepare($sql)){
					$stnt->bind_param("ssssi", $_POST['nombre_lec'], $_POST['ci_lec'], $_POST['direccion_lec'], $_POST['telefono_lec'], $id_usuario);
					if($stnt->execute()){
						header("location: usuario.php");
						exit();
					}else{
						echo "Error, intente de nuevo";
					}
					$stnt->close();
				}
			}
			$conn->close();
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Cadena, Garcia & Guerrero">

<title>Librería 3J</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles -->
<link href="css/main_style.css" rel="stylesheet">
	
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@800&display=swap" rel="stylesheet">

</head>
<body>
 	<header>
		
		<!-- Navbar -->	
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand -->
		  <a href="#" class="navbar-brand ml-5" href="#">
			  <img src="img/icons8-male-user-50.png" alt="Logo" style="width:40px;">
			  <?php echo "Bienvenido usuario : ".$nombre_usuario; ?></a>

		  <!-- Links -->
		  <div style="margin-right: 4rem;">
			<ul class="navbar-nav" style="margin-left: 15rem;">
			<li class="nav-item">
			  <a class="nav-link" href="index.php"><img src="img/icons8-home-64.png" alt="Logo" style="width:30px;"></a>
			</li>
			<!-- Dropdown -->
			<li class="nav-item dropdown" style="margin-left: 25rem;" >
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				  <img src="img/icons8-circled-menu-48.png" alt="Logo" style="width:30px;">
				  Opciones
			  </a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="usuario.php"><img src="img/1485477097-avatar_78580.png" alt="Logo" style="width:40px;">Información del usuario</a>
				<a class="dropdown-item" href="login.php"><img src="img/icons8-exit-60.png" alt="Logo" style="width:40px;">Cerrar sesión</a>
			  </div>
			</li>
		  </ul>
		</div>
		</nav>
		
	</header>
	
	<main>
			
	<div class="agregar-div container bg-light text-center mt-5 p-5">
		<h3> Edite la información del usuario </h3>
		
		<div class="row">
			<div class="col-sm-3 p-4">
					<div>
					<img class="d-block my-auto" src="img/1485477097-avatar_78580.png" width="350px" height="350px" alt="image">				
					</div>
			</div>
			<div class="col-sm-9">
			<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]?>">
				<div class="mt-4">
					<label class="mr-4">Nombre: </label>
				<input type="text" name="nombre_lec" value="<?php echo $param_nombre ?>" required>
				</div>
				<div class="mt-3">
					<label class="mr-5">Cédula:</label>
				<input type="text" name="ci_lec" value="<?php echo $param_ci ?>" required>
				</div>
				<div class="mt-3">
					<label class="mr-4">Dirección:</label>
				<input type="text" name="direccion_lec" value="<?php echo $param_dir ?>" required>
				</div>
				<div class="mt-3">
					<label class="mr-4">Teléfono:</label>
				<input  type="text" name="telefono_lec" value="<?php echo $param_telefono ?>" required>
				</div>
				</div>
				<div class="container mt-3">
				<input class="boton2 mr-4" type="submit" value="Actualizar">
				<a href="usuario.php"><button class="boton2">Cancelar</button></a>
				</div>
			</form>
		
		</div>
	</div>
	
		<footer class="bg-dark py-4 mt-5 ">
		<div class="container" style="padding: 1px;">
		  <p class="mb-2 text-center text-white">Copyright &copy; Librería 3J 2020</p>
		</div>
		<!-- /.container -->
 	 </footer>
	
<!-- Bootstrap core JavaScript -->
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>