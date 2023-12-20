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
	<main>
	<div class="mt-4 mb-4">
	<h3>Ingrese los  siguientes datos</h3>
	<form method="post" action="vrf_registro.php">	
		<div>
   		<label class="mt-3" >Nombre:</label><br>
    	<input type="text" placeholder="Ingrese su nombre" name="username" required">
  		</div>
		<div>
   		<label class="mt-3">Cédula de identificación:</label><br>
    	<input type="text" placeholder="Ingrese su número de identificación" name="ci" required pattern="[0-9]">
  		</div>
		<div>
   		<label class="mt-3">Dirección:</label><br>
    	<input type="text" placeholder="Ingrese su dirección" name="direccion" required>
  		</div>
		<div>
   		<label class="mt-3">Teléfono:</label><br>
    	<input type="text" placeholder="Ingrese su número de teléfono" name="telf" required>
  		</div>
		<div>
    	<label class="mt-3">Contraseña:</label><br>
    	<input class="booton1" type="password" placeholder="Ingrese su contraseña" name="password" required>
  		</div>
		<br>
		<div class="mt-3">
			<input class="boton1" type="submit" value="Registrar" name="submit">
		</div>
		</form>
		<div class="p-3 mt-3">
		<a href="login.php"><button class="boton1">Cancelar</button></a>
		</div>
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