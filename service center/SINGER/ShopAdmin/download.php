<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2"); 
require('fpdf181/fpdf.php');

$Rno=$_POST['Rno'];



$pdf=new FPDF();

$pdf->AddPage("L","A5");

	$pdf->Image('img/slogo.png',10,6,60,12);
	$pdf->SetTitle("Replacement");
	$pdf->SetFont("Arial","B","25");
	$pdf->SetTextColor(50,50,255);
	$pdf->Text(60,30,"Replacement Approval");
	

	
	$sql1 = "select * from replacement where replacement_no='$Rno'";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_array($result))
        {

			$center=$row['center_id'];
			$sql2="select * from service_center where center_id='$center'";
        	$result2=mysqli_query($conn,$sql2);

        	if (mysqli_num_rows($result) > 0) {
        		$data = mysqli_fetch_array($result2);

        		$pdf->SetFont("Arial","B","12");
	        	$pdf->SetTextColor(0,0,0);
	       		$pdf->Text(10,45,"Service Center:");
        		$pdf->SetFont("Arial","","12");
	        	$pdf->SetTextColor(0,0,0);
	        	$pdf->Text(45,45,	$data['name'].".");
	        	$pdf->SetFont("Arial","","11");
				$pdf->Text(45,51, 	$data['location'].".");
				$pdf->Text(45,57, "Tel: 0".	$data['tel']);

        	}
        		$pdf->SetFont("Arial","B","12");
	        	$pdf->SetTextColor(0,0,0);
	       		$pdf->Text(133,45,"Branch:");
        		$pdf->SetFont("Arial","","12");
	        	$pdf->SetTextColor(0,0,0);
	        	$pdf->Text(150,45,	"Singer Showroom");
	        	$pdf->SetFont("Arial","","11");
				$pdf->Text(150,51, "Galle A");
				$pdf->Text(150,57, "Tel: 0912222953");
	
	         $pdf->SetFont("Arial","B","11");
	         $pdf->SetTextColor(0,0,0);
	         $pdf->Text(137,15,"Replacement Number:");
	         $pdf->SetFont("Arial","","11");
			 $pdf->Text(180,15,"REP-".$row['replacement_no']);
     
     	     $pdf->SetFont("Arial","B","12");
     	     $pdf->SetTextColor(0,0,0);
     	     $pdf->Text(60,76,"Replacement Date:");
     	     $pdf->SetFont("Arial","","11");
			 $pdf->Text(100,76,	$row['date']);
     
     	     $pdf->SetFont("Arial","B","12");
     	     $pdf->Text(60,84,"Serial Number:");
     	     $pdf->SetFont("Arial","","11");
			 $pdf->Text(93,84,	$row['serial_no'] );

     	     $pdf->SetFont("Arial","B","12");
     	     $pdf->Text(60,92,"Replacement Type:");
	         $pdf->SetFont("Arial","","11");
			 $pdf->Text(101,92,	$row['replacement_type']);

     	     $pdf->SetFont("Arial","B","12");
	         $pdf->Text(60,100,"Replacement Reason:");
	         $pdf->SetFont("Arial","","11");
			 $pdf->Text(107,100,	$row['replacement_reason']);
			 $pdf->Ln(20);  
}
}
	$pdf->SetFont("Arial","","12");
	$pdf->Text(10,130," ..........................");
	$pdf->Text(10,135,"(Branch Manager)");
	$pdf->SetFont("Arial","B","8");
	$pdf->Text(160,135,date('Y-m-d h:s A'));
	
	
$pdf->Output("",'REP-'.$Rno.'.pdf');

echo mysqli_error();

?>

