<?php
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$id=$_POST['agent_id'];

if(isset($_POST['btndelete'])){
    $sql1 = "DELETE FROM service_agents WHERE agent_id='$id'";
    $result=mysqli_query($conn,$sql1);
    if(!$result){
        die("Inavlid query".mysqli_error($conn));
    }
    else{

        header("Location:agents_Registed.php"); 
              
    }
                   
}

?>                  