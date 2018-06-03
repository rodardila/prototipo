<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario Usuario</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/registro.estilo.css">
</head>
<body>
	<img src="html/pto.png" class="logo">
	<div class="wrap">

		<h2 class="titulo">Registro de Usuario</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" id="nombre" class= "form-control" name="nombre" placeholder="Ingrese su nombre aquí" value="">
			<input type="text" id="apellido" class= "form-control" name="apellido" placeholder="Ingrese su apellido aquí" value="">
			<input type="text" id="cedula" class= "form-control" name="cedula" placeholder="Ingrese el número de su cédula sin puntos" value="">
			<input type="text" id="correo" class= "form-control" name="correo" placeholder="Ingrese su correo aquí | ej@ej.com" value="">
			<input type="password" id="contraseña" class= "form-control" name="contraseña" placeholder="Ingrese su contraseña aquí" value="">
			<input type="password" id="contraseña1" class= "form-control" name="contraseña1" placeholder="Vuelva a escribir su contraseña aquí" value="">
			<p>
				Seleccione su género:
			</p>
			<input type="radio" name="sexo" value="hombre" placeholder="hombre"> hombre
			<input type="radio" name="sexo" value="mujer" placeholder="mujer"> mujer
			<br>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($success): ?>
				<div class="alert success">
					<p>
					<?php echo $success; ?>
					</p>
				</div>
			<?php endif ?>

			<input type="submit" name="enviar" value="Registrarse" class="btn btn-primary">
			<br>
			<a href="login.php"> ¿Ya tienes cuenta? </a>
		</form>
	
	</div>
</body>
</html>