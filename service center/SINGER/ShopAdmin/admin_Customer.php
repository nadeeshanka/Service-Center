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

    <title>Customer</title>
    <link rel="stylesheet" type="text/css" href="css/admin_Customer.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 bg-light">
        <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
      </div>
      <div class="col-sm-3 bg-light">
        <form id="form1" class="form-inline" action="admin_find.php"  method="post">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Full SER Number..." name="find" required>
            <div class="input-group-btn">
              <button class="btn btn-danger" type="submit" name="btnfind" value="Search"><i class="fas fa-search"></i></button>
            </div>
          </div>
          <div id="space">  </div>    
        <div >
        <a href="../login.php"> <span style="font-size: 30px; color:blue;">
          <i class="fas fa-sign-out-alt"></i>
        </span></a>
      </div>
        </form>             
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row content">
      <div class="col-sm-2 bg-light">
        <div class="card" style="width:auto">
          <div class="card-body">
            <h2 class="card-title"><i class="fas fa-user-tie"></i> Branch Manager</h2>      
          </div> 
        </div>
        <div class="card" style="width:auto;">
          <div class="card-body">
            <p class="card-text" id="p2">Please enter customer NIC number to view his or her details</p>
            <form  class="form-inline float-right" action="admin_Customer.php" method="post">
              <div class="input-group">
                <input class="form-control "type="text" placeholder="NIC Number..."  name="search" required>
                <div class="input-group-btn">
                  <button class="btn btn-primary" type="submit" name="btnsearch" value="Search"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>   
            <br>
          </div>
        </div> 
        <div class="card" style="width:auto; height:auto;">
          <ul class="nav flex-column nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="admin.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="JobDetails.php">
              <span style="font-size: 20px;color:orangered">
                <i class="fas fa-wrench "></i>
              </span>JOB Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin_Replacement.php">
              <span style="font-size: 20px;color:rgb(128, 122, 122)">
                <i class="fas fa-cart-plus"></i>
              </span> Replacements</a>
            </li>
              <li class="nav-item">
              <a class="nav-link " href="admin_Feedback.php">
              <span style="font-size: 20px;color:rgb(32, 206, 32)">
                <i class="fas fa-comment-dots"></i>
              </span> Feedbacks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin_History.php"> 
              <span style="font-size: 20px;color:rgb(134, 11, 134);">
               <i class="fas fa-boxes"></i>
              </span> Products</a>
                </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin_Customer.php">
              <span style="font-size: 20px;">
                <i class="fas fa-users"></i>
              </span> Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_Backlist.php">
              <span style="font-size: 20px ;color:red;">  
                <i class="fas fa-user-lock"></i>
              </span> Blacklist</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-10">
      <br>
      <?php
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");
        //Search 
        if(isset($_POST['btnsearch'])){
          $search=$_POST['search'];
          $sql2 = "select * from customer where NIC_No like '%$search%'";
          $result=mysqli_query($conn,$sql2);
          if (mysqli_num_rows($result) > 0) {  
            include("C_Display.php");  
          }
          else{
             echo "<div class='jumbotron jumbotron-fluid'>
              <div class='container'>
                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                <p class=text-danger>*Sorry,nothing matched your search terms. Please try again with different NIC Number.</p>
            </div>
            </div";
          }
        }
        //End
        else{   
          $sql_c = "select * from customer ORDER BY date DESC LIMIT 9";

          $result=mysqli_query($conn,$sql_c);
          if(!$result){
            die("Inavlid query".mysqli_error($conn)); 
          }
          include("C_Display.php");

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