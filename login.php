<?php
	
	session_start();
		
	session_destroy();
	

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
<link href="bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles -->
<link href="css/main_style.css" rel="stylesheet">
	
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@800&display=swap" rel="stylesheet">

</head>
<body>
	
  <div class="agregar-div container bg-light text-center mt-5 mb-3 p-2">
	<header>
		<h1>LIBRERÍA 3J</h1>
	</header>
	
	<div class="mt-4">
	<form method="post" action="vrf_login.php">	
		<div class="mt-2">
   		<label class="mt-2">Usuario:</label><br>
    	<input class="mt-2" type="text" placeholder="Ingrese su nombre" name="username" >
  		</div>
		<div class="mt-2">
    	<label class="mt-2">Contraseña:</label><br>
    	<input class="mt-2" type="password" placeholder="Ingrese su contraseña" name="password" required>
  		</div>
		<br>
		<div class="mt-3"><input class="boton1" type="submit"  value="Ingresar" name="submit"></div>
		</form>
	</div>
	
	<main>
		<div class="mt-5 mb-4">
		<p class="mt-3 mb-3">¿No eres un usuario?</p>
		<a href="registro.php"><button class="boton1">Regístrate Aquí</button></a>
		</div>
	</main>
</div>	
	<footer>
	
	</footer>
	
 <!-- Bootstrap core JavaScript -->
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/bootstrap/js/bootstrap.js"></script>

</body>

</html>


