<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$id=$_POST['id'];
$address=ucfirst($_POST['address']);
$phone=$_POST['phone_no'];
$email=$_POST['email'];
$pwd=$_POST['newpwd'];


if(isset($_POST['btnedit'])){
	if(!empty($address)){

    	$update1="UPDATE service_agents SET address='$address' WHERE agent_id='$id'";
   
    	$result1=mysqli_query($conn,$update1);
    	if(!$result1){
      		die("Inavlid query".mysqli_error($conn));
    	}
    
    }
    if(!empty($phone)){
        $update2="UPDATE service_agents SET phone_no='$phone' WHERE agent_id='$id'";
   
        $result2=mysqli_query($conn,$update2);
        if(!$result2){
            die("Inavlid query".mysqli_error($conn));
        }


    }
    
    if(!empty($email)){
    	$update3="UPDATE service_agents SET email='$email' WHERE agent_id='$id'";
   
    	$result3=mysqli_query($conn,$update3);
    	if(!$result3){
      		die("Inavlid query".mysqli_error($conn));
    	}


	}
	if(!empty($pwd)){
    	$update4="UPDATE service_agents SET password='$pwd' WHERE agent_id='$id'";
   
    	$result4=mysqli_query($conn,$update4);
    	if(!$result4){
      		die("Inavlid query".mysqli_error($conn));
    	}
	}

    
    header("Location:agents_Registed.php");
       
}
mysqli_close($conn);
?>