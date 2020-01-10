<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$mode=$_POST['mode'];
$bill=$_POST['bill'];
$jobno=$_POST['jobno'];

if(isset($_POST['btndownload'])){
    $sql2 = "select * from customer,bill where bill.bill_no='$bill' and customer.NIC_No=bill.nic_no";

    $result2=mysqli_query($conn,$sql2);
    if (mysqli_num_rows($result2)==1) {
        $data= mysqli_fetch_array($result2);
        $email=$data['email'];

        $date = date('Y-m-d');
        $time=date("h:i:s");

        $msg='Thank you for your payment, Your bill number-'.$bill.'.';

        $sql4 = "insert into notification(email,date,time,msg,status) values('$email','$date','$time','$msg','new') "; 
        $result4=mysqli_query($conn,$sql4);
        if(!$result4){
          die("Invalid query".mysqli_error($conn));
        }
    }

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