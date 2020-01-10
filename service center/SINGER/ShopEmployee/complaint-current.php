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
  <title>User-Assistant</title>
  <link rel="stylesheet" type="text/css" href="css/complaint-current.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row header">
      <div class="col-sm-5" >
        <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
      </div>
      <div class="col-sm-6">
        <nav class="navbar navbar-expand-sm navbar-light justify-content-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="newComplaint.php">
                <span style="font-size: 20px;color:orangered">
                  <i class="fas fa-wrench "></i>
                </span>
                <span style="font-size: 20px;color:RGB(0, 0, 0);">
                Service Requests</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">
                <span style="font-size: 20px;color:rgb(214, 13, 187)"> 
                  <i class="fas fa-box"></i>
                </span> Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.php">
                <span style="font-size: 20px;color:rgb(20, 2, 2)"> 
                  <i class="fab fa-amazon-pay"></i>
                </span> Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">
                <span style="font-size: 20px;color:rgb(32, 206, 32)"> 
                  <i class="fas fa-comment-dots"></i>
                </span> Feedbacks
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blacklist.php">
                <span style="font-size: 20px ;color:red;">
                  <i class="fas fa-user-lock"></i>
                </span> Blacklist
              </a>  
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-sm-1">
     
          <div >
        <a href="../login.php">
           <span style="font-size: 15px;color:RGB(0, 0, 0);">
                Log Out</span>
         <span style="font-size: 25px; color:blue;">
          <i class="fas fa-sign-out-alt"></i>
        </span></a>
      </div>
               
      </div>
    </div>
  </div>
  
  <div class="container-fluid" >
    <div class="row content">
      <div class="col-sm-2 ">
        <div class="card" style="width:auto">
          <div class="card-body">

             <h3 class="card-title"><span style="color:blue;"><i class="fas fa-user"></i></span> Branch Assistant</h3>     
          </div> 
        </div>

        <div class="card" style="width:auto;">

          <ul class="nav flex-column nav-pills">
            <li class="nav-item">
              <a class="nav-link " href="newComplaint.php">
                <span style="font-size: 20px;color:orangered;">
                    <i class="fas fa-plus-circle"></i> New 
                </span> 
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link active " href="complaint-current.php">
				<span style="font-size: 20px;">
                    <i class="fas fa-play-circle"></i> Current
                </span>
              </a>
            </li>

              <br>
          </ul>
        </div>
        <div class="card" style="width:auto;">
          <div class="card-body">
            <p class="card-text" id="p2">Please enter Service request number For quick search</p>
            <form  class="form-inline float-right" action="complaint-current.php" method="post">
              <div class="input-group">
                <input class="form-control "type="text" placeholder="SER No..." name="search" required>
                <div class="input-group-btn">
                  <button class="btn btn-primary" type="submit"  name="btnsearch" value="Search"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>   
            <br>
          </div>
        </div>        
        <div class="card" style="width:auto;">
          <h4 class="links">Quick Links</h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="https://www.singersl.com " target="_blank">
                  <i class="fas fa-external-link-alt"></i>
                  <h7 class="text-danger"> SINGER<small class="text-primary">Srilanka</small></h7></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="D:\Project\Bootstrap\Site\index.html" target="_blank">
                  <i class="fas fa-external-link-alt"></i>
                  <h7 class="text-danger"> SINGER<small class="text-primary">Service</small></h7></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://www.singerfinance.com" target="_blank">
                  <i class="fas fa-external-link-alt"></i>
                  <h7 class="text-danger"> SINGER<small class="text-primary">Finance</small></h7></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.google.lk/maps/@6.9218386,79.8562055,13z" target="_blank">
                  <span style="color: rgb(15, 148, 11);">
                    <i class="fas fa-map-marked-alt"></i>
                  </span> Locations</a>
              </li>
            </ul>
        </div>
			</div>
 
      <div class="col-sm-10">
        <div class="card bg-light text-dark"style="height:50px;">
          <div class="card-body"> 
            <p id="p1">Service Requests / Current</p>
          </div>
        </div>
        <br>
          <div>
            <?php
                include("conni.php");
                mysqli_select_db($conn,"cs2018g2");
            
                if(isset($_POST['btnsearch'])){
                    $search=$_POST['search'];

                    $sql1 = "select * from complaint where complaint_no like '%$search%'";

                    $result=mysqli_query($conn,$sql1);
                    if (mysqli_num_rows($result) > 0) {

                        include("complaint_currentDisplay.php");
                    }
                    else{
                        echo"<h4 id='error' class='text-danger' >*Please enter valid complaints Number</h4>";
                    }
                }

                else{  
                    $sql2 = "select * from complaint  ORDER BY complaint_no DESC LIMIT 9";
                    $result=mysqli_query($conn,$sql2);
                    if(!$result){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    include("complaint_currentDisplay.php");
                }  
                mysqli_close($conn);
          
            ?>
        </div>
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