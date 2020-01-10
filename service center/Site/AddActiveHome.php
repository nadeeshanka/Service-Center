<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");


	$date = date('Y-m-d h:i:s');
	$feedback=$_POST['comment'];
	$com_no=$_POST['Cnum'];

	

	if(isset($_POST['btnsubmit'])){
		$sql = "UPDATE  complaint SET  feedback_date='$date',feedback='$feedback' WHERE complaint_no='$com_no' ";
		$result=mysqli_query($conn,$sql);
		if(!$result){
			die("Inavlid query".mysqli_error($conn));
		}

	header("Location:ActiveHome.php");
}

 mysqli_close($conn);
	
	?>