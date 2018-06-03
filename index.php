<?php session_start();

	if ($_SESSION['usuario']) {	header('Location: principal.php');
	} else {
		header('Location: login.php');
	}	

?>
