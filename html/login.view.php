<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario Usuario</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.estilo.css">
</head>
<body>
	<img src="html/pto.png" class="logo">
	<div class="login">
		<h2 class="titulo">Inicio de Sesión</h2>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" id="correo" class= "form-control" name="correo" placeholder="Ingrese su correo aquí | ej@ej.com" value="">
			<input type="password" id="contraseña" class= "form-control" name="contraseña" placeholder="Ingrese su contraseña aquí" value="">
			<a href="registro.php">¿No tienes cuenta?</a>

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
			<br>
			<input type="submit" name="submit" value="Iniciar Sesion" class="btn btn-primary">
			<?php if (!empty($errores2)): ?>
				<div class="alert error">
					<?php echo $errores2; ?>
				</div>
			<?php elseif($success2): ?>
				<div class="alert success">
					<p>
					<?php echo $success2; ?>
					</p>
				</div>
			<?php endif ?>
			<br>		

		</form>
		
	</div>
</body>
</html>