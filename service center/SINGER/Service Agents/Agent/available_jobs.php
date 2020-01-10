<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<title>Service Center Employee</title>
 <!--bootstrap links-->
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">

  <!--W3.css links-->
  <link rel="stylesheet" href="bootstrap/w3.css">
  <link rel="stylesheet" href="bootstrap/w3-theme-teal.css">

  
<body>

<nav class="w3-sidebar w3-bar-block w3-card w3-pale-green" style="z-index:3;width:250px;font-weight:bold;" id="mySidebar">
<div class="w3-container w3-theme-d5">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br><br>
  <div class="w3-padding w3-center">
    <img class="w3-circle" src="img/agent.jpg" alt="SERVICE AGENT" style="width:100%">
  </div>
  <div style="text-align:center;font-size:18px" >
    <?php
    echo $_SESSION['id'];
    ?>
  </div>
</div>
<a class="w3-bar-item w3-button w3-hover-lime" href="available_jobs.php" style="font-size: 20px">Available Jobs</a>
			  
<a class="w3-bar-item w3-button w3-hover-lime" href="finished_jobs.php" style="font-size: 20px">Finished Jobs</a>

<a class="w3-bar-item w3-button w3-hover-lime" href="renew.php" style="font-size: 20px">Change Password</a>

</nav>

<header class="w3-top w3-bar w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <span><h3 class="w3-bar-item" style="width:50%;">SERVICE CENTER AGENT</h3></span>
  <link rel="stylesheet" type="text/css" href="employee service.css">
</header>

 <?php
                include("conni.php");
                mysqli_select_db($conn,"cs2018g2");
                $cid=$_SESSION['cid'];
                $id=$_SESSION['id'] ;

                    $sql1 = "select * from job where job_type='Home Visit' and (current_situation='Processing' or current_situation='') and job.service_agent='$id' and job.center_id='$cid' ORDER BY job_no DESC ";
                    $result=mysqli_query($conn,$sql1);
                    if(!$result){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    if(mysqli_num_rows($result) > 0){
                    include("available_job_display.php");
                    }else{
                      echo "
                            <div class='jumbotron jumbotron-fluid' style='margin-top:90px'>
                              <div class='container'>
                                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                                <p>Not Available New Job!</p>
                              </div>
                            </div>";
                    }


                   mysqli_close($conn);
  ?>


<footer class="w3-container w3-bottom w3-theme w3-margin-top">
 <h4 id="footer" align="center">Powered by<small class="text-danger"> SINGER(PLC)</small></h4>
</footer>

<script>
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}

</script>

</body>
</html>