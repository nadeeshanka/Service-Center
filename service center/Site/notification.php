<?php  
  session_start();
?>
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

    <div class="row">
        <div class=" col-sm-2"  id="list-group">
   				<a href="ActiveHome.php" class="list-group-item "><i class="fa fa-home"></i> <span>Home</span></a>
    			<a href="Profile.php" class="list-group-item "><i class="fa fa-user"></i> <span>Profile</span></a>
   				<a href="notification.php" class="list-group-item active"><button type ="button" class="btn btn-primary" id="btnnoti"><i class="fa fa-bell"></i> Notification</button></a>
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
              $nic=$_SESSION['NIC'];
              $sql3="SELECT complaint_no FROM complaint WHERE NIC_no='$nic' AND feedback IS NULL" ;
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
              <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Your Feedback"></textarea>
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
      </div>  
        
      <div class="notification  text-center">
        <div class='card' style='width:auto'>
          <div class='card-body'>
            <h4 class='card-title'>Notification</h4>
            <?php
               
              include("conni.php");
              mysqli_select_db($conn,"cs2018g2");

              if(empty($_GET['email'])){

                $email=$_SESSION['email'];
              }
              else{
                $email=$_GET['email'];
              }

              $sql1 = "SELECT * FROM notification WHERE email='$email' AND status='new' ORDER BY notificaton_no DESC  ";
              $result1= mysqli_query($conn, $sql1);      
              if (mysqli_num_rows($result1)>0) {
                // output data of each row
                while($data = mysqli_fetch_assoc($result1)) {
            
                  $status="<span class='badge badge-pill badge-danger'>".$data['status']."</span>";
                   
                  echo "<table class='table table-dark table-hover' >
                        <form action='noti_read.php' method='POST'>
                        <input type='hidden' name='noti'  value='".$data['notificaton_no']."' id='noti' >
                        <tbody> 
                        <tr><td width='10%'>".$status."</td><td >".$data['msg']." </td><td width='20%'> ".$data['date']." at ".$data['time']."</td><td width='5%'>
                    <button type='submit' name='btnread' value='read' class='btn btn-dark'><i class='fas fa-times'></i> </button></td></tr></tbody></form></table>";       
                     
                  }
                }      
                ?>      
              </div>
            </div><b>Earlier</b>
            <button id="btnshow" class="btn btn-outline-light text-dark"><i class="fas fa-chevron-down"></i>
            <button id="btnhide" class="btn btn-outline-light text-dark"><i class="fas fa-chevron-up"></i>
          </div>
		    </div>
		
	</div>
</div>
<div class="container-fluid">
    <div class="row header">   
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <div class="Earlier  text-center">
            <div class='card' style='width:auto'>
              <div class='card-body'>
                
                <?php
               
                include("conni.php");
                mysqli_select_db($conn,"cs2018g2"); 
                if(empty($_GET['email'])){

                  $email=$_SESSION['email'];
                }
                else{
                  $email=$_GET['email'];
                }
                

                $sql1 = "SELECT * FROM notification WHERE email='$email' AND status='read' ORDER BY notificaton_no DESC  ";
                $result1= mysqli_query($conn, $sql1);      
                if (mysqli_num_rows($result1)>0) {
                // output data of each row
                  while($data = mysqli_fetch_assoc($result1)) {
               
                    echo "<table class='table table-dark table-hover' >
                          <tbody> 
                        <tr><td width='10%'></td><td >".$data['msg']." </td><td width='20%'> ".$data['date']." at ".$data['time']."</td><td width='5%'></td></tr></tbody></table>";       
                     
                  }
                }      
                ?>      
              </div>
            </div>
          </div>
        </div>
    
  </div>
</div>

<script type="text/javascript">

    $(document).ready( function(){
      $(".Earlier").hide()
       $("#btnhide").hide();
  

    $('#btnshow').click(function(){
     
        $(".Earlier").slideDown("slow");
        $("#btnshow").hide();
        $("#btnhide").show();
      
      });
      $('#btnhide').click(function(){
     
        $(".Earlier").slideUp("slow");
        $("#btnhide").hide();
        $("#btnshow").show();
      
      });

    });
</script>

 
</body>
</html>