<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");
        
  $nic=$_POST['nic'];

  $sql1 = " SELECT * FROM blacklist  WHERE nic_no='$nic' ";

  $result=mysqli_query($conn,$sql1);
  if (mysqli_num_rows($result) > 0) {
    
        echo "<h3 style='color:red;text-align:right;'>This customer was BLACKLISTED</h3>";
      }
?>

