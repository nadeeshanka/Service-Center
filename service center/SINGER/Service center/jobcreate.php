<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

extract($_POST);
if(empty($warranty)){
    $warranty="Not valid";
}
if(empty($description)){
    $description="To be checked";
}

if(isset($_POST['btncreate'])){
       $sql = "insert into job (job_no,complain_no,serial_no,jobdate,center_id,job_type,warranty,job_description,service_agent) values('$job','$SER','$serial','$date','$center','$job_type','$warranty','$description','$agent')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    $sql1 = "UPDATE complaint SET status='Job Created' WHERE complaint_no='$SER'";
    $result1=mysqli_query($conn,$sql1);
     if(!$result1){
        die("Inavlid query".mysqli_error($conn));
    }

    $sql2 = "UPDATE product SET location ='Service Center' WHERE serial_number='$serial'";
    $result2=mysqli_query($conn,$sql2);
     if(!$result2){
        die("Inavlid query".mysqli_error($conn));
    }
    
    $sql3 = "select * from complaint,customer where complaint.complaint_no='$SER' and complaint.NIC_no=customer.NIC_No";

    $result3=mysqli_query($conn,$sql3);
    if (mysqli_num_rows($result3) > 0) {
        $data= mysqli_fetch_assoc($result3);
        $email=$data['email'];
        $date = date('Y-m-d');
        $time=date("h:i:s");

        $msg='Your Job number is Jo-'.$job;
      
        $sql4 = "insert into notification(email,date,time,msg,status) values('$email','$date','$time','$msg','new') "; 
        $result4=mysqli_query($conn,$sql4);
        if(!$result4){
          die("Invalid query".mysqli_error($conn));
        }
      }


    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:accepted_complain.php"); 
              
    }
                   
}

?>                  