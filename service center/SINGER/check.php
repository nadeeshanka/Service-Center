<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$uname=$_POST['uname'];
$password=md5($_POST['pwd']);

if($_POST['btnlogin']){

$sql = "select * from super_users where user_name='$uname' and password='$password' ";

$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1) {

$row = mysqli_fetch_assoc($result);

$_SESSION['ROLE'] = $row['role'];
$_SESSION['USERNAME'] = $row['user_name'];
if($row['role'] == "admin"){
  header("Location:ShopAdmin/admin.html");
  
}
elseif($row['role'] == "assistant"){
	header("Location:ShopEmployee/newComplaint.php");
	 
}
elseif($row['role'] == "clerk"){
	header("Location:Service center/available_complain.php");
	 
}
}
else{
  header("Location: login.php?error=1");  
}
mysql_close($con);
}
?>