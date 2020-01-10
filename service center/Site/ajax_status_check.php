 
<?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");
        
        $serno=$_POST['serno'];

        $sql1 = "SELECT * FROM complaint WHERE complaint_no='$serno'";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
            {
            if($row['status']=='available'){
              echo "<p style='color:blue;text-align:center;'>Your service request ".$serno." was received to service center</p>";
            }
            if($row['status']=='accepted'){
              echo "<p style='color:blue;text-align:center;'>Your service request ".$row['status']." by service center</p>";
            }

            if($row['status']=='Job Created'){

              $sql2 = "SELECT * FROM job WHERE complain_no='$serno'";
              $output=mysqli_query($conn,$sql2);
              if (mysqli_num_rows($output) > 0) {
              while($data = mysqli_fetch_assoc($output)){
                echo "<p style='color:blue;text-align:center;'>Your product's job number is JO-".$data['job_no']."</p>";
                if($data['current_situation']=='Processing'){
                  if($data['job_type']=='Service Center'){
                  echo "<p style='color:green;text-align:center;'>Your product is still repairing</p>";
                  }else{
                     echo "<p style='color:green;text-align:center;'>Our service agents wiil come to your home</p>";
                  }
                }  
                elseif($data['current_situation']=='Replace'||$data['current_situation']=='Replaced' ){
                  echo "<p style='color:green;text-align:center;'>You will received new one ,Please meet branch manager</p>";
                }
                 elseif($data['current_situation']=='Finished' ){
                  echo "<p style='color:green;text-align:center;'>Your product repaired,Please collect your product</p>";
                }
                else{
                  echo "<p style='color:red;text-align:center;'>Please wait,Relevant part not available to repaire your product</p>";
                }
              }
            }
          }
        }
        }else{
              echo "<p style='color:red;text-align:center;'>*Invalid service request number!";
          }
  ?>      

