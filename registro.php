<?php session_start();

if(isset($_SESSION['usuario'])){
	header('Location: index.php');
}

$errores = '';
$success = '';
$conexion = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = strtolower($_POST['nombre']);
	$apellido = strtolower($_POST['apellido']);
	$correo = strtolower($_POST['correo']);
	$cedula = strtolower($_POST['cedula']);
	$contraseña = $_POST['contraseña'];
	$contraseña1 = $_POST['contraseña1'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese su nombre! <br />';
	}

	if (!empty($apellido)) {
		$apellido = trim($apellido);
		$apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese su apellido! <br />';
	}

	if (!empty($cedula)) {
		$cedula = trim($cedula);
		$cedula = filter_var($cedula, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, ingrese su número de cedula! <br />';
	}

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
	} else {
		$errores .= '¡Por favor, ingrese su contraseña! <br />';
	}

	if (!empty($contraseña1)) {
		$contraseña1 = trim($contraseña1);
		$contraseña1 = filter_var($contraseña1, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '¡Por favor, vuelva a escribir su contraseña! <br />';
	}

	if ($contraseña!=$contraseña1) {
		$errores .= '¡La contraseña no coincide!, vuelva a intentarlo.';
	}

	if (isset($_POST['sexo'])){
		$sexo = $_POST['sexo'];
	} else {
		$errores .= '¡Por favor, seleccione su género! <br />';
	}

	try {

		$conexion = new PDO('mysql:host=Localhost;dbname=login_practica', 'root', '');
	} 	catch (PDOException $e) {
			echo "Error: ". $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE cedula = :cedula');
		$statement->execute(array(':cedula' => $cedula));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= 'El usuario ya ha sido registrado!';
		}

	$contraseña = hash('sha512', $contraseña);
	$contraseña1 = hash('sha512', $contraseña1);

	if ($errores == '') {
		
		$statement = $conexion->prepare('INSERT INTO usuarios (cedula, nombre, apellido, contrasena, sexo, correo) VALUES (:cedula, :nombre, :apellido, :contrasena, :sexo, :correo)');
		$statement->execute(array(':cedula' => $cedula, ':nombre' => $nombre, ':apellido' => $apellido, ':contrasena' => $contraseña, ':sexo' => $sexo, ':correo' => $correo));


	$success .= 'Usuario Registrado Correctamente';

	header('Location: login.php');
	}

}
require 'html/registro.view.php';

?>