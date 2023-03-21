<?php
include_once 'RechercheInformation.php';
$titre=iconv('UTF-8','windows-1252',$desInformations['titre']);
$prix=$desInformations['prix'].chr(128);
$lieu=iconv('UTF-8','windows-1252',$desInformations['ville']);
$surface=iconv('UTF-8','windows-1252',$desInformations['surfBien'].' m²');
$desc=iconv('UTF-8','windows-1252',$desInformations['descript']);
$id=$desInformations['idBien'];

ob_start();
require('fpdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$titre,0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(37,10,'au prix de : ',0);
$pdf->Cell(40,10,$prix,0,1);
$pdf->Cell(37,10,'localisation : ',0);
$pdf->Cell(40,10,$lieu,0,1);
$pdf->Cell(37,10,'surface de : ',0);
$pdf->Cell(40,10,$surface,0,1);
$pdf->Image(('../img/img-biens/'.$id.'-1.jpg'),100,20,90,0);
$pdf->Ln(40);
$pdf->SetFont('Arial','',13);
$pdf->Write(10,$desc);
$pdf->Output();
ob_flush(); 
?>