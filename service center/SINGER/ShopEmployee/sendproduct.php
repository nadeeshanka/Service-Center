<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$serial=$_POST['serial'];


if(isset($_POST['btnEnter'])){
    $sql= "UPDATE product SET location ='Service Center' WHERE serial_number='$serial'";
   
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:products-onhand.php");            
          
    }
               
}
?>

