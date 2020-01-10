<?php
    session_start();    
    include("conni.php");
    mysqli_select_db($conn,"cs2018g2");
        
    $find=$_POST['value'];
    $cid=$_SESSION['USERNAME'];
   
  
    $sql1 = "SELECT * FROM bill WHERE center_id='$cid' and status='Not Paid' AND bill_no LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if(!$result){
        die("Inavlid query".mysqli_error($conn)); 
    }
    if(mysqli_num_rows($result) > 0){
    include("payment_bills_display.php");
    }else{
      echo "
            <div class='jumbotron jumbotron-fluid'>
              <div class='container'>
                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
              </div>
            </div>";
    }


    mysqli_close($conn);
?>