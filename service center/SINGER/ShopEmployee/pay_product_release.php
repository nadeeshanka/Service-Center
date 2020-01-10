<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");    

  if (isset($_POST['btnrelease'])) {
    $id= $_POST['release'];
    $location= $_POST['location'];                             
  
    $update_sql= "UPDATE product SET delivery='$location' WHERE serial_number='$id' " ;
    $result = mysqli_query($conn, $update_sql); 
    if(!$result){
    die("Inavlid query".mysqli_error($conn));
                                           
    }else{

      header("Location:payment_paidbills.php");  
      
      
  }
}
?>