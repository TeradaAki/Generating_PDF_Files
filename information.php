<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,15,'Name: Aki Garcia, Terda', 0, 1);
$pdf->Cell(40,15,'Program: CCS', 0, 1);
$pdf->Cell(40,15,'Email Address: terada.aki@auf.edu.ph', 0, 1);
$pdf->Cell(40,15,'Student Number: 18-1651-396', 0, 1);
$pdf->Output();
?>