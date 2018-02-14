<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rscuentas="SELECT * from producto order by idProducto";
	$rsC = mysqli_query($cn,$rscuentas);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(45,6,'NOMBRE',1,0,'C',1);
	//$pdf->Cell(70,6,'DESCRIPCION',1,0,'C',1);
	$pdf->Cell(25,6,'CANTIDAD',1,0,'C',1);
	//$pdf->Cell(20,6,'STOCK',1,0,'C',1);
	$pdf->Cell(20,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(35,6,'INGRESO',1,0,'C',1);
	$pdf->Cell(20,6,'MEDIDA',1,0,'C',1);
	$pdf->Cell(20,6,'COSTO',1,0,'C',1);
	$pdf->SetFont('Times','',10);
	while($row = $rsC->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(45,6,utf8_decode($row['nombreProd']),1,0,'C');
		$pdf->Cell(25,6,$row['cantidad'],1,0,'C');
		//$pdf->Cell(20,6,$row['stock'],1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['codigo']),1,0,'C');
		$pdf->Cell(35,6,$row['fecha'],1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['medida']),1,0,'C');
		$pdf->Cell(20,6,$row['costo'],1,0,'C');
	}
	$pdf->Output('');
?>