<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Certificado Uso de Suelo</title>
		<link rel="stylesheet" type="text/css" href="css/pdf.estilo.css">		
	</head>
	<body>
		<img src="html/pto.png" class="logo">
		<div class="contenedor">
		<div class="documento">
		<h5 align="left">Numero de Solicitud N° <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['id'];
	}

	

?></h5>
		<br>
		<br>
		<h4 align="center">LA ALCALDIA MUNICIPAL DE PUERTO BERRIO, LA SECRETARIA DE PLANEACION E INFRAESTRUCTURA Y LA JEFATURA DE URBANISMO</h4>

		<br>
		<br>
		<br>
		<br>


		<h4 align="center"><strong>CERTIFICA QUE:</strong></h4>

		<br>
		<br>
		<br>
		<br>

		<p align="justify">El establecimiento <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['nombre'];
	}

	

?>, ubicado en la dirección <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['direccion'];
	}

	

?>, de la zona <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['zona'];
	}

	

?>.
Que tiene como razón social <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['razon'];
	}

	

?>, <?php

$usuario = $_SESSION['usuario'];

try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}

$statement = $conexion->prepare('SELECT * FROM solicitudes ORDER BY id DESC LIMIT 1');
$statement->execute(array(':usuario' => $usuario ));
$resultado = $statement->fetchAll();
	foreach ($resultado as $fila) {
		echo $fila['factibilidad'];
	}

	

?>, para desarrollar su actividad comercial en el municipio de Puerto Berrío, Antioquia.</p>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<p align="center">
			Este documento se expide el día <?php echo $fecha=strftime( "%d-%m-%Y", time() ); ?>
		</p>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p align="center">DANIEL STEVEN GONZALEZ LONDOÑO</p>
		<p align="center">Jefe Urbanismo</p>
	</div>
	</div>
	</body>
</html>