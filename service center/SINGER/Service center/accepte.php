<?php
  session_start();
  include("conni.php");
  include("mail/handovermail.php");
  mysqli_select_db($conn,"cs2018g2");    

  if (isset($_POST['accept'])) {
                                  
    $id= $_POST['accept'];
  
    $date = date('Y-m-d');
    $time=date("h:i:s");

    $sql1 = "select * from complaint,customer where complaint.complaint_no='$id' and complaint.NIC_no=customer.NIC_No";

    $result1=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result1) > 0) {
      $data= mysqli_fetch_array($result1);
      $email=$data['email'];


      if(!empty($_POST['handover'])){
     
        $msg="Your service request ".$id." accepted,Please handover your product Branch or relevant Service center ";

        $mail="<h1 style='color:red;'>SINGER<span style='color:blue;font-size:25px;'>Service</span></h1>
          <p style= 'border: 3px solid powderblue;padding:20px;width: 450px'><span style='font-size:18px;font-weight:bold;'>Service request number SER-".$id."</span><br></br><span style='font-size:18px;'>
            Please,handover your product and bill copy to relevant branch or service center</span></p>";
      
      sendMail($email,"SINGER Service",$mail);

      }else{
        $msg="Your service request ".$id." accepted";
      }
        $sql2 = "insert into notification(email,date,time,msg,status) values('$email','$date','$time','$msg','new') "; 
        $result2=mysqli_query($conn,$sql2);
        if(!$result2){
          die("Invalid query".mysqli_error($conn));
      }

     
        
      }
    
    $update_sql= "UPDATE complaint SET status='accepted' WHERE complaint_no='$id' " ;
    $result = mysqli_query($conn, $update_sql); 
    if(!$result){
    die("Inavlid query".mysqli_error($conn));
                                           
    }else{

      header("Location:available_complain.php");  
      
      
  }
}
?>