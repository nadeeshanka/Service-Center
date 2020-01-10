<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");    

  if (isset($_POST['btnrelease'])) {
    $id= $_POST['release'];
    $location= $_POST['location'];                             
  
    if($location=='Showroom'){ 

      $update_sql1= "UPDATE product SET location='$location' WHERE serial_number='$id' " ;
      $result1 = mysqli_query($conn, $update_sql1); 
      if(!$result1){
        die("Inavlid query".mysqli_error($conn));                                    
      }

      $update_sql2= "UPDATE product SET delivery='Service Center' WHERE serial_number='$id' " ;
      $result2 = mysqli_query($conn, $update_sql2); 
      if(!$result2){
        die("Inavlid query".mysqli_error($conn));                                    
      }
      else{

      header("Location:payment_paidbills.php");    
      }
    }
    if($location=='Customer'){ 

      $update_sql1= "UPDATE product SET location='$location' WHERE serial_number='$id' " ;
      $result1 = mysqli_query($conn, $update_sql1); 
      if(!$result1){
        die("Inavlid query".mysqli_error($conn));                                    
      }

      $update_sql2= "UPDATE product SET delivery='Customer Place' WHERE serial_number='$id' " ;
      $result2 = mysqli_query($conn, $update_sql2); 
      if(!$result2){
        die("Inavlid query".mysqli_error($conn));                                    
      }
      else{

      header("Location:payment_paidbills.php");    
      }
    }


  }
?>