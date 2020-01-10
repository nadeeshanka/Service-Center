<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

extract($_POST);
if(!empty($warranty)){
    $warranty="Not valid";
    if(isset($_POST['btnupdate'])){
	$sql1 = "UPDATE job SET warranty='$warranty' WHERE job_no='$job'";
    $result1=mysqli_query($conn,$sql1);
	}
}

if(!empty($description)){
    
    if(isset($_POST['btnupdate'])){
    $sql2 = "UPDATE job SET job_description ='$description' WHERE job_no='$job'";
    $result2=mysqli_query($conn,$sql2);
    }
}


if(isset($_POST['btnupdate'])){
    $get="SELECT complain_no FROM job WHERE job_no='$job'";
     $output=mysqli_query($conn,$get);
      if (mysqli_num_rows($output) > 0) {
        $row=mysqli_fetch_assoc($output);
        $SER=$row['complain_no'];
    }
     $sql3 = "select * from complaint,customer where complaint.complaint_no='$SER' and complaint.NIC_no=customer.NIC_No";

    $result3=mysqli_query($conn,$sql3);
    if (mysqli_num_rows($result3) > 0) {
        $data= mysqli_fetch_array($result3);
        $email=$data['email'];
        $date = date('Y-m-d');
        $time=date("h:i:s");
        
        if($situation=="Processing"){

            $msg='Your Product is still repairing (JO-'.$job.')';
        }
         elseif($situation=="Finished"){

            $msg='Your product was repaired (JO-'.$job.')';

             
        }
        elseif($situation=="Replace"){

            $msg='Your product was replaced ,Please contact branch manger to get a new one (JO-'.$job.')';
        }
        else{
            $msg='Relevant product parts not available, Please wait few days (JO-'.$job.')';
        }

        $sql4 = "insert into notification(email,date,time,msg,status) values('$email','$date','$time','$msg','new') "; 
        $result4=mysqli_query($conn,$sql4);
        if(!$result4){
          die("Invalid query".mysqli_error($conn));
        }
      }
	
    $sql = "UPDATE job SET current_situation='$situation' WHERE job_no='$job'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:job_homevisit.php"); 
              
    }
                   
}

?>                  