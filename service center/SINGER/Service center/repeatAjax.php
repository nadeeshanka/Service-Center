<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");  
        
  $serial=$_POST['model']."-".$_POST['serial'];
  $date = date('Y-m-d');

  $sql1 = "SELECT * FROM complaint WHERE serial_no='$serial' and date LIKE '%$date%' ";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result))
            {
              echo "1";
              //echo $row['center_id'];
            }
         
          }

           
  ?>    


