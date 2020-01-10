<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">

  <link rel="stylesheet" type="text/css" href="css/Profile.css">

</head>
<body>

<div class="container-fluid">
    <div class="row header">   
        <div class="col-sm-12">
            <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
        </div>
    </div>
 </div>
<div><br></div>

<div class="container-fluid ">
   <?php
               
    session_start();
    include("conni.php");
    mysqli_select_db($conn,"cs2018g2");
   
    

    if(empty($_GET['email'])){

      $mail=$_SESSION['email'];
    }
    else{
      $mail=$_GET['email'];
     
      $_SESSION['email']=$mail;

    }

    if(empty($_GET['id'])){

        $id=$_SESSION['NIC'];
    }
    else{
       $id=$_GET['id'];
      $_SESSION['NIC']=$id;
   }
    
    $sql1 = "SELECT * FROM notification WHERE email='$mail' AND status='new'";
    $result1= mysqli_query($conn, $sql1);      
    $x=mysqli_num_rows($result1);
  ?>

    <div class="row">
        <div class=" col-sm-2"  id="list-group">
   				<a href="ActiveHome.php" class="list-group-item "><i class="fa fa-home"></i> <span>Home</span></a>
    			<a href="Profile.php" class="list-group-item active"><i class="fa fa-user"></i> <span>Profile</span></a>
   				<a href="notification.php" class="list-group-item"><button type ="button" class="btn btn-outline-danger" id="btnnoti"><i class="fa fa-bell"></i> Notification <span class="badge badge-light"><?php echo $x;?></span></button></a>
    			<a href="#" class="list-group-item"> <button type ="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#feedback"><i class="fa fa-comment-alt"></i> <span>Send Feedback</span></button></a>

    	<div class="modal fade" id="feedback">
        <div class="modal-dialog">
          <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Feedback</h4>
          <button type="button" class="close" name="Feedback" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="AddActiveHome.php" method="POST">
            <?php
              include("conni.php");
              mysqli_select_db($conn,"cs2018g2");
              $sql3="SELECT complaint_no FROM complaint WHERE NIC_no='$id' AND feedback IS NULL";
              $result3=mysqli_query($conn,$sql3);
                               
             echo"<div class='form-group'>
                  <label for='SER number'>Your service request number:</label>
                  <select name='Cnum'>
                  <option value=''selected>Select SER number</option>";
                  while ($get = mysqli_fetch_assoc($result3)){
                    echo "<option value='".$get['complaint_no']."'>SER-".$get['complaint_no']." </option>";
                  }   
                  echo"</select>
                  </div>";
            ?>
           
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Your feedback"></textarea>
            </div>
    
            <button type="submit" class="btn btn-danger" name="btnsubmit">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>

          </form>
        </div>
        
      </div>
    </div>
  </div>
    			
		</div>

		<div class="col-sm-10">
			<div id="profile">
			 <img src="img/user_profile.png " width="200px" height="200px">
			
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#edit"><span style="font-size:25px;color:white;" ><i class="fas fa-user-edit"></i></span></button>

        <div class="modal fade" id="edit">
        <div class="modal-dialog">
          <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Personal Details</h4>
          <button type="button" class="close" name="edit" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
            include("edit.php");
          ?>    
        </div>
        
      </div>
    </div>
  </div>



    </div>	
				<div class="user-part text-center">
       				 
              <?php
								
								include("conni.php");
								mysqli_select_db($conn,"cs2018g2");

								$sql = "SELECT * FROM customer WHERE NIC_No='$id'";
								$result = mysqli_query($conn, $sql);
								
								if (mysqli_num_rows($result)==1) {
								// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
										echo "<h4><b>Welcome," . $row["first_name"]. " " . $row["last_name"]."</b></h4>";
                    $_SESSION['name']=$row["first_name"];
										echo"<div class='card' style='width:auto'>
											<div class='card-body'>
											<h4 class='card-title'>Personal info</h4>
											<b>Email :</b>".$row['email']." </br>
										
											<b>NIC :</b>".$row['NIC_No']." </br>
												
											<b> Phone Number :</b>0".$row['tel_no']." </br>
												
											<b> Address :</b>".$row['address1'].",".$row['street'].", ".$row['city']."</br>
											</div>
											</div>
											</div>";

									}
								}	
											
											
							?>
							
				</div>
        </div>
    
  </div>
</div>  


 
</body>
</html>