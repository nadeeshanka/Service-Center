<?php
session_start();
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
$sql="select * from vacancy  ";
$result=mysqli_query($conn,$sql);
$page = $_SERVER['PHP_SELF'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Careers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/all.css">
    
	<link rel="stylesheet" type="text/css" href="css/Careers.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-9 bg-light">
                       <Pre id="head"> <i class="fas fa-headset"> HOTLINE | +94115400400 </i> </Pre>
                 </div>
                <div class="col-sm-3 bg-light"> 
                   
                </div>
        </div>
      </div>
<div class="container-fluid">
    <div class="row header">   
        <div>
            <img src="img/slogo.png" class="float-left" style="width:450px; height:80px;">
        </div>
    </div>
</div>

      <nav class="navbar navbar-expand-md bg-light ">
        <a class="navbar-brand" href="Home.html">
            <span style="font-size: 20px; color: rgb(39, 16, 170);">
              <i class="fas fa-home"></i></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="Services.php">Services</a>
              </li>   
            <li class="nav-item">
              <a class="nav-link" href="PaymentDetails.php">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Careers.php">Careers </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs.php">About Us </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactUs.php">Contact Us</a>
            </li>    
          </ul>
        </div>  
      </nav>
     <div class="container-fluid"> 
            <div class="space"> 
          </div> 
                  <div class="row content">
                        
                        <div class="col-sm-6" >
                            <img src="img/career.png" class="float-right" style="width:650px; height:270px;">
                        </div>
                        <div class="col-sm-6" >
                        <div class="top">
                            <h3 ></h3><b>JOIN WITH US<br> FOR <br><i>BEST SERVICE</i><b></h3>
                        </div>
                        </div>
                    </div>
                </div>
        

            <div class="container-fluid">
            <div class="space">
            </div>

     <table class="table">
        <thead>
              <tr style="background-color:#c5cae9;">
                <th>Position</th>
                <th>Job description</th>
                <th>Opening date</th>
                <th>Closing date</th>
              </tr>
        </thead>
		<?php
			if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
                    <td><?php echo $rows['position']; ?> </td>
					<td><?php echo $rows['description']; ?></td>
                    <td><?php echo $rows['opening_date']; ?> </td>
					<td><?php echo $rows['closing_date']; ?> </td>
				</tr>  
		<?php
			}
			}
		?>
     
  </table>
</div>

           
              <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12 bg-dark">
                      <h4 id="footer" class="text-light">Powered by<small class="text-danger"> SINGER(PLC)</small></h4>
                      
                    </div>
                  </div>
              </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-5 bg-dark">
                            <pre class="text-light"><i class="fab fa-skype text-info" > SKYPE</i> singercallcenter  <i class="fas fa-envelope text-danger"> Email</i> SINGERservice@SINGERSL.COM</pre> 
                          </div>   
                          <div class="col-sm-7 bg-dark">
                             
                              <pre id="pre2"  class="text-light"><i class="fab fa-facebook-square"></i>  <i class="fab fa-twitter"></i>  <i class="fab fa-youtube"></i>  <i class="fab fa-skype"></i></pre>
                          
                          </div>
                        </div>
                    </div>
          
      
        
        
    </body>
    </html>