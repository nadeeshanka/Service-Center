<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$email=$_POST['email'];
$password=md5($_POST['pwd']);

if($_POST['btnlogin']){

$sql = "select * from customer where email='$email' and passward='$password' ";

$result=mysqli_query($conn,$sql);
if(!$result){
die("Inavlid query".mysqli_error($conn)); 
}
$row = mysqli_fetch_assoc($result);

$_SESSION['NIC'] = $row['NIC_No'];
$_SESSION['email'] = $row['email'];
$_SESSION['name']=$row['first_name'];
if(mysqli_num_rows($result) == 1){
  header("Location:ActiveHome.php");

}
else{
  header("Location: LoginSite.php?error=1");  
}
mysql_close($con);
}
?>