<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
	$Cnumber=$_POST['ComplainNumber'];
	$Comment=$_POST['comment'];

if(isset($_POST['btnsubmit'])){
	$sql = "insert into complaint(complaint_no,feedback) values('$Cnumber','$Comment') ";
    $result=mysqli_query($conn,$sql);
		if(!$result){
			die("Inavlid query".mysqli_error($conn));
		}

	header('Location:ActiveHome.php');
}

 mysqli_close($conn);
?>