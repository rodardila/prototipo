<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Certificado Uso de Suelo</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/principal.estilo.css">
</head>
<body>
	<img src="html/pto.png" class="logo">
	<div class="solicitud">

		<h2 class="titulo">Certificado Uso de Suelo</h2>
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<a href="cerrar.php" class="cerrar">Cerrar sesión</a>
			<h3 class="subtitulo">Crear Solicitud</h3>
			<input type="text" name="nombre_establecimiento" class="form-control" name="nombre_establecimiento" placeholder="Ingrese el nombre del negocio">
			<input type="text" name="direccion" class="form-control" name="direccion" placeholder="Ingrese la direccion del negocio">
			<select name="razon" class="form-control">
			<option value="1">Seleccione una razón social</option>
			<option value="2">Venta de Abarrotes</option>
			<option value="3">Venta de Bebidas Alcohólicas y/o Tabaco</option>
			<option value="4">Venta de Textiles</option>
			<option value="5">Venta de Comidas Servidas</option>
			<option value="6">Distribucion de Combustible</option>
			</select>
			<select name="zona" class="form-control">
			<option value="1">Seleccione el barrio donde esta ubicado</option>
			<option value="2">Centro</option>
			<option value="3">Puerto</option>
			<option value="4">Chipre</option>
			<option value="5">El Hoyo</option>
			<option value="6">Paso Nivel</option>
			<option value="7">La Malena</option>
			</select>
			<input type="text" name="telefono" class="form-control" placeholder="Ingrese el número telefónico del solicitante">

			<input type="submit" name="solicitud" value="Solicitar" class="btn btn-primary">
			<br>
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
			<br>
		</form>
		
	</div>
</body>
</html>