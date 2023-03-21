<?php
include_once '../autres/RechercheInformation.php';
$titre=$desInformations['titre'];

ob_start();
require('../autres/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$titre);
$pdf->Output();
ob_flush(); 
?>