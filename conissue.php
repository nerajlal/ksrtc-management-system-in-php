<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$y=$obj->conissue($key);
$smartyObj->assign("view1",$y);
$pageWidth = 210;
$pageHeight = 297;
if(!empty($_POST['submit']))
 {
 	$a=trim($_POST['student_name']);
	$b=trim($_POST['addr']);
	$c=trim($_POST['gender']);
	$d=trim($_POST['date_of_birth']);
	$e=trim($_POST['institution']);
	$f=trim($_POST['source']);
	$g=trim($_POST['dest']);
	$h=trim($_POST['month']);
 	 $no=rand('10000000','99999999');
	 $date=date('Y-m-d');
    require("fpdf/fpdf.php");
	$pdf=new FPDF('P','mm');
	$pdf->AddPage();
	$pdf->SetFont("Arial","",11);
	$pdf->Cell(0, 0,"[FORM 13 C]", 0, 0);
	
	$pdf->Rect(5, 12, 200, 280, 'D'); //For A4
	$pdf->SetFont("Arial","b",12);
	$pdf->SetFont("Arial","b",10);
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');

$pdf->Cell(20,05,"      ",0,1);
$pdf->Cell(20,05,"      ",0,1);
$pdf->Cell(20,05,"      ",0,1);
	$pdf->Cell(20,05,"                                                                   GOVERNMENT OF KERALA                 ",0,1);

$pdf->Cell(20,05,"                                                                             PAYMENT BILL                 ",0,1);
$pdf->Line(83,50,121,50);
    $pdf->Cell(20,05,"

    			No.		{$no}",0,0);
 $pdf->Cell(0,05,"                                                                                                                       Date: {$date}          ",0,1);
$pdf->Cell(2,05," 				",0,1);
$pdf->Cell(20,05,"					",0,1);
$pdf->Cell(20,05," 			",0,1);
 $pdf->Rect(10, 80, 190, 128, 'D'); 
$pdf->Line(100,80,100,208);
	$pdf->Cell(0,15,"    ",0,1,'C');
	$pdf->Cell(20,10,"Name of person",0,0);
	$pdf->Line(10,95,200,95);
	$pdf->Cell(20,10," 

                                                                           {$a}",0,1);
// $pdf->Line(5,60,205,60);
	$pdf->Cell(20,10,"Address",0,0);
	$pdf->Line(10,105,200,105);
	$pdf->Cell(20,10,"


                                                                          {$b}",0,1);
	$pdf->Cell(20,10,"Gender",0,0);
	$pdf->Line(10,115,200,115);
	$pdf->Cell(20,10,"                                                                                {$c}",0,1);
	$pdf->Cell(20,10,"Date Of Birth",0,0);
	$pdf->Line(10,125,200,125);
	$pdf->Cell(20,10,"                                                                                {$d}",0,1);
	$pdf->Cell(20,10,"Institution",0,0);
	$pdf->Line(10,135,200,135);
	$pdf->Cell(20,10,"                                                                                {$e}",0,1);
	$pdf->Cell(20,10,"Source",0,0);
	$pdf->Line(10,145,200,145);
	$pdf->Cell(20,10,"                                                                                {$f}",0,1);
	$pdf->Cell(20,10,"Destination",0,0);
	$pdf->Line(10,155,200,155);
	$pdf->Cell(20,10,"                                                                                {$g}",0,1);
	$pdf->Cell(20,10,"Month",0,0);
	$pdf->Line(10,165,200,165);
	$pdf->Cell(20,10,"                                                                                {$h}",0,1);
	$pdf->Cell(20,10,"Date 0f issue",0,0);
	$pdf->Line(10,195,200,195);
	$pdf->Cell(20,10,"                                                                                {$date}",0,1);
	// $pdf->Cell(20,10,"Designation of the issuing officer",0,0);
// 	// $pdf->Line(10,225,200,225);
// 	$pdf->Cell(20,10,"ATO",0,1);
// 	$pdf->Cell(20,10,"",0,1);
	
// 	$pdf->SetFont("Arial","",9);
// 	$pdf->Cell(20,05,"This certificate is issued based on the details given in application",0,1);

// $pdf->Cell(20,05,"period three years from the date of issue.",0,1);
// $pdf->SetFont("Arial","b",9);
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Cell(20,05,"Security Code:7DHV4",0,0);
// $pdf->Cell(0,05,"Signature valid",0,1);
// $pdf->Cell(2,05,"Date:{$date}",0,1);
// $pdf->Ln();
// $pdf->SetFont("Arial","",9);
// 	$pdf->Cell(20,05,"1. This digitally signed document is legally valid as per the Information Technology(IT)Act, 2000.",0,1);
// 	$pdf->SetFont("Arial","",9);
// 	$pdf->Cell(20,05,"2. Authenticity of this document can be verified from http://edistrict.kerala.gov.in/ and submitting the Certificate Number.",0,1);
// 	 $pdf->Image("fpdf/kerala.png",85,15,35);
//      $pdf->Image("fpdf/qrcode.png",17,25,20);
//      $pdf->Image("fpdf/rupee.png",13.5,65.8,04);
//      $pdf->Image("fpdf/civil.png",55,125,95);
$pdf->output();
}
$smartyObj->display('atosubheader.tpl');
	$smartyObj->display('conissue.tpl');
	$smartyObj->display('footer.tpl');
	?>
