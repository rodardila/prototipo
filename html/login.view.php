<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario Usuario</title>
</head>
<body>
	<img src="html/pto.png" class="logo">
	<div class="login">
		<h2 class="titulo">Inicio de Sesión</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" id="correo" class= "form-control" name="correo" placeholder="Ingrese su correo aquí | ej@ej.com" value="">
			<input type="password" id="contraseña" class= "form-control" name="contraseña" placeholder="Ingrese su contraseña aquí" value="">
			<a href="registro.php">¿No tienes cuenta?</a>

			<br>
			<input type="submit" name="submit" value="Iniciar Sesion" class="btn btn-primary">
			<br>		

		</form>
		
	</div>
</body>
</html>