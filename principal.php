<?php session_start();

$usuario = $_SESSION['usuario'];

if(isset($_SESSION['usuario'])){
	$errores = '';
	$success = '';
	$factibilidad = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {		
	$nombre_establecimiento = strtolower($_POST['nombre_establecimiento']);
	$direccion = strtolower($_POST['direccion']);
	$razon = strtolower($_POST['razon']);
	$zona = strtolower($_POST['zona']);
	$telefono = strtolower($_POST['telefono']);

	if (!empty($nombre_establecimiento)) {
		$nombre_establecimiento = trim($nombre_establecimiento);
		$nombre_establecimiento = filter_var($nombre_establecimiento, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese el nombre del establecimiento! <br />';
	}

	if (!empty($direccion)) {
		$direccion = trim($direccion);
		$direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese la direccion del establecimiento! <br />';
	}

	if ($zona=='1'){
		$errores .= '¡Por favor, seleccione una una zona de ubicacion! <br />';
	}

	switch ($razon) {
		case '1':
			
			$errores .= '¡Por favor, seleccione una razón social! <br />';
			break;
		
		case '2':
			$razon = 'Venta de Abarrotes';
			if ($zona) {
				$factibilidad = 'ES FACTIBLE';
			} else {
				$factibilidad = 'NO ES FACTIBLE';
			}

			break;

		case '3':
			$razon = 'Venta de Bebidas Alcohólicas y/o Tabaco';
			if ($zona == '2' || $zona == '3') {
				$factibilidad = 'ES FACTIBLE';
			} else {
				$factibilidad = 'NO ES FACTIBLE';
			}

			break;

		case '4':
			$razon = 'Venta de Textiles';
			if ($zona) {
				$factibilidad = 'ES FACTIBLE';
			} else {
				$factibilidad = 'NO ES FACTIBLE';
			}

			break;

		case '5':
			$razon = 'Venta de Comidas Servidas';
			if ($zona) {
				$factibilidad = 'ES FACTIBLE';
			} else {
				$factibilidad = 'NO ES FACTIBLE';
			}

			break;

		case '6':
			$razon = 'Distribucion de Combustible';
			if ($zona == '3' || $zona == '6' || $zona == '7') {
				$factibilidad = 'ES FACTIBLE';
			} else {
				$factibilidad = 'NO ES FACTIBLE';
			}

			break;

		default:
				$factibilidad = 'NO ES FACTIBLE';
			break;
	}

	switch ($zona) {
		case '1':
			break;
		case '2':
			$zona ='Centro';
			break;
		case '3':
			$zona ='Puerto';
			break;
		case '4':
			$zona ='Chipre';
			break;
		case '5':
			$zona ='El Hoyo';
			break;
		case '6':
			$zona ='Paso Nivel';
			break;
		case '7':
			$zona ='';
			break;
		
	}

	if (!empty($telefono)) {
		$telefono = trim($telefono);
		$telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese el telefono del solicitante! <br />';
	}

	try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	} catch (PDOException $e) {
		echo "Error: ". $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM solicitudes WHERE nombre = :nombre LIMIT 1');
		$statement->execute(array(':nombre' => $nombre_establecimiento));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= 'La solicitud del negocio con nombre ' . $nombre_establecimiento .' ya ha sido realizada';
		}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO solicitudes (id, nombre, direccion, razon, zona, telefono, factibilidad, usuario) VALUES (null, :nombre, :direccion, :razon, :zona, :telefono, :factibilidad, :usuario)');
		$statement->execute(array(':nombre' => $nombre_establecimiento, ':direccion' => $direccion, ':razon' => $razon, ':zona' => $zona, ':telefono' => $telefono, ':factibilidad' => $factibilidad, ':usuario' => $usuario));


	}

	$success .= 'Solicitud Registrada Correctamente';

		header('Location: pdf.php');
}


	require 'html/principal.view.php';

} else{
	header('Location: index.php');
}

?>