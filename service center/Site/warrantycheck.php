 
<?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");  
        
        
        $cat=$_POST['cat'];
        $ins= $_POST['insurance'];
        $ptype=$_POST['ptype'];
        $brand= $_POST['brand'];
      
        
        $date1=strtotime(date('Y-m-d'));
        $date2=strtotime($_POST['pdate']);
        $diff=($date1-$date2);
        $val= $diff/ (60*60*24);

   

         $sql1 = "SELECT * FROM warranty  WHERE p_category='$cat' and p_insurance='$ins' and p_type='$ptype' and p_brand ='$brand' ";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $war=$row['valid_days'];  

         


        if(($cat=="REF"||$cat=="Deepf_Bot")){
          if( $val <=365){
             echo "<p style='color:green;'>Product Body :Warranty is Valid</p>";
          }else{
            echo "<p style='color:red;'>Product Body :Warranty period is over</p>";
          } 

          if($val<=$war){
            echo "<p style='color:green;'>Product Compressor :Warranty is valid</p>";
          }else{
             echo "<p style='color:red;'>Product Compressor:Warranty period is over</p>";
          } 
        }
        elseif(($cat=="AC")){
          if( $val <=365){
             echo "<p style='color:green;'>Product Indoor Unit's :Warranty is valid</p>";
          }else{
            echo "<p style='color:red;'>Product Indoor Unit's :Warranty period is over</p>";
          } 

          if($val<=$war){
            echo "<p style='color:green;'>Product Compressor :Warranty is valid</p>";
          }else{
             echo "<p style='color:red;'>Product Compressor:Warranty period is over</p>";
          } 
        }
        
        else{
          if($val<=$war){
            echo "<p style='color:green;'>Your Product :Warranty is valid</p>";
          }else{
             echo "<p style='color:red;'>Your Product :Warranty period is over</p>";
          } 
        }
      
       }else{
            echo "<p style='color:red;'>Enter valid detail</p>";
        }

  ?>      

