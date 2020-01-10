<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

	$funame=ucfirst($_POST['fname']);
	$luname=ucfirst($_POST['lname']);
	$nic=$_POST['nic'];
	

	$address1=ucfirst($_POST['address1']);
	$street=ucfirst($_POST['street']);
	$city=ucfirst($_POST['city']);
	$phone=$_POST['phone_no'];
	$email=$_POST['email'];
	$password=md5($_POST['psw']);
	$date = date('Y-m-d h:i:s');


	if(isset($_POST['btnregi'])){
		$sql1 = " SELECT * FROM blacklist  WHERE nic_no='$nic' ";
  		$result=mysqli_query($conn,$sql1);
  		if (mysqli_num_rows($result) > 0) {
    
        	header('Location:backlistmessage.php');
     	}
     	else{
			$sql1 = "insert into customer(NIC_No,first_name,last_name,passward,address1,street,city,tel_no,email,date) values('$nic','$funame','$luname','$password','$address1','$street','$city','$phone','$email','$date') ";
	
    		$result1=mysqli_query($conn,$sql1);
	
			if(!$result1){
				die("Inavlid query".mysqli_error($conn));
			}
	
			else{
				header("Location:Profile.php?id=$nic&email=$email");
			}
		}
	}
 mysqli_close($conn);
?>