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

    <title>JOB Details</title>
    <link rel="stylesheet" type="text/css" href="css/JOB_details.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-9 bg-light" >
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
            <p class="card-text" id="p2">Please enter Job number to </br> quick search</p>
            <form  class="form-inline float-right" action="JobDetails.php" method="post">
              <div class="input-group">
                <input class="form-control "type="text" placeholder="Job No..." name="search" required>
                <div class="input-group-btn">
                  <button class="btn btn-primary" type="submit"  name="btnsearch" value="Search"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>   
            <br>
          </div>
        </div>            
        <div class="card" style="width:auto ;"> 
          <ul class="nav flex-column nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="admin.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="JobDetails.php">
		          <span style="font-size: 20px;">
					      <i class="fas fa-wrench "></i>
				      </span>JOB Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_Replacement.php">
				      <span style="font-size: 20px;color:rgb(128, 122, 122)">
                <i class="fas fa-cart-plus"></i>
              </span> Replacements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_Feedback.php">
              <span style="font-size: 20px;color:rgb(32, 206, 32)">
                <i class="fas fa-comment-dots"></i>
              </span> Feedbacks</a>
            </li>
			      <li class="nav-item">
              <a class="nav-link" href="admin_History.php"> 
              <span style="font-size: 20px; color:rgb(134, 11, 134);">
                <i class="fas fa-boxes"></i>
              </span> Products</a>
            </li>
			      <li class="nav-item">
              <a class="nav-link" href="admin_Customer.php">
              <span style="font-size: 20px;color:black;">
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
            
        if(isset($_POST['btnsearch'])){
          $search=$_POST['search'];

          $sql1 = "SELECT * FROM job WHERE job_no LIKE '%$search%'";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
            echo "<div class='table-responsive'>";
            echo "<table class='table table-hover'>
                  <thead class='table-primary'>
                  <tr>
                  <th style='background-color:RGB(0,0,220);color:white;'>Job No </th>
                  <th>Service Request NO</th>
                  <th>Center ID</th>
                  <th>Model-Serial Number</th>
                  <th>Warranty</th>
                  <th>Job Type</th>
                  <th>Job Description</th>
                  <th>Current Situation</th>
                  </tr>
                  <thead>";
            while($row = mysqli_fetch_array($result))
            {
              echo "<tbody>";
              echo "<tr>";
              echo "<td>JO-" . $row['job_no'] . "</td>";
              echo "<td>SER-" . $row['complain_no'] . "</td>";
              echo "<td>" . $row['center_id'] . "</td>";
              echo "<td>" . $row['serial_no'] . "</td>";
              echo "<td>" . $row['warranty'] . "</td>";
              echo "<td>" . $row['job_type'] . "</td>";
              echo "<td>" . $row['job_description'] . "</td>";
              if($row['current_situation']==""){
                $situation="Parts not available";
              }else{
                
                $situation=$row['current_situation'];
              }
              echo "<td>" . $situation. "</td>";
              echo "</tr>";
              echo "</tbody>";
            }
            echo "</table>";
            echo "</div>";
          }
          else{
              echo "<div class='jumbotron jumbotron-fluid'>
              <div class='container'>
                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                <p>*Sorry,  nothing matched your search terms. Please try again with different job number..</p>
            </div>
            </div";
            
          }
        }

        else{  
          $sql2 = "select * from job  ORDER BY job_no DESC LIMIT 8";

          $result=mysqli_query($conn,$sql2);
          if(!$result){
            die("Inavlid query".mysqli_error($conn)); 
          }
          echo "<div class='table-responsive'>";
          echo "<table class='table table-hover'>
                <thead class='table-primary'>
                <tr>
                  <th>Job No </th>
                  <th>Service Request NO</th>
                  <th>Center ID</th>
                  <th>Model-Serial Number</th>
                  <th>Warranty</th>
                  <th>Job Type</th>
                  <th>Job Description</th>
                  <th>Current situation</th>
                </tr>
                </tr>
                <thead>";
          while($row = mysqli_fetch_array($result))
          {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>JO-" . $row['job_no'] . "</td>";
            echo "<td>SER-" . $row['complain_no'] . "</td>";
            echo "<td>" . $row['center_id'] . "</td>";
            echo "<td>" . $row['serial_no'] . "</td>";
            echo "<td>" . $row['warranty'] . "</td>";
            echo "<td>" . $row['job_type'] . "</td>";
            echo "<td>" . $row['job_description'] . "</td>";
             if($row['current_situation']==""){
                $situation="Parts not available";
              }else{
                
                $situation=$row['current_situation'];
              }
              echo "<td>" . $situation. "</td>";
            echo "</tr>";
            echo "</tbody>";
          }
          echo "</table>";
          echo "</div>";
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