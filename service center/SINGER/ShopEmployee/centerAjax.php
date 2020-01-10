 
<?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");  
        
        $loc=$_POST['location']; 
        $cat=$_POST['category'];


        $sql1 = "SELECT * FROM service WHERE location='$loc' and p_category='$cat' ";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result))
            {
              echo "<p style='color:blue;text-align:right;'>Relevant Service Center: ".$row['center_id']."<p>";
              //echo $row['center_id'];
            }
         
          }

           
  ?>    


