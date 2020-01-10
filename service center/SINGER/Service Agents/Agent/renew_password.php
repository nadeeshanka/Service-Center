<?php
session_start();

include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$password=md5($_POST['newpwd']);
$pwd=md5($_POST['pwd']);
$cid=$_SESSION['cid'];
$email=$_SESSION['Aemail'];


if(isset($_POST['btncreat'])){
	$sql1 = "SELECT password FROM service_agents WHERE email='$email'";
 	$result1=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result1) > 0) {
        $data = mysqli_fetch_array($result1);
    	if($data['password']==$pwd){

    		$sql= "UPDATE service_agents SET password ='$password' WHERE email='$email'";
    		$result=mysqli_query($conn,$sql);
    		if(!$result){
        		die("Inavlid query".mysqli_error($conn));
        	}else{
        		header("Location:../Agentlogin.php");            
    		}


    	}else{
    		header("Location:renew.php?error=1"); 
    	}

    }
}
                 
 mysqli_close($conn);
?>