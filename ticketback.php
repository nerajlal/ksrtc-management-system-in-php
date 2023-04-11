<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$t=$obj->ticketback($key);
$smartyObj->assign("view",$t);
$pageWidth = 210;
$pageHeight = 297;
if(!empty($_POST['submit']))
 {
 	 $a=$_POST['month'];
	 $b=$_POST['distance'];
	 $d=$_POST['inst'];
	 $e=$_POST['amount'];
	 $no=rand('10000000','99999999');
	 $date=date('Y-m-d');
	require("fpdf/fpdf.php");
	$pdf=new FPDF('P','mm');
	$pdf->AddPage();
	$pdf->SetFont("Arial","",11);
	$pdf->Cell(0, 0,"                                                                          [Validated Ticket]", 0, 0);
	
	$pdf->Rect(5, 12, 200, 280, 'D'); //For A4
	$pdf->SetFont("Arial","b",12);
	$pdf->SetFont("Arial","b",10);
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');

$pdf->Cell(20,05,"                                                                           ",0,1);
$pdf->Cell(20,05,"                                                                           ",0,1);
$pdf->Cell(20,05,"                                                                           ",0,1);
	$pdf->Cell(20,05,"                                                                   Kerala State Road Transport Corporation                 ",0,1);

$pdf->Cell(20,05,"                                                                        Concession Ticket                 ",0,1);
$pdf->Line(83,50,121,50);
    $pdf->Cell(20,05,"   No.   {$no}          ",0,0);
 $pdf->Cell(0,05,"                                                                                                                   Date: {$date}          ",0,1);
$pdf->Cell(2,05,"               ",0,1);
$pdf->Cell(20,05,"  This Ticket is issued for the use of the student.This Ticket is not available by Deluxe,Express,Fast Passanger and any social class passenger                                                                                    ",0,1);

$pdf->Rect(10, 80, 190, 128, 'D'); 
$pdf->Line(100,80,100,208);
	$pdf->Cell(0,15,"    ",0,1,'C');
	$pdf->Cell(20,10,"Month of Validity",0,0);
	$pdf->Line(10,95,200,95);
	$pdf->Cell(20,10,"                                                                       {$a}",0,1);
	$pdf->Cell(20,10,"Distance         ",0,0);
	$pdf->Line(10,105,200,105);
	$pdf->Cell(20,10,"                                                                       {$b}",0,1);
	$pdf->Cell(20,10,"Institution       ",0,0);
	$pdf->Line(10,115,200,115);
	$pdf->Cell(20,10,"                                                                       {$d}",0,1);
	$pdf->Cell(20,10,"Total Amount         ",0,0);
	$pdf->Line(10,125,200,125);
	$pdf->Cell(20,10,"                                                                       {$e}",0,1);
	$pdf->Cell(20,10,"Date 0f issue of Concession        ",0,0);
	$pdf->Line(10,195,200,195);
	$pdf->Cell(20,10,"                                                                       {$date}",0,1);
	$pdf->Cell(20,10,"",0,1);
	
	$pdf->SetFont("Arial","",9);
	$pdf->SetFont("Arial","b",9);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(20,05,"Security Code:   7DHV4          ",0,0);
$pdf->Cell(0,05,"                                                                                                                       Signature valid          ",0,1);
$pdf->Cell(2,05,"                                                                                                                                              Date:{$date}      ",0,1);
$pdf->Ln();
$pdf->SetFont("Arial","",9);
	$pdf->SetFont("Arial","",9);
	$pdf->output();
}
$smartyObj->display('atosubheader.tpl');
$smartyObj->display('ticketback.tpl');
$smartyObj->display('footer.tpl');
// }

// else
// {	
// 	Header("location:login.php");
// }
?>

		
		