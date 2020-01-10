 
<?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");  
        
        
        $date1=strtotime(date('Y-m-d'));
        $date2=strtotime($_POST['pdate']);
        $diff=($date1-$date2);
        $val= $diff/ (60*60*24);
        if( $val <=365){
          echo "<p style='color:green;text-align:right;'>Warranty is Valid</p>";
        }else{
          echo "<p style='text-align:right;'><a href='http://localhost/example/projects/Site/warranty.php'>Click here to more details</p>";
        } 
        

  ?>      

