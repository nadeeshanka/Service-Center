<?php
	session_start();
	include("conni.php");
	mysqli_select_db($conn,"cs2018g2");
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$nic=$_POST['NIC_no'];
	$address=$_POST['address'];
	$phone=$_POST['tel_no'];
	$email=$_POST['email'];
	$field=$_POST['field'];
	$experience=$_POST['experience'];

	$cid=$_SESSION['USERNAME'];

	$sql2 = "SELECT agent_id FROM service_agents WHERE first_name='$fname' ";
    $check=mysqli_query($conn,$sql2);

    if (mysqli_num_rows($check) > 0) {
		$agent_id="AGT-".$lname;
		$password=md5("agent123");
	}else{
		$agent_id="AGT-".$fname;
		$password=md5("agent123");
	}
		

	if(isset($_POST['btnadd'])){

    	$sql ="insert into service_agents (agent_id,center_id,first_name,last_name,nic_no,address,phone_no,email,field,experience,password) values('$agent_id','$cid','$fname','$lname','$nic','$address',$phone,'$email','$field','$experience','$password')";

    	$result=mysqli_query($conn,$sql);
    	if(!$result){
    		die("Inavlid query".mysqli_error());
    	}else{
        	header("Location:agents_add.php");
    	}
    
	}
	mysqli_close($conn);
?>