<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Arial-Black','','Arial_B.php');
$pdf->AddFont('Arial-Narrow','','Arial_N.php');
$pdf->AddFont('Arial-Narrow-Special','','Arial_NS.php');
$pdf->AddFont('Arial-Special','','Arial_S.php');


$pdf->AddPage();
$pdf->SetFont('Arial-Black','',35);
$pdf->Write(10,'"The greatest glory in living lies not in never falling, but in rising every time we fall." -Nelson Mandela');
$pdf->Ln(20);

$pdf->SetFont('Arial-Narrow','',35);
$pdf->Write(10,'"The way to get started is to quit talking and begin doing." -Walt Disney');
$pdf->Ln(20);

$pdf->SetFont('Arial-Narrow-Special','',35);
$pdf->Write(10,'"If life were predictable it would cease to be life, and be without flavor." -Eleanor Roosevelt');
$pdf->Ln(20);

$pdf->SetFont('Arial-Special','',35);
$pdf->Write(10,'"If you set your goals ridiculously high and its a failure, you will fail above everyone elses success." -James Cameron');
$pdf->Ln(20);

$pdf->Output();
?>