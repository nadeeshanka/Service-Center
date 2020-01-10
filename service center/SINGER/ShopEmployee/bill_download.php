<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2"); 
require('fpdf181/fpdf.php');

$billno=$_GET['billno'];



$pdf=new FPDF();

$pdf->AddPage();

	$pdf->Image('img/slogo.png',10,6,80,16);
	$pdf->SetTitle("Receipt");
	$pdf->SetFont("Arial","U","25");
	$pdf->SetTextColor(0,0,0);
	$pdf->Text(85,35,"Receipt");
	

	
	$sql1 = "select * from bill where bill_no='$billno'";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_array($result))
        {
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
            $nic=$row['nic_no'];

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

       
	
	         $pdf->SetFont("Arial","","11");
	         $pdf->SetTextColor(0,0,0);
	         $pdf->Text(150,15,"	Bill Number :");
	         $pdf->SetFont("Arial","","11");
			 $pdf->Text(177,15, 	$row['bill_no']);


			 $pdf->SetFont("Arial","","11");
     	     $pdf->SetTextColor(0,0,0);
     	     $pdf->Text(150,22,"Printed on:");
     	     $pdf->SetFont("Arial","","12");
			 $pdf->Text(170,22, date('Y-m-d'));

     
     	     $pdf->SetFont("Arial","B","12");
     	     $pdf->SetTextColor(0,0,0);
     	     $pdf->Text(35,75,"Bill Date:");
     	     $pdf->SetFont("Arial","","12");
			 $pdf->Text(73,75,	$row['date']);
     
     	     $pdf->SetFont("Arial","B","12");
     	     $pdf->Text(35,85,"Job Number:");
     	     $pdf->SetFont("Arial","","12");
			 $pdf->Text(73,85,"JO - ".$row['job_no']);

     	  

     	     $pdf->SetFont("Arial","B","12");
	         $pdf->Text(35,95,"	Payment Reason:");
	         $pdf->SetFont("Arial","","12");
			 $pdf->Text(73,95,		$row['reason']);

			 $pdf->SetFont("Arial","B","12");
     	     $pdf->Text(35,105,"	Amount:",1,0);
	         $pdf->SetFont("Arial","","12");
			 $pdf->Text(73,105,	"Rs:".$row['amount']."/=");


			 $pdf->SetFont("Arial","B","12");
     	     $pdf->Text(35,115,"	Pay Mode:",1,0);
	         $pdf->SetFont("Arial","","12");
			 $pdf->Text(73,115,		$row['pay_mode']);


			 $pdf->Ln(20);  
}
}
	$pdf->SetFont("Arial","","11");
	$pdf->Text(10,140,"Received By.....................");
	
	$pdf->Text(10,145,"(Name and signature)");
	
$pdf->Output();

echo mysqli_error();

?>

