<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$position=$_POST['position'];
$o_date=$_POST['odate'];
$c_date=$_POST['cdate'];
$description=$_POST['description'];

$cid=$_SESSION['USERNAME'];


if(isset($_POST['btnpost'])){

    $sql ="insert into vacancy (center_id,position,opening_date,closing_date,description) values('$cid','$position','$o_date','$c_date','$description')";

    $result=mysqli_query($conn,$sql);
    if(!$result){
    die("Inavlid query".mysqli_error());
    }else{
        header("Location:agent_vacancy.php");
    }
    
}
mysqli_close($conn);
?>