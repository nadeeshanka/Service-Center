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
                 <span style="font-size: 20px;color:RGB(0, 0, 0)">
                  Payments</span>
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
              <a class="nav-link" href="payment_bills.php">
                <span style="font-size: 25px;color:rgb(255,10,10);">
                <i class="fas fa-file-invoice-dollar"></i>
                </span>  
                <span style="font-size:18px;color:rgb(0,0,0);">Unpaid Bills</span>
              </a>
            </li>
              <br>
        
            <li class="nav-item">
              <a class="nav-link active" href="payment_paidbills.php">
              <span style="font-size: 25px;">
              <i class="fas fa-clipboard-check"></i>
               </span>
               <span style="font-size:18px;">Paid Bills</span>
              </a>
            </li>
          </ul>
        </div>  
      </div>
                    


  <div  class="col-sm-10">
      <div class="card bg-light text-dark" style="height:50px;">
        <div class="card-body"> 
          <p id="p1">Payments / Paid Bills</p>
        </div>
      </div>
      <div id="space"></div>
            
            <?php
                include("conni.php");
                mysqli_select_db($conn,"cs2018g2");
                $cid=$_SESSION['USERNAME'];
            
                    $sql1 = "select * from bill where center_id='$cid' and status='Paid' ORDER BY job_no DESC  ";
                    $result=mysqli_query($conn,$sql1);
                    if(!$result){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    if(mysqli_num_rows($result) > 0){
                    include("payment_paidbill_display.php");
                    }else{
                      echo "
                            <div class='jumbotron jumbotron-fluid'>
                              <div class='container'>
                                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                                <p><h4>Not Available </h4>Current Bills</p>
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