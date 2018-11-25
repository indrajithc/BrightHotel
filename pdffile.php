<form method="POST" action="admreportgen.php">
<?php
require ("fpdf/fpdf.php");
$pdf=new FPDF();

var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont("Arial","","20");
$pdf->Cell(0, 10,"Booking details",1,1,"C");
$pdf->Cell(0, 10,"DETAILS" ,1,1,"C");

$pdf->Output();
?>
</form>
