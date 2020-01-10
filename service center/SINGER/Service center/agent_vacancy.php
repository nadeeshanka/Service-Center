
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
  <link rel="stylesheet" type="text/css" href="css/agent_vacancy.css">
  
</head>

<body >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 ">
        <img src="img/slogo.png" class="float-left" style="width:350px;height:70px;">
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
                  Current Jobs 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="agents_Registed.php">
              <span style="font-size: 20px;color:RGB(15, 84, 232);">
                <i class="fas fa-diagnoses"></i></span> 
                <span style="font-size: 20px;color:RGB(0, 0, 0);">
                  Service Agents</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment_bills.php">
               <span style="font-size: 20px;color:RGB(220, 120, 0);">
                <i class="fab fa-amazon-pay"></i></span> 
                 Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
              <span style="font-size: 20px;color:rgb(214, 13, 187);">
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
              <a class="nav-link " href="agents_add.php">
                <span style="font-size: 25px;color:rgb(0,0,152);">
                <i class="fas fa-user-plus"></i>
                </span>  
                <span style="font-size:18px;color:rgb(0,0,0);">Add Agents</span>
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link " href="agents_Registed.php">
              <span style="font-size: 25px;color:rgb(0,0,152);">
              <i class="fas fa-user-check"></i>
              </span>
               <span style="font-size:18px;color:rgb(0,0,0);">Registed Agents</span>
              </a>
            </li>
            <br>
             <li class="nav-item">
              <a class="nav-link active " href="agent_vacancy.php">
              <span style="font-size: 25px;">
                <i class="fas fa-address-card"></i>
                </span>
              <span style="font-size:18px;"> Job Vacancies</span>
              </a>
            </li>
            <br>
          </ul>
        </div>  
      </div>
                    


  <div  class="col-sm-10">
      <div class="card bg-light text-dark" style="height:50px;">
        <div class="card-body"> 
          <p id="p1">Service-Agent / Job Vacancies</p>
        </div>
      </div>
      <div id="space"></div>
      <div class="container-fluid">
        <div class="row" >
          <div class="col-sm-2"></div>     
          <div id="form" class="col-sm-8">
             <form action="insert_vacancy.php" method="POST">  
     

              <div class="form-group">
                <label for="position"><b>Position </b></label>
                <input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" required="">
               </div>
              
                <div class="form-inline">
                  <label for="odate"><b>Opening date - </b></label>
                  <input type="date" class="form-control" id="odate"  name="odate" min="<?php echo date('Y-m-d');?>" required>
                </div>
                <div id="space"></div>
                <div class="form-inline">
                  <label for="cdate"><b>Closing date - </b></label>
                  <input type="date" class="form-control" id="cdate"  name="cdate" min="<?php echo date('Y-m-d');?>"  required>
                </div>
             
                <div class="form-group">
                  <label for="description"><b>Vacancy description</b></label>
                  <textarea class="form-control" rows="2" id="description" placeholder="Vacancy description" name="description" required=""></textarea>
                </div>

                <div id="space"></div>
                <button type="submit" name="btnpost" class="btn btn-warning" align="text-center">Post</button>
                <button type="reset" id="reset" class="btn btn-primary">Reset</button>

            </form>
            <div id="space"></div>
          </div>
        <div class="col-sm-2"></div> 
        </div></div>
      </div>
    </div>

 </div>
  <div id="space"></div>
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