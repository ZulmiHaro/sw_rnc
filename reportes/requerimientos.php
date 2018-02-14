<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rsRequerimiento="SELECT producto.nombreProd as Nombre,producto.codigo as Codigo,producto.cantidad as Ingreso,requerimiento_producto.cantidad as Retiro,producto.stock as Stock,requerimiento_producto.fecha as Fecha FROM `requerimiento_producto` 
		INNER JOIN producto on requerimiento_producto.idProducto=producto.idProducto";
	$rsR = mysqli_query($cn,$rsRequerimiento);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(45,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(20,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(25,6,'INGRESO',1,0,'C',1);
	$pdf->Cell(25,6,'RETIRO',1,0,'C',1);
	$pdf->Cell(20,6,'STOCK',1,0,'C',1);
	$pdf->Cell(35,6,'FECHA',1,0,'C',1);
	$pdf->SetFont('Times','',10);
	while($row = $rsR->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(45,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(20,6,$row['Codigo'],1,0,'C');
		$pdf->Cell(25,6,$row['Ingreso'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['Retiro']),1,0,'C');
		$pdf->Cell(20,6,$row['Stock'],1,0,'C');
		$pdf->Cell(35,6,$row['Fecha'],1,0,'C');
	}
	$pdf->Output('');
?>