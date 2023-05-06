<?php
require('fpdf/fpdf.php');

// Create a new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set the fill color to red
$pdf->SetFillColor(255, 0, 0);

// Draw a rectangle with the fill color
$pdf->Rect(10, 10, 50, 50, 'F');

// Add text to the PDF document
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello, World!');

// Output the PDF document
$pdf->Output();
?>
