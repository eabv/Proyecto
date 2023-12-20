<?php
	require_once "conexion.php";

	//Iniciar la sesión
	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	$id_usuario=$_SESSION['id'];
	$nombre_usuario=$_SESSION['nombre'];
	
	//$resultado=mysqli_query($conn,$consulta) or die(mysqli_connect_errno());
	
	//Almacenar los datos en un arreglo
	//$fila=mysqli_fetch_array($resultado);
	//$ciudad=$fila['ciudad'];
	$libro;

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
		  <a href="#" class="navbar-brand ml-5 active">
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
			<div class="col-sm-3 bg-light ">
				<img class="img-fluid mt-5" src="img/book-bookmark-icon_34486.png" alt="Logo" style="width:90px;">
				<div><h1>Librería 3J</h1></div>
				
				 <div class="botones">
				  <a href="usuario.php"><button class="boton1">Perfil</button></a>
				 </div>
				
				<div class="botones">
				 <a href="libros.php"><button class="boton1">Todos los libros</button></a>
				 </div>

			</div>
			 
			<div class="col-sm-9 ">
				<div class="row mx-auto">
					<div class="secciones container text-center">
						<h2>Libros de terror</h2>
					</div>
					<div class="col-3 " style="margin-left: 8rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/casa_infernal.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">La casa infernal</p>	
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/it.gif" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">IT</p>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/doctor_sueño.gif" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Doctor Sueño</p>	
						  </div>
						</div>
					</div>
				</div>
				<div class="row mx-auto">
				<div class="secciones container text-center">
					<h2>Libros de Romance</h2>
				</div>
					<div class="col-3"  style="margin-left: 8rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/agua_chocolate.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Agua con chocolate</p>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/amor_tiempos_colera.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Amor en tiempos de cólera</p>	
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/bajo_misma_estrella.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Bajo la misma estrella</p>	
						  </div>
							</div>
					</div>
				</div>
				<div class="row mx-auto">
				<div class="secciones container text-center">
					<h2>Libros de Ciencia Ficción</h2>
				</div>
					<div class="col-3"  style="margin-left: 8rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/juego_ender.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">El juego de Ender</p>	
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/soy_leyenda.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Soy Leyenda</p>						
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/yo_robot.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Yo, Robot</p>	
						  </div>
						</div>
					</div>
				</div>

			</div>
		  </div>
		</div>
		<div class="container-fluid text-center mt-5"> 
		<a href="libros.php"><button class="boton2">Pedir un Libro</button></a>
		</div>
	</main>
	
	 <footer class="bg-dark py-4 mt-5">
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