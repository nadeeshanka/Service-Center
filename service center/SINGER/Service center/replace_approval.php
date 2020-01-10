<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

extract($_POST);

if(isset($_POST['btnsend'])){
       $sql = "insert into replacement (replacement_no,date,center_id,serial_no,warranty,replacement_type,replacement_reason) values('$Rno','$date','$center','$serial','$warranty','$type','$reason')";
    $result=mysqli_query($conn,$sql);

  
    $sql1 = "UPDATE job SET current_situation='Replaced' WHERE serial_no='$serial'";
    $result1=mysqli_query($conn,$sql1);

     if(!$result1){
        die("Inavlid query".mysqli_error($conn));
    }


    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:job_replacement.php"); 
              
    }
                   
}

?>                  