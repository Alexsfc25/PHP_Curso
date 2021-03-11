<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//RECOGER LA VISTA QUE SE VA A IMPRIMIR
ob_start();
require_once './pdf_generar.php';
$html = ob_get_clean();

//ESCRIBIR EL DOCUMENTO
$html2pdf->writeHTML($html);
$html2pdf->output("pdf_generado.pdf");
