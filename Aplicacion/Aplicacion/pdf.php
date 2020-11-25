<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        //$this->Image('logo.png', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 10,utf8_decode($_POST['titulo']), 0, 0, 'C');

        $this->Ln();
        $this->Ln();
        $this->Ln();
        //$this->Image('../images/'. $_POST['imagen'], 30, 30, 150,75, 'png');
        // Salto de línea
        $this->Ln(20);
        $this->Ln(20);
        $this->Ln(20);
        $this->Ln(20);
        $this->SetFont('Arial', '', 11);
        $this->Cell(90, 10, utf8_decode('Precio: ' . $_POST['precio'] . ' euros'), 0, 0, 'L', 0);
        $this->Ln(10);
        $this->Cell(90, 10, utf8_decode('Habitaciones: ' . $_POST['habitaciones']), 0, 0, 'L', 0);
        $this->Ln(10);
        $this->Cell(90, 10, utf8_decode('Telefono: ' . $_POST['telefono']), 0, 0, 'L', 0);
        $this->Ln(10);
        $this->Cell(90, 10,utf8_decode('Distancia al Montessori: ' . $_POST['distancia']), 0, 0, 'L', 0);
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(90, 10, utf8_decode('Descripcion:'));
        $this->Ln(10);
        $this->SetFont('Arial', '', 11);
        $this->MultiCell(190, 10, utf8_decode($_POST['descripcion']));
        

    }



    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->SetRightMargin(15);

    
$pdf->Output();
?>