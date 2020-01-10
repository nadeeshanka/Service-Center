<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");
        
  $noti=$_POST['noti'];

    $update_sql= "UPDATE notification SET status='read' WHERE notificaton_no='$noti' " ;
    $result = mysqli_query($conn, $update_sql); 
    if(!$result){
    die("Inavlid query".mysqli_error($conn));
                                           
    }else{

      header("Location:notification.php");  
      
      
  }

?>


