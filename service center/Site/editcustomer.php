<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$nic=$_SESSION['NIC'];
$address1=ucfirst($_POST['address1']);
$street=ucfirst($_POST['street']);
$city=ucfirst($_POST['city']);
$phone=$_POST['phone_no'];



if(isset($_POST['btnedit'])){
	if(!empty($address1)){

    	$update1= "UPDATE customer SET address1='$address1' WHERE NIC_No='$nic'";
   
    	$result1=mysqli_query($conn,$update1);
    	if(!$result1){
      		die("Inavlid query".mysqli_error($conn));
    	}
    
    }
    if(!empty($street)){
    	$update2= "UPDATE customer SET street='$street' WHERE NIC_No='$nic'";
   
    	$result2=mysqli_query($conn,$update2);
    	if(!$result2){
      		die("Inavlid query".mysqli_error($conn));
    	}
    
    }
    if(!empty($city)){
    	$update3= "UPDATE customer SET city='$city' WHERE NIC_No='$nic'";
   
    	$result3=mysqli_query($conn,$update3);
    	if(!$result3){
      		die("Inavlid query".mysqli_error($conn));
    	}


	}
	if(!empty($city)){
    	$update4= "UPDATE customer SET city='$city' WHERE NIC_No='$nic'";
   
    	$result4=mysqli_query($conn,$update4);
    	if(!$result4){
      		die("Inavlid query".mysqli_error($conn));
    	}


	}
	if(!empty($phone)){
    	$update5= "UPDATE customer SET tel_no='$phone' WHERE NIC_No='$nic'";
   
    	$result5=mysqli_query($conn,$update5);
    	if(!$result5){
      		die("Inavlid query".mysqli_error($conn));
    	}


	}


    
    header("Location:Profile.php");
       
}
mysqli_close($conn);
?>