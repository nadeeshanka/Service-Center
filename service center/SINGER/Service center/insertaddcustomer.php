<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$funame=ucfirst($_POST['fname']);
$luname=$_POST['lname'];
$nic=$_POST['nic'];
$address1=ucfirst($_POST['address1']);
$street=ucfirst($_POST['street']);
$city=ucfirst($_POST['city']);
$phone=$_POST['phone_no'];
$email=$_POST['email'];
$password=md5("Customer123");

if(isset($_POST['btnregister'])){
    $date = date('Y-m-d h:i:s');
    $sql = "insert into customer(NIC_No,first_name,last_name,passward,address1,street,city,tel_no,email,date) values('$nic','$funame','$luname','$password','$address1','$street','$city','$phone','$email','$date') ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
    die("Inavlid query".mysqli_error());
    }else{
        header("Location:request_new.php");
    }
    
}
mysqli_close($conn);
?>