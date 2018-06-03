<?php session_start();

if(isset($_SESSION['usuario'])){
	header('Location: index.php');
}

$errores = '';
$success = '';
$errores2 = '';
$success2 = '';

if (isset($_POST['submit'])) {

	$correo = strtolower($_POST['correo']);
	$contraseña = $_POST['contraseña'];
	
	if (!empty($correo)){
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= '¡Por favor, ingrese un correo válido! <br />';
		}
	}	else {
			$errores .= '¡Por favor, ingrese un correo! <br />';
		}

	if (!empty($contraseña)) {
		$contraseña = trim($contraseña);
		$contraseña = filter_var($contraseña, FILTER_SANITIZE_STRING);
		$contraseña = hash('sha512', $contraseña);
	} else {
		$errores .= '¡Por favor, ingrese su contraseña! <br />';
	}

	try {
		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	} 	catch (PDOException $e) {
			echo "Error: ". $e->getMessage();
		}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena
		');
	$statement->execute(array(
		':correo' => $correo,
		':contrasena' => $contraseña

	));

	$resultado = $statement->fetch();
	
	if ($resultado !== false) {
		$_SESSION['usuario'] = $correo;
		header('Location: index.php');
	} else{
		$errores .= '¡Datos Incorrectos! <br />';
	}
	
}

require 'html/login.view.php'

 ?>