<?php
include("conni.php");
include("mail/collectMail.php");
mysqli_select_db($conn,"cs2018g2");


extract($_POST);

if(isset($_POST['btncreate'])){
	$sql2 = "select email from customer where NIC_No='$nic'";

    $result2=mysqli_query($conn,$sql2);
    if (mysqli_num_rows($result2) > 0) {
        $data= mysqli_fetch_array($result2);
        $email=$data['email'];

        $date = date('Y-m-d');
        $time=date("h:i:s");

   		$msg='Dear customer, You have to pay for our repairment. Please pay your bills from relevant branch,service center or online. Your bill number-'.$billno.'.';

        $sql4 = "insert into notification(email,date,time,msg,status) values('$email','$date','$time','$msg','new') "; 
        $result4=mysqli_query($conn,$sql4);
        if(!$result4){
          die("Invalid query".mysqli_error($conn));
        }



 		$mail="<h1 style='color:red;'>SINGER<span style='color:blue;font-size:25px;'>Service</span></h1>
                <p style= 'border: 3px solid powderblue;padding:20px;width: 450px'><span style='font-size:18px;font-weight:bold;'>Your product's job number:- JO-".$jobno."</span><br></br><span style='font-size:15px;'>
           Dear customer,You have to pay for our repairment.</br>
           Please pay your bill from relevant branch,Service center or online. Your bill number-".$billno."</span></p>";
      
   		 sendMail($email,"SINGER Service",$mail);

	}

    $sql = "insert into bill (date,bill_no,job_no,nic_no,center_id,reason,amount) values('$date','$billno','$jobno','$nic','$center','$reason','$amount')";
    $result=mysqli_query($conn,$sql);

    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:job_finished.php"); 
              
    }
                   
}

?>                  