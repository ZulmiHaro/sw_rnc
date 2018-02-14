<?php 
	require '../plugins/fpdf/fpdf.php';

	class PDF extends FPDF
	{
		
		function header()
		{
			$this->Image('../img/NC-logo.png',5,5,15);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120, 15,'REPORTES', 0, 0,'C');
        	$this->Ln();
		}

		function footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I',8);
			$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
?>