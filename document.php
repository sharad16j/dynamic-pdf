<?php


	$name=$_POST['name'];
	$stream=$_POST['stream'];
	$email=$_POST['email'];
	$phone=$_POST['number'];
	$studentID=$_POST['studentID'];
	$regno=$_POST['regno'];
	$rollno=$_POST['rollno'];
	$year=$_POST['year'];
	$semester=$_POST['semester'];
	$rupees=$_POST['rupees'];
	$cb1=$_POST['cb1'];
	$cb2=$_POST['cb2'];
	$cb3=$_POST['cb3'];
	$cb4=$_POST['cb4'];
	$cb5=$_POST['cb5'];
	$cb6=$_POST['cb6'];

	$payvia=$_POST['payvia'];
	if($payvia =="#chkdd")	{
	$num=$_POST['num'];
	$bank=$_POST['bank'];
	$branch=$_POST['branch'];
	$date=$_POST['date'];}
	$comments=$_POST['Comments'];

require('fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',13);

$pdf->Cell(200,5,'STUDENTS COPY',0,1,'C');
$pdf->Cell(0,5,'xxxxxxxxxxxxxx ENGINEERING COLLEGE',0,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,'TECHNOCITY,PANCHPOTA,GARIA,KOLKATA-700152,PHONE:xxxxxxxxxxxxxx',2,1,'C');
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,5,'MONEY RECEIPT',0,1,'C');
$pdf->Cell(0,5,'Receipt No. :  ',0,1,'L');
$pdf->Cell(170,-6,'Date:' ,0,1,'R');
$pdf->ln(8);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,"Student's Name :- {$name}",0,1,'L');
$pdf->Cell(0,8,"Phone No. :- {$phone}   ",0,1,'L'); 
$pdf->Cell(180,-9," Student's ID :- {$studentID}",0,1,'R');
$pdf->ln(6); 
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,8,"MAKAUT Registration No. :- {$regno} ",0,1,'L');
$pdf->Cell(180,-8,"MAKAUT Roll No :- {$rollno}",0,1,'R');
$pdf->ln(6);
$pdf->Cell(0,8,"Stream : {$stream} ",0,1,'L');         
$pdf->Cell(180,-6,"Year :   {$year}",0,1,'R'); 
$pdf->ln(4);
$pdf->Cell(0,6,"Semester : {$semester}",0,1,'L');
$pdf->Cell(0,6,"Email : {$email}",0,1,'L');
$pdf->Cell(0,6,"Received a sum of: {$rupees}",0,1,'L');
$pdf->ln(4);
$pdf->Cell(0,10,"Fees Details ",1,1,'L');
$pdf->Cell(0,-10,"Amount(Rs)  ",1,1,'C');
$pdf->Cell(0,10,"",1,1,'R');

$pdf->Cell(0,10,"MAKAUT Development Fees   ",1,1,'L');
$pdf->Cell(0,-10,"{$cb1}  ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"MAKAUT Registration fees     ",1,1,'L');
$pdf->Cell(0,-10,"{$cb2} ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"MAKAUT Exam Fees   ",1,1,'L');
$pdf->Cell(0,-10,"{$cb3}  ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"MAKAUT PPR/PPS   ",1,1,'L');
$pdf->Cell(0,-10,"{$cb4}  ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"MAKAUT Back Log   ",1,1,'L');
$pdf->Cell(0,-10,"{$cb5} ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"Other  ",1,1,'L');
$pdf->Cell(0,-10,"{$cb6}  ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
$pdf->Cell(0,10,"Total   ",1,1,'L');
$total=$cb1+$cb2+$cb3+$cb4+$cb5+$cb6 ;
$pdf->Cell(0,-10,"{$total}  ",0,1,'C');
$pdf->Cell(0,10,"",1,1,'R');
if($payvia =="chkdd")	
{
	$pdf->ln(8);
	$pdf->Line(80,173,80,212);
	$pdf->Cell(0,10,"Cheque/DD no  ",1,1,'L');
	$pdf->Cell(0,-10,"$num ",0,1,'C');
	$pdf->Cell(0,10,"",1,1,'R');
	$pdf->Cell(0,10,"Issuing Bank",1,1,'L');
	$pdf->Cell(0,-10,"{$bank} ",0,1,'C');
	$pdf->Cell(0,10,"",1,1,'R');
	$pdf->Cell(0,10,"Bank Branch",1,1,'L');
	$pdf->Cell(0,-10,"{$branch}  ",0,1,'C');
	$pdf->Cell(0,10,"",1,1,'R');
	$pdf->Cell(0,10,"Date ",1,1,'L');
	$pdf->Cell(0,-10,"{$date}  ",0,1,'C');
	$pdf->Cell(0,10,"",1,1,'R');
	$pdf->Cell(0,-50,"",0,1,'C');
}


$pdf->Line(80,85,80,165);




$pdf->Cell(0,90,"{$comments}",0,1,'L');

$pdf->Line(10,250,200,250);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"Note: i) The receipt is for the encashment of DD/cheque ",0,1,'L');
$pdf->Cell(0,5,"ii)The amount Due must be paid within the DUE DATE  to avoid suspension of his/her name from Rolls ",0,1,'L');
$pdf->Cell(0,5,"and incidental loss of percentage and other complication ",0,1,'L');
$pdf->Cell(0,5,"iii)Fees once paid would not be refunded at any cost",0,1,'L');
$pdf->output();

?> 