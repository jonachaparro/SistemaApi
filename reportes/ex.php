<?php
include 'Conexion.php';
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Listado de servicios',0,1,'C');
	$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','reparto');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'select C.idUsuario as Usuario, 
						  C.nombre as Nombre, 
						  B.nombreProducto as Producto, 
						  B.descripcionProducto as Descripcion, 
						  A.idRepartidor as Repartidor, 
						  A.nombre as Nombre 
				   from   repartidor A inner join servicio B on A.idRepartidor = B.idRepartidor 
									   inner join usuario C on C.idUsuario = B.idUsuario');
$pdf->Output();
?>
