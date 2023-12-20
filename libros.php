<?php
	require_once "conexion.php";

	//Iniciar la sesión
	session_start();
	if(!$_SESSION){
		header("location:login.php");		
	}

	$id_usuario=$_SESSION['id'];
	$nombre_usuario=$_SESSION['nombre'];

	/*$sql1 = "SELECT * FROM libros WHERE prestado_libro= '1'";
	$result1 = $conn->query($sql1);*/
	
	
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
<link rel="stylesheet" href="alertifyJS/css/alertify.min.css" />
<link rel="stylesheet" href="alertifyJS/css/themes/semantic.min.css" />
<script src="alertifyJS/alertify.min.js"></script>
</head>
<body>
	<header>
		
		<!-- Navbar -->	
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand -->
		  <a href="#" class="navbar-brand ml-5">
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
	
		<main> 
		
				<div class="row" >
					<div class="secciones container text-center">
						<h2>Libros de terror</h2>
					</div>
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/casa_infernal.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">La casa infernal</p>
							<a href="libros.php"><button id="6" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/it.gif" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">IT</p>
							<a href="libros.php"><button id="3" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/doctor_sueño.gif" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Doctor Sueño</p>
							<a href="libros.php"><button id="2" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;" >
						<div class="card" >
						  <a><img class="card-img-top" src="img/resplandor.gif" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">El resplandor</p>	
							<a href="libros.php"><button id="1" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/montaña_locura.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">La montaña de la locura</p>
							<a href="libros.php"><button id="5" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/soy_leyenda.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Soy Leyenda</p>	
							<a href="libros.php"><button id="4" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					
				</div>
			
				<div class="row">
				<div class="secciones container text-center">
					<h2>Libros de Romance</h2>
				</div>
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/agua_chocolate.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Agua con Chocolate</p>
							<a href="libros.php"><button id="9" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/amor_tiempos_colera.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Amor en tiempos de cólera</p>	
							<a href="libros.php"><button id="10" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a href="#"><img class="card-img-top" src="img/bajo_misma_estrella.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Bajo la misma estrella</p>
							<a href="libros.php"><button id="7" class="boton2">Pedir un Libro</button></a>
						  </div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;" >
						<div class="card" >
						  <a><img class="card-img-top" src="img/paseo_recordar.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Un paseo para recordar</p>	
							<a href="libros.php"><button id="8" class="boton2">Pedir un Libro</button></a>
						  </div>
						</div>
					</div>			
				</div>
			
			
				<div class="row">
					<div class="secciones container text-center">
					<h2>Libros de Ciencia Ficción</h2>
				</div>
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/yo_robot.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Yo, Robot</p>
							<a href="libros.php"><button id="15" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/juego_ender.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">El juego de Ender</p>
							<a href="libros.php"><button id="16" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a ><img class="card-img-top" src="img/soy_leyenda.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Soy Leyenda</p>
							<a href="libros.php"><button id="4" class="boton2">Pedir Libro</button></a>
						  </div>
							</div>
					</div>
				</div>
				
				<div class="row">
					<div class="secciones container text-center">
					<h2>Libros de Tecnología</h2>
				</div>
					<div class="col-3" style="margin-left: 11rem; margin-bottom: 1rem;">
						<div class="card" >
						  <a><img class="card-img-top" src="img/Artificial_Intelligence.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Inteligencia Artificial</p>
							<a href="libros.php"><button id="11" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/modern_operative_systems.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Sistemas operativos modernos</p>	
							<a href="libros.php"><button id="14" class="boton2">Pedir Libro</button></a>
						  </div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
						  <a><img class="card-img-top" src="img/Fundamentals_of_Database System.jpg" height="300" alt="Card image"></a>
							<div class="card-body text-center">
							<p class="card-text">Fudamentos de los sistemas de bases de datos</p>
							<a href="libros.php"><button id="13" class="boton2">Pedir Libro</button></a>
						  </div>
							</div>
					</div>
				</div>
		
	</main>
	

	<footer class="bg-dark py-4 mt-5">
		<div class="container" style="padding: 1px;">
		  <p class="mb-2 text-center text-white">Copyright &copy; Librería 3J 2020</p>
		</div>
		<!-- /.container -->
 	 </footer>
	
		
			<!-- Consulta con AJAX -->
		<script type="text/javascript">
			$(function() {
			 $(document).on('click', 'button', function(event) {
				let id = this.id;
				console.log("Se presionó el Boton con Id :"+ id)
				 
				 	$.ajax({
							url: 'agregar_libro.php?var='+id, 
							success: function( data ) {
								//alert( 'El servidor devolvio "' + data + '"' );
								if(data==1){
								   	alert("Libro generado con exito");
	
								   }else{
									   alert("Ya dispone de este libro");
								   }
						} 
					});
			  });
			});
			
	</script>
		

<!-- Bootstrap core JavaScript -->
  <script src="customJS/customjs.js"></script>
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
		
	
	
</body>
		
	
	
</html>