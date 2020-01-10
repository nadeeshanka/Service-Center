<?php
            
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
extract($_POST);
if(isset($_POST['btnremove'])){
    $date = date('Y-m-d h:i:s');
    $sql="insert into customer(NIC_No,first_name,last_name,passward,address1,street,city,tel_no,email,date) values('$nic_no','$fname','$lname','$pwd','$address1','$street','$city','$tel','$email','$date')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    $sql1 = "DELETE FROM blacklist WHERE nic_no='$nic_no'";
    $result=mysqli_query($conn,$sql1);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:admin_Backlist.php");            
          
    }
               
}
?>