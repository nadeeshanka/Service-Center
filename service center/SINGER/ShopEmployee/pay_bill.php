<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$mode=$_POST['mode'];
$bill=$_POST['bill'];
$jobno=$_POST['jobno'];

if(isset($_POST['btndownload'])){
    $sql = "UPDATE bill SET pay_mode='$mode' WHERE bill_no='$bill'"; 
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    $sql1 = "UPDATE bill SET status='Paid' WHERE bill_no='$bill'";
    $result1=mysqli_query($conn,$sql1);
  

    if(!$result1){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:bill_download.php?billno=$bill"); 
              
    }
                   
}

?>                  