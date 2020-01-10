<?php
  session_start();
  include("conni.php");
  include("mail/handovermail.php");
  mysqli_select_db($conn,"testing1"); 

  	$id=$_POST['id'];
  	echo $id;
  	if(isset($_POST['btnenter'])){

  	$sql1 = "select * from complaint,customer where complaint.complaint_no='$id' and complaint.NIC_no=customer.NIC_No";

    	$result1=mysqli_query($conn,$sql1);
    	if (mysqli_num_rows($result1) > 0) {
    	  $data= mysqli_fetch_array($result1);
    	  $email=$data['email'];

    	  echo $email;

  		$mail="<h1 style='color:red;'>SINGER<span style='color:blue;font-size:25px;'>Service</span></h1>
			<p style= 'border: 3px solid powderblue;padding:20px;width: 450px'><span style='font-size:18px;font-weight:bold;'>Service request number SER-".$id."</span><br></br><span style='font-size:18px;'>
  			Please, Handover your product to relevant branch or Service center</span></p>";
  		
  		sendMail($email,"SINGER Service",$mail);
	}
}
?>