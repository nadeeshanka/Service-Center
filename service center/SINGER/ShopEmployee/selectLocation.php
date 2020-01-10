<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$serial=$_POST['serial'];


if(isset($_POST['btnEnter'])){

	$sql1= "UPDATE product SET location ='Showroom' WHERE serial_number='$serial'";
   
    $result1=mysqli_query($conn,$sql1);
    if(!$result1){
        die("Inavlid query".mysqli_error($conn));
    }

    $sql= "UPDATE product SET delivery ='Showroom' WHERE serial_number='$serial'";
   
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{
        
        header("Location:products.php");            
          
    }
               
}
?>

