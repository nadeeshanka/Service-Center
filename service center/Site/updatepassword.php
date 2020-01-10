<?php
session_start();

include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$password=md5($_POST['newpwd']);
$email=$_POST['email'];


if(isset($_POST['btncreat'])){
    $sql= "UPDATE customer SET passward ='$password' WHERE email='$email'";
   
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:LoginSite.php");            
          
    }
               
}
 mysqli_close($conn);
?>