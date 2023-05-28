<?php

    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf ->AddPage();
    $pdf ->SetFont('Arial','B',18);
    $pdf ->Cell(60,20,'Hello, Pritam!');
    $pdf ->Output();

?>
