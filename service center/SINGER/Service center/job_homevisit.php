 <?php
    session_start();
  ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">


  <title>Sevice Center</title>
  <link rel="stylesheet" type="text/css" href="css/complains.css">
  
</head>

<body >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 ">
        <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
      </div>
      <div class="col-sm-7 ">
        <nav class="navbar navbar-expand-sm  navbar-light justify-content-center">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="available_complain.php">
                <span style="font-size: 20px;color:RGB(91, 255, 51)">
                  <i class="fas fa-bolt"></i></span>
                   Service Requests
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="job_servicecenter.php">
              <span style="font-size: 20px;color:RGB(232, 39, 83)">
                <i class="fas fa-check-double"></i></span>
                <span style="font-size: 20px;color:RGB(0, 0, 0)">
                  Current Jobs </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="agents_Registed.php">
              <span style="font-size: 20px;color:RGB(15, 84, 232)">
                <i class="fas fa-diagnoses"></i></span> 
                 Service Agents  
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment_bills.php">
               <span style="font-size: 20px;color:RGB(220, 120, 0)">
                <i class="fab fa-amazon-pay"></i></i></span> 
                 Payments 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
              <span style="font-size: 20px;color:rgb(214, 13, 187)">
                <i class="fas fa-sign-out-alt"></i></span> 
                Log Out 
               </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row content">
      <div class="col-sm-2 ">
        <div class="card" style="width:auto">
          <div class="card-body">

             <h3 class="card-title"><i class="fas fa-users-cog"></i>  Service Center</h3>     
          </div> 
        </div>

        <div class="card" style="width:auto;">

          <ul class="nav flex-column nav-pills">
            <li class="nav-item">
              <a class="nav-link " href="job_servicecenter.php">
                <span style="font-size: 25px;color:rgb(204,0,102);">
                <i class="fas fa-users-cog"></i>
                </span>  
                <span style="font-size:18px;color:rgb(0,0,0);">On Our Hand</span>
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link active " href="job_homevisit.php">
              <span style="font-size: 25px;">
              <i class="fas fa-home"></i>
               </span>
               <span style="font-size:18px;">Home Visit </span>
               
              </a>
            </li>
            <br>
             <li class="nav-item">
              <a class="nav-link " href="job_finished.php">
              <span style="font-size: 25px;color:rgb(204,0,102);">
              <i class="fas fa-check-square"></i>
              </span>
               <span style="font-size:18px;color:rgb(0,0,0);">Finished Job</span>
              </a>
            </li>
              <br>
              <li class="nav-item">
              <a class="nav-link " href="job_released.php">
              <span style="font-size: 25px;color:rgb(204,0,102);">
              <i class="fas fa-dolly"></i>
              </span>
               <span style="font-size:18px;color:rgb(0,0,0);"> Released Job</span>
              </a>
            </li>
            <br>
            <li class="nav-item">
              <a class="nav-link " href="job_replacement.php">
              <span style="font-size: 25px;color:rgb(210,120,0);">
              <i class="fas fa-cart-arrow-down"></i>
               </span>
               <span style="font-size:18px;color:rgb(0,0,0);">Replacement</span>
              </a>
            </li>
          </ul>
        </div>  
      </div>
                    


  <div  class="col-sm-10">
      <div class="card bg-light text-dark" style="height:50px;">
        <div class="card-body"> 
          <p id="p1">Current Jobs / Home-Visit</p>
        </div>
      </div>
      <div id="space"></div>
            
            <?php
                include("conni.php");
                mysqli_select_db($conn,"cs2018g2");
                $cid=$_SESSION['USERNAME'];
            
                    $sql1 = "select * from job where job_type='Home Visit' and (current_situation='Processing' or current_situation='') and center_id='$cid' ORDER BY job_no DESC  ";
                    $result=mysqli_query($conn,$sql1);
                    if(!$result){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    if(mysqli_num_rows($result) > 0){
                    include("job_homevisit_display.php");
                    }else{
                      echo "
                            <div class='jumbotron jumbotron-fluid'>
                              <div class='container'>
                                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                                <p><h4>Not Available </h4>Current Jobs</p>
                              </div>
                            </div>";
                    }


                   mysqli_close($conn);
               ?>
      </div>
    </div>

 </div>

  <div class="container-fluid">
    <div class="row footer" >
      <div class="col-sm-7 ">
        <h4 id="footer" >Powered by<small class="text-danger"> SINGER(PLC)</small></h4>
      </div>   
      <div class="col-sm-5">
                     
        <pre id="pre1" ><i class="fab fa-facebook-square"></i>  <i class="fab fa-twitter"></i>  <i class="fab fa-youtube"></i>  <i class="fab fa-skype"></i></pre>
                  
      </div>
    </div>
  </div>
</body>
</html>     