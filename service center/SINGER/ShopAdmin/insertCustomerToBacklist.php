<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$nic_no=$_POST['nic'];
echo $nic_no;
if(isset($_POST['btnback'])){
    $date = date('Y-m-d h:i:s');
    $sql = "insert into blacklist (nic_no,fname,lname,passward,address1,street,city,tel,email,date) values('$nic_no','blacklisted','blacklisted','blacklisted','blacklisted','blacklisted','blacklisted','0','blacklisted','$date')";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:admin_Backlist.php"); 
              
    }
                   
}

?> 