<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$serial=$_POST['serial'];


if(isset($_POST['btnEnter'])){
    $sql= "UPDATE product SET location ='Customer' WHERE serial_number='$serial'";
   
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }

    $sql= "UPDATE product SET delivery ='Handed_to_Customer' WHERE serial_number='$serial'";
   
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:products-received.php");            
          
    }
               
}
?>

