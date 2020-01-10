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

    <title>Feedbacks</title>
    <link rel="stylesheet" type="text/css" href="css/admin_Feedback.css">
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
            <p class="card-text" id="p2">If you need to know comments about your after service  please enter SER number</p>
            <form  class="form-inline float-right" action="admin_Feedback.php" method="post">
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
              <a class="nav-link active" href="admin_Feedback.php">
              <span style="font-size: 20px;">
                <i class="fas fa-comment-dots"></i>
              </span> Feedbacks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_History.php"> 
              <span style="font-size: 20px; color:rgb(134, 11, 134);"><i class="fas fa-boxes"></i></span> Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_Customer.php">
              <span style="font-size: 20px;color:black;"><i class="fas fa-users"></i></span> Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_Backlist.php">
              <span style="font-size: 20px ;color:red;"><i class="fas fa-user-lock"></i></span> Blacklist</a>
            </li>
          </ul>
        </div>
      </div>
 
      <div class="col-sm-10">
      <br>
      <?php      
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2"); 
        if(isset($_POST['btnsearch'])){
          $search=$_POST['search'];
          $sql1 = "select * from complaint where complaint_no like '%$search%' and feedback is not null ";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_array($result))
            {
              echo"<div class='media border p-3'>";
              echo"<img src='img/feedback.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;''>";
              echo"<div class='media-body'>";
              echo"<h5>Service Request: SER-" . $row['complaint_no'] ."<br><small><i>Posted on ". $row['feedback_date'] ."</i></small></h5>";
              echo"<p>" . $row['feedback'] ."</p> ";     
              echo"</div>";
              echo"</div>";
              echo"<br>";
            }
          }
          else{    
             echo "<div class='jumbotron jumbotron-fluid'>
              <div class='container'>
                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                <p>*Sorry,Nothing matched your search terms. Please try again with different SER number..</p>
            </div>
            </div";
          }
        }
        else{
          $sql = "select * from complaint where feedback is not null ORDER BY feedback_date DESC LIMIT 4";

          $result=mysqli_query($conn,$sql);
          if(!$result){
            die("Inavlid query".mysqli_error($conn)); 
          }
              
          while($row = mysqli_fetch_array($result))
          {
            echo"<div class='media border p-2'>";
            echo"<img src='img/feedback.png' alt='John Doe' class='mr-2 mt-2 rounded-circle' style='width:60px;''>";
            echo"<div class='media-body'>";
            echo"<h5>Complaint_No:" . $row['complaint_no'] ."<br><small><i>Posted on ". $row['feedback_date'] ."</i></small></h5>";
            echo"<p>" . $row['feedback'] ."</p> ";     
            echo"</div>";
            echo"</div>";
            echo"<br>";
          }
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