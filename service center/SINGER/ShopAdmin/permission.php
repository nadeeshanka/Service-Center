<?php
            
    include("conni.php");
    mysqli_select_db($conn,"cs2018g2");
    $nic_no=$_POST['nic_no'];

    if(isset($_POST['btndelet'])){
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