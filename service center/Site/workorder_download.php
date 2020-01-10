<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2"); 
require('fpdf181/fpdf.php');

$com=$_SESSION['com'];





$pdf=new FPDF();

$pdf->AddPage("L","A5");

	$pdf->Image('img/slogo.png',10,6,60,12);
	$pdf->SetTitle('Service Request');
	$pdf->SetFont("Arial","B","25");
	$pdf->SetTextColor(50,50,255);
	$pdf->Text(60,30,"SERVICE REQUEST");
	

	
	$sql1 = "select * from complaint where complaint_no='$com'";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_array($result);

        	$pdf->SetFont("Arial","B","12");
			$pdf->SetTextColor(0,0,0);
			$pdf->Text(10,45,"Service center:");

        	$center=$row['center_id'];

			$sql2="select * from service_center where center_id='$center'";
        	$result2=mysqli_query($conn,$sql2);

        	if (mysqli_num_rows($result) > 0) {
        		$data = mysqli_fetch_array($result2);


        		$pdf->SetFont("Arial","","12");
	        	$pdf->SetTextColor(0,0,0);
	        	$pdf->Text(45,45,	$data['name'].".");
	        	$pdf->SetFont("Arial","","11");
				$pdf->Text(45,51, 	$data['location'].".");
				$pdf->Text(45,57, "Tel: 0".	$data['tel']);

        	}
            $nic=$row['NIC_no'];

            $sql3 = "select * from customer where NIC_No='$nic'";
          	$result3=mysqli_query($conn,$sql3);
            if (mysqli_num_rows($result3) > 0) {
            $data1= mysqli_fetch_array($result3);

            $pdf->SetFont("Arial","B","12");
     	    $pdf->Text(115,45,"	Customer:");
	        $pdf->SetFont("Arial","","11");
	        $pdf->Text(140,46, 	$data1['NIC_No'].".");
			$pdf->Text(140,52,"Mr/Mrs: "	.$data1['first_name']." ".$data1['last_name']);
			$pdf->Text(140,58, "Tel: 0".	$data1['tel_no']);

        	}
        

	        $pdf->SetFont("Arial","B","11");
	        $pdf->SetTextColor(0,0,0);
	        $pdf->Text(135,15,"Service Request No:");
	        $pdf->SetFont("Arial","","11");
			$pdf->Text(175,15,"SER-".$row['complaint_no']);

			

			
			$pdf->SetFont("Arial","","11");
    		$pdf->SetTextColor(0,0,0);
    		$pdf->Text(10,75,"Request Date:");
    		$pdf->SetFont("Arial","","11");
			$pdf->Text(40,75, date('Y-m-d'));

     

     
     	     $pdf->SetFont("Arial","B","11");
     	     $pdf->Text(60,85,"Serial Number:");
     	     $pdf->SetFont("Arial","","11");
			 $pdf->Text(90,85,$row['serial_no'] );

     	     $pdf->SetFont("Arial","B","11");
     	     $pdf->Text(60,124,"Defect :");
	         $pdf->SetFont("Arial","","12");
			 $pdf->Text(85,124,$row['defect']);

     	     $pdf->SetFont("Arial","B","11");
	         $pdf->Text(60,116,"Estimate Payment:");
	         $pdf->SetFont("Arial","","11");
			 $pdf->Text(95,116,$row['esti_payment']);
	
		
		$slno=$row['serial_no'] ;
	}
		$sql2 = "select * from product where serial_number='$slno'";
    	$result2=mysqli_query($conn,$sql2);
    	if (mysqli_num_rows($result2) > 0) {
        
       		 $data = mysqli_fetch_array($result2);
        
			$pdf->SetFont("Arial","B","11");
	        $pdf->SetTextColor(0,0,0);
	        $pdf->Text(60,92,"Product Type:");
	        $pdf->SetFont("Arial","","11");
			$pdf->Text(90,92,$data['product_type']);

			$pdf->SetFont("Arial","B","11");
     	    $pdf->SetTextColor(0,0,0);
     	    $pdf->Text(60,100,"Product Brand:");
     	    $pdf->SetFont("Arial","","11");
			$pdf->Text(90,100,$data['Brand']);

     		$pdf->SetFont("Arial","B","11");
			$pdf->SetTextColor(0,0,0);
			$pdf->Text(60,108,"Purchase Date:");
			$pdf->SetFont("Arial","","11");
			$pdf->Text(90,108,$data['purchase_date']);
			
			
		  
	}

	$pdf->SetFont("Arial","","11");
	$pdf->Text(150,140,"signature ....................");
	$pdf->Text(150,145,"(Branch Manager)");


	
$pdf->Output("",'SER-'.$com.'.pdf');

echo mysqli_error();

?>

