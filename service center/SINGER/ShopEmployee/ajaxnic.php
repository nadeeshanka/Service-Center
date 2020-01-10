<?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");
        
        $nic=$_POST['nic'];

        $sql1 = "SELECT * FROM customer WHERE NIC_No='$nic' ";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result))
            {
              echo "<p style='color:blue;text-align:right;'>".$row['first_name']." ".$row['last_name']."<p>";
            }
          }else{
              echo "*Register Customer First!";
          }
  ?>      

