<?php
	require_once "conexion.php";

	//Iniciar la sesión
	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	$id_usuario=$_SESSION['id'];
	$nombre_usuario=$_SESSION['nombre'];
	
	$consulta="SELECT * FROM lectores where id_lec=$id_usuario";
	$resultado=$conn->query($consulta);
	
	//Almacenar los datos en un arreglo
	$fila=mysqli_fetch_array($resultado);
	$direccion=$fila['direccion_lec'];
	$telf=$fila['telefono_lec'];
	$cedula=$fila['ci_lec'];

	$consulta_2="SELECT * FROM prestamos where id_lec = $id_usuario";
	$result = $conn->query($consulta_2);

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
		  <a class="navbar-brand ml-5" href="#">
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
		
		<div class="container-fluid text-center">
		  <div class="row">
			<div class="col-sm-6">
				<div>
					<img src="img/1485477097-avatar_78580.png" height="200" alt="image">				
					</div>
					<div class="container-fluid table-div">
					<table>
					<p>Description: This table provides details about various products available on the website.</p>

					  <tr class="odd">
						<th id="name">Nombre</th> 
					  </tr>
					  <tr class="even">
						<td><?php echo "$nombre_usuario"; ?></td>
					  </tr>
					  <tr class="odd">
						<th>Número de identificación</th> 
					  </tr>
					  <tr class="even">
						<td><?php echo "$cedula"; ?></td>
					  </tr>
					 <tr class="odd">
						<th>Dirección</th> 
					  </tr>
					  <tr class="even">
						<td><?php echo "$direccion"; ?></td>
					  </tr>
					 <tr class="odd">
						<th>Teléfono</th> 
					  </tr>
					 <tr class="even">
						<td><?php echo "$telf"; ?></td>
					  </tr>
					</table>
				</div>	
			</div>
			<div class="col-sm-6 mt-5">
				<h3>Libros Adquiridos</h3>
					<div class="table-div" style="margin-top: 5rem; margin-bottom: 5rem;">
						<table>
								<tr class="odd">
									<th>Fecha Prestamo</th>
									<th>Fecha Devolución</th>
								</tr>
								<?php
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
									echo"<tr class='even'>";	
									echo"<td>".$row['fecha_prestamo']."</td>";
									echo"<td>".$row['fechaDevolucion_prestamo']."</td>";
									}
									$result->free();
								}else {
									echo"<tr class='even'>";	
									echo"<td>No existen pedidos registrados</td>";
								}
								echo"</tr>";
								?>
						</table>
						</div>
					<a href="actualizar.php"><button class="boton2 mr-4">Actualizar Datos</button></a>
				 	<a href="eliminar.php"><button class="boton2 ml-4">Eliminar Lector</button></a>
			</div>
		</div>
	</div>
	</main>

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