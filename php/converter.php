<?php
require_once 'tcpdf/tcpdf.php';

$uploads_dir = 'uploads/arquivos/';
$pdf = new TCPDF();

foreach ($_FILES['arquivos']['tmp_name'] as $file) {
    $filename = $_FILES['arquivos']['name'];
    move_uploaded_file($file, $uploads_dir . $filename);
    // Converter arquivo para PDF aqui
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, 'Conteúdo do arquivo ' . $filename, 0, 1, 'C');
}

$pdf->Output('arquivos.pdf', 'I');
?>