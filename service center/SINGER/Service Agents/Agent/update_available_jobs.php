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
	
    $sql = "UPDATE job SET current_situation='$situation' WHERE job_no='$job'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:available_jobs.php"); 
              
    }
                   
}

?>                  