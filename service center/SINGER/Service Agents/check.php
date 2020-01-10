<?php
	session_start();
	include("conni.php");
	mysqli_select_db($conn,"cs2018g2");
	$email=$_POST['email'];
	$password=md5($_POST['pwd']);
	$_SESSION['Aemail']=$email;

	if($_POST['btnlogin']){

		$sql = "select * from service_agents where email='$email' and password='$password' ";

		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)==1) {

			$row = mysqli_fetch_assoc($result);
			$_SESSION['cid'] = $row['center_id'];
			$_SESSION['id'] = $row['agent_id'];
			
		  	header("Location:Agent/available_jobs.php");
	 
		}
		else{
 			 header("Location:Agentlogin.php?error=1");  
		}
	}
	mysql_close($conn);
	
?>