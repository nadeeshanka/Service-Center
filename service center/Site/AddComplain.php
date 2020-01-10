<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");

$date = date('Y-m-d h:i:s');
$nic=$_SESSION['NIC'];
$serialno=$_POST['Mlno']."-".$_POST['Slno'];


$product=ucfirst($_POST['product']);
$Brand=$_POST['Pbrand'];
$purdate=$_POST['Pdate'];
$defetype=$_POST['Dtype'];

if(!empty($_POST['payment'])){
  $esti=$_POST['payment'];
}else{
  $esti="Not_Requested";
}
$loc=$_POST['location']; 
$cat=$_POST['Ptype'];
    $sql = "SELECT * FROM service WHERE location='$loc' and p_category='$cat' ";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $cid=$row['center_id'];     
        }

if(isset($_POST['btnsend'])){

        $sql3 = "SELECT repair_term FROM product WHERE serial_number='$serialno' ";
        $check=mysqli_query($conn,$sql3);
        if (mysqli_num_rows($check) > 0) {

            $data = mysqli_fetch_assoc($check);
            $term=$data['repair_term'] + 1;
            
            $update1= "UPDATE product SET repair_term ='$term' WHERE serial_number='$serialno'";
   
            $result4=mysqli_query($conn,$update1);
            if(!$result4){
            die("Inavlid query".mysqli_error($conn));
            }

            $update2= "UPDATE product SET location ='Customer' WHERE serial_number='$serialno'";
   
            $result5=mysqli_query($conn,$update2);
            if(!$result5){
            die("Inavlid query".mysqli_error($conn));
            }

            $update3= "UPDATE product SET delivery ='Customer' WHERE serial_number='$serialno'";
   
            $result6=mysqli_query($conn,$update3);
            if(!$result6){
            die("Inavlid query".mysqli_error($conn));
            }
        }else{
            $sql2 ="insert into product(serial_number,product_type,purchase_date,Brand,NIC_no,center_id,location,delivery) values ('$serialno','$product','$purdate','$Brand','$nic','$cid','Customer','Customer') ";
            $result2=mysqli_query($conn,$sql2);
            if(!$result2){
                die("Inavlid query".mysqli_error());
            }

        }

        $sql1 = "insert into complaint(date,defect,center_id,esti_payment,serial_no,NIC_no) values('$date','$defetype','$cid','$esti','$serialno','$nic') "; 
        $result1=mysqli_query($conn,$sql1);
        if(!$result1){
            die("Invalid query".mysqli_error($conn));
    
        }else{
            header("Location:workorder.php?date=$date&serial=$serialno");
        } 
    }

/*
if(isset($_POST['btnsub']))
{
   //$_FILES["image"];
   // $insert="insert into product(serial_nophoto) values($_FILES['image'];)";
    if(mysqli_query($conn,$insert))
    {
        move_upload_file($_FILES['image']['temp_name'],"picture/$img");
        echo "<script>alert('image has been upload')</script>";
    }
    else{
        echo "<script>alert('image has not been upload')</script>";
    }
}*/
mysqli_close($conn);

?>