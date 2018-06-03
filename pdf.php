<?php session_start();

if(isset($_SESSION['usuario'])){
	
require_once('mpdf/mpdf.php');

ob_start();
require 'pdfv.php';
$html = ob_get_clean();


$html2pdf = new mPDF('c','A4');
$css = file_get_contents('css/pdf.estilo.css');
$html2pdf->writeHTML($css, 1);
$html2pdf->writeHTML($html);
$html2pdf->output('uso_de_suelo.pdf','D');

} else {
header('Location: index.php');
}

?>