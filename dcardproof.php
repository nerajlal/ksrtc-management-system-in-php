<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$key1=$_GET['ke'];
$y=$obj->dcardproof($key1);
 $smartyObj->assign("view",$y);
 $pageWidth = 210;
$pageHeight = 297;
if(!empty($_POST['generate']))
 {
	
		
	 $a=$_POST['name'];
	 $b=$_POST['contactno'];
	 $c=$_POST['depot'];
	 $d=$_POST['dcard'];
     $e=$_POST['amount'];
     // $=$_POST['houseno'];
	 $f=$_POST['date'];
	 // $x=$_POST['religion'];
	 // $e=$_POST['subcaste'];
  //    // $=$_POST['adharno']	
  //    $f=$_POST['postoffice'];
	 // $g=$_POST['pincode'];
	 // $h=$_POST['village'];
  //    $i=$_POST['taluk'];
  //    $j=$_POST['district'];
	 // $date=date('Y-m-d');
	 $no=rand('10000000','99999999');
	 $date=date('Y-m-d');
    // $=$_POST['sign'];
	require("fpdf/fpdf.php");
	$pdf=new FPDF('P','mm');
	$pdf->AddPage();
	$pdf->SetFont("Arial","",11);
	$pdf->Cell(0, 0,"        ", 0, 0);

	$pdf->Rect(5, 12, 200, 280, 'D'); //For A4
	$pdf->SetFont("Arial","b",12);
	$pdf->SetFont("Arial","b",10);
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');
	$pdf->Cell(0,5,"    ",0,1,'C');

$pdf->Cell(20,05,"                                                                           ",0,1);
$pdf->Cell(20,05,"                                                                           ",0,1);
$pdf->Cell(20,05,"                                                                           ",0,1);
	$pdf->Cell(20,05,"                                                                   GOVERNMENT OF KERALA                 ",0,1);

$pdf->Cell(20,05,"                                                                             PAYMENT BILL                 ",0,1);
$pdf->Line(82,50,118,50);
$pdf->Cell(20,05,"   Bill No.   {$no}          ",0,0);
$pdf->Cell(0,05,"                                                                                                                       Date: {$date}          ",0,1);
$pdf->Cell(2,05,"               ",0,1);
$pdf->Cell(20,05,"              ",0,1);
$pdf->Cell(20,05,"              ",0,1);
$pdf->Rect(10, 80, 190, 148, 'D'); 
$pdf->Line(100,80,100,228);
	$pdf->Cell(0,15,"    ",0,1,'C');
	$pdf->Cell(20,10,"Name of person",0,0);
	$pdf->Line(10,95,200,95);
	$pdf->Cell(20,10," 

                                                                           {$a}",0,1);
// $pdf->Line(5,60,205,60);
	$pdf->Cell(20,10,"Contact         ",0,0);
	$pdf->Line(10,105,200,105);
	$pdf->Cell(20,10,"


                                                                          {$b}",0,1);
	$pdf->Cell(20,10,"Depot        ",0,0);
	$pdf->Line(10,115,200,115);
	$pdf->Cell(20,10,"                                                                                {$c}",0,1);
	$pdf->Cell(20,10,"D-Card        ",0,0);
	$pdf->Line(10,125,200,125);
	$pdf->Cell(20,10,"                                                                                {$d}",0,1);
	$pdf->Cell(20,10,"Amount        ",0,0);
	$pdf->Line(10,135,200,135);
	$pdf->Cell(20,10,"                                                                                {$e}",0,1);
	// // $pdf->Cell(20,10,"Religion         ",0,0);
	// $pdf->Line(10,145,200,145);
	// $pdf->Cell(20,10,"                                                                       {$x}",0,1);
	// $pdf->Cell(20,10,"Caste         ",0,0);
	// $pdf->Line(10,155,200,155);
	// $pdf->Cell(20,10,"                                                                       {$e}",0,1);
	// $pdf->Cell(20,10,"Postoffice        ",0,0);
	// $pdf->Line(10,165,200,165);
	// $pdf->Cell(20,10,"                                                                       {$f}",0,1);
	// $pdf->Cell(20,10,"Pincode         ",0,0);
	// $pdf->Line(10,175,200,175);
	// $pdf->Cell(20,10,"                                                                       {$g}",0,1);
	// $pdf->Cell(20,10,"Village         ",0,0);
	// $pdf->Line(10,185,200,185);
	// $pdf->Cell(20,10,"                                                                       {$h}",0,1);
	// $pdf->Cell(20,10,"Taluk         ",0,0);
	// $pdf->Line(10,195,200,195);
	// $pdf->Cell(20,10,"                                                                       {$i}",0,1);
	// $pdf->Cell(20,10,"District         ",0,0);
	// $pdf->Line(10,205,200,205);
	// $pdf->Cell(20,10,"                                                                       {$j}",0,1);
	$pdf->Cell(20,10,"Date of issue of bill        ",0,0);
	$pdf->Line(10,215,200,215);
	$pdf->Cell(20,10,"                                                                                {$date}",0,1);
// $pdf->Cell(20,10,"Designation of the issuing officer       ",0,0);
// 	// $pdf->Line(10,225,200,225);
// 	$pdf->Cell(20,10,"                                                                       Village Officer",0,1);
	
	


// $pdf->Cell(20,05,"period three years from the date of issue.",0,1);
// $pdf->SetFont("Arial","b",9);
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Cell(20,05,"Security Code:   7DHV4          ",0,0);
// $pdf->Cell(0,05,"                                                                                                                       Signature valid          ",0,1);
// $pdf->Cell(2,05,"                                                                                                                                              Date:{$date}      ",0,1);
// $pdf->SetFont("Arial","",9);
// 	$pdf->Cell(20,05,"1. This digitally signed document is legally valid as per the Information Technology(IT)Act, 2000.                                                                                           ",0,1);
// 	$pdf->SetFont("Arial","",9);
// 	$pdf->Cell(20,05,"2. Authenticity of this document can be verified from http://edistrict.kerala.gov.in/ and submitting the Certificate Number.                                                                                        ",0,1);
	// $pdf->SetFont("Arial","",9);
	// $pdf->Cell(20,05,"Security code:Alternatively, please call the numbers 155300(from BSNL landline),0471 155300(from BSNL ,mobile),                                                                                          ",0,1);





	// $pdf->Cell(15,10,"                             ",0,0);
	// $pdf->Cell(20,10,"                           ",0,0);
	// $pdf->Cell(20,10,"{$a1}",0,1);
	// $pdf->Cell(15,10,"                             ",0,0);
	// $pdf->Cell(20,10,"                           ",0,0);
	// $pdf->Cell(20,10,"{$a2}",0,1);
	// $pdf->Cell(65,10,"                             ",0,0);
	// $pdf->Cell(20,10,"Authority Name        ",0,0);
	// $pdf->Cell(20,10,"{$f1}",0,1);
	// $pdf->Cell(15,10,"                             ",0,0);
	//$pdf->Cell(20,10,"DOB                ",0,0);
	//$pdf->Cell(20,10,"{$l}",0,1);
	//$pdf->Cell(15,10,"                             ",0,0);
	//$pdf->Cell(20,10,"Voter Id           ",0,0);
	//$pdf->Cell(20,10,"{$m}",0,1);
    //$pdf->Cell(15,10,"                             ",0,0);
	//$pdf->Cell(20,10,"Validity         ",0,0);
	//$pdf->Cell(20,10,"{$n}",0,1);
	/*$pdf->Cell(50,10,"Address         ",1,0);
	$pdf->Cell(50,10,"{$f}",1,1);
	$pdf->Cell(50,10,"Authority Name         ",1,0);
	$pdf->Cell(50,10,"{$f1}",1,1);*/

    //$pdf->Cell(15,10,"                             ",0,0);
	
   //  $pdf->Image("fpdf/kerala.png",85,15,35);
   //   $pdf->Image("fpdf/qrcode.png",17,25,20);
   //   $pdf->Image("fpdf/civil.png",55,125,95);
   // // $pdf->Image("{$k}",85,25,30);
    // $pdf->Image("{$f2}",75,70,30);
  // $pdf->Image("{$f2}",65,90,30);
    
	$pdf->output();
}
	
		$smartyObj->display('pubsubheader.tpl');
		$smartyObj->display('dcardproof.tpl');
		$smartyObj->display('footer.tpl');
			}
?>