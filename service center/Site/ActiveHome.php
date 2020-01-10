<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <title>Active Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/all.css">
   
    <link rel="stylesheet" type="text/css" href="css/ActiveHome.css">
</head>
<body>

    
      <div class="container-fluid">
        <div class="row">
                <div class="col-sm-9 bg-light">
                       <Pre id="head"> <i class="fas fa-headset"> HOTLINE | +94115400400 </i> </Pre>
                 </div>
                <div class="col-sm-3 bg-light"> 
                    <pre id="pre1"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#myProfile"><i class="fas fa-user-circle" style = "font-size:25px; color:blue;"> </i></button>|<button type="button" class="btn btn-light" ><i class="fas fa-map-marker-alt "style = "font-size:15px; color:green;"> Location</i> </button>|<button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal"><i class="fas fa-comment-alt"> Feedback</i></button></pre>
                </div>
        </div>
      </div>
	 

      <!-- The Modal -->
	  
      <div class="modal fade" id="myModal">
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
              <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="Your feedback"></textarea>
            </div>
    
            <button type="submit" class="btn btn-danger" name="btnsubmit">Submit</button>
            <button type="reset"class="btn btn-primary">Reset</button>

          </form>
        </div>
        
      </div>
    </div>
  </div>
  
   <!-- The Modal -->
	  
      <div class="modal fade" id="myProfile">
        <div class="modal-dialog">
          <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
			<div class="row">
			 <div class="col-sm-4">
          <img src="img/user_profile.png" class="float-left" style="width:90px;height:90px;">
        </div>
          <div class="col-sm-4">
         
        </div>

				<div class="col-sm-4">
					<h4 class="modal-title">WELCOME </h4>
          <h5>
							<?php
								echo $_SESSION['name'] ;
							?>
					</h5>
				</div>
			
        </div>
      </div>
		
        <!-- Modal body -->
        <div class="modal-body">
         
            <div >
				<a href="Profile.php" class="list-group-item disabled">Your Profile</a>
				<a href="ForgotPwd.php" class="list-group-item disabled">Change Password</a>
				<a href="Home.html" class="list-group-item disabled">Log Out</a>
			</div>
		</div>
        
		<!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
		
      </div>
    </div>
  </div>
  
  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-12" bg-light>
        <img src="img/slogo.png" class="float-left" style="width:400px;height: 80px;">
                  
      </div>   
                
    </div>
  </div>
      
 
      <nav class="navbar navbar-expand-md bg-light ">
        <a class="navbar-brand" href="ActiveHome.php">
            <span style="font-size: 20px; color: rgb(39, 16, 170);">
              <i class="fas fa-home"></i></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ">
            
            <li class="nav-item">
                <a class="nav-link" href="Services_active_pg.php">Services</a>
              </li>   
            <li class="nav-item">
              <a class="nav-link" href="PaymentDetails_active_pg.php">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Careers_active_pg.php">Careers </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs_active_pg.php">About Us </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactUs_active_pg.php">Contact Us</a>
            </li> 
             
          </ul>
        </div>  
      </nav>


          <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
               
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/assis.jpg" alt="Los Angeles" width="1525px" height="400px" >
                </div>
                <div class="carousel-item">
                  <img src="img/slide3.jpeg" alt="Chicago" width="1525px" height="400px">
                </div>
                <div class="carousel-item">
                  <img src="img/bet.jpg" alt="New York" width="1525px" height="400px">
                </div>
              
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  
                  <span class="carousel-control-prev-icon"></span>
                  
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 ">            
                <br>
              </div>
          </div>
          </div>
            <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3 ">
					<div class="card" style="width:250px; height:360px;color:black;">
                          <a href="Complain.php"><img class="card-img-top" src="img/ServiceRequest.jpg" alt="Card image" style="width:95%"></a>
                          <div class="card-body">
                            <h4 class="card-title">Service Request</h4>
                            <p class="card-text" >Request our mobile service or after service quickly</p>
                        </div>
                        </div>
                  </div>
                  <div class="col-sm-3 ">
				    <div class="card" style="width:250px;height:360px; color:black;">
							<a href="status_check.php"><img class="card-img-top" src="img/Snap-surveys-solutions.png" alt="Card image" style="width:100%"></a>
                          <div class="card-body">
                            <h4 class="card-title">Current Situation</h4>
                            <p class="card-text">Check your service request's current situation and job status</p>
                        </div> 
                        </div>
                   </div>
                  <div class="col-sm-3">
					<div class="card" style="width:250px; height:360px; color:black;">
                          <a href="warranty.php"><img class="card-img-top" src="img/warranty.png" alt="Card image" style="width:100%;"></a>
                          <div class="card-body">
                            <h4 class="card-title">Warranty</h4>
                            <p class="card-text">Check product warranty and enjoy our free after services</p>
                        </div>
                        </div>
                    </div>
                  <div class="col-sm-3">
					<div class="card" style="width:250px;height:360px; color:black;">
                          <a href="payment.php"><img class="card-img-top" src="img/online-payments.jpg" alt="Card image" style="width:100%;height: 200px"></a>
                          <div class="card-body">
                            <h4 class="card-title">Payments</h4>
                            <p class="card-text">Pay online verify methods as well as save your money and time.</p>
                        </div>
                        </div>
                   </div>
                </div>  
              </div>
              <div class="space">
              
               </div>    
              <div class="container-fluid">
                <div class="row">

                  <div class="col-sm-6 "> 
                        <div>      
                           <h4 class="bg-secondary text-white text-center" > WHAT'S NEW...</h4>
                        </div>
                        
                            <div id="demo1" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                  <li data-target="#demo1" data-slide-to="0" class="active"></li>
                                  <li data-target="#demo1" data-slide-to="1"></li>
                                  <li data-target="#demo1" data-slide-to="2"></li>
                                  <li data-target="#demo1" data-slide-to="3"></li>
                                  <li data-target="#demo1" data-slide-to="4"></li>
                                  <li data-target="#demo1" data-slide-to="5"></li>
                                  <li data-target="#demo1" data-slide-to="6"></li>
                                  <li data-target="#demo1" data-slide-to="7"></li>
                                  <li data-target="#demo1" data-slide-to="8"></li>
                                  <li data-target="#demo1" data-slide-to="9"></li>
                                  <li data-target="#demo1" data-slide-to="9"></li>
                    
                                  
                                 
                                </ul>
                                
                                <!-- The slideshow -->
                                <div class="ad" class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="img/slide5.jpg" alt="Los Angeles">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide6.jpg" >
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide7.jpg"  >
                                  </div>
                                  <div class="carousel-item ">
                                    <img src="img/slide8.jpg" >
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide9.jpg" >
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide10.jpg"  >
                                  </div>
                                  <div class="carousel-item ">
                                    <img src="img/slide11.jpg">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide12.jpg">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/slide13.jpg">
                                  </div>
                                  <div class="carousel-item">
                                  <img src="img/slide14.jpg">
                                    </div>
                                  <div class="carousel-item">
                                    <img src="img/slide15.jpg">
                                  </div>
                                
                                
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                                    
                                    <span class="carousel-control-prev-icon"></span>
                                    
                                </a>
                                <a class="carousel-control-next" href="#demo1" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                             </div> 
                             <br>    
                        </div> 
                  </div>
                  <div class="col-sm-6 ">  
                  <div>    
                      <h4 class="bg-secondary text-white text-center"> LATEST NEWS...</h4>
                  </div>
					
						<div class="container">
    <div class="row">
		
	</div>
	<div class="row">
		<div class="col-md-9">
		    <div class="row mb-2">
		        <div class="col-md-12">
		            <div class="card">
		                <div class="card-body">
		                    <div class="row">
		                        <div class="col-md-4">
		                            <img src="img/hw.jpg" width="100%">
		                        </div>
		                        <div class="col-md-8">
		                            <div class="news-title">
		                                <a href="https://consumer.huawei.com/en/phones/p20" target="_blank"><h5> Huawei P20</h5></a>
		                            </div>
		                           
		                     
		                            <div class="news-content">
		                                <p class="w3-animate-zoom">Huawei P20 pro is the first triple camerasmart phone with AI technology <span id="dots1">...</span> <span id="more">launched by Huawei. It has a 6.1-inch OLED display with a resolution of 1080x2240 pixels and sports a notch at the top. The smartphone is powered by Huawei's Kirin 970SoC, an octa-core processor clocked at 1.8GHz. There is 6GB of RAM and 128GB of internal storage which isn't expandable. The P20 Pro runs Android 8.1 Oreo and has Huawei's custom EMUI 8.1 on top. It is a dual-SIM device and has two nano SIM slots. The smartphone is powered by a 4000mAh battery and can be charged via the USB Type-C port. Its triple camera system at the back consists of an 8-megapixel sensor with a telephoto lens, a 40-megapixel RGB sensor and a 20-megapixel monochrome sensor. The selfie camera has a 24-megapixel sensor.  </span></p>
		                            </div>
		                            <div class="news-buttons">
		                                <button  id="myBtn" class="btn btn-outline-danger btn-sm">Read more</button>
                                    <button  id="myBtn1" class="btn btn-outline-danger btn-sm">Read less</button>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="row mb-2">
		        <div class="col-md-12">
		            <div class="card">
		                <div class="card-body">
		                    <div class="row">
		                        <div class="col-md-4">
		                            <img src=" img/singers.jpg" width="100%">
		                        </div>
		                        <div class="col-md-8">
		                            <div class="news-title">
		                                <h5>Singer Established Island wide Service Centers  </h5></a>
		                            </div>
		                            
		                            <div class="news-content">
		                                <p> Singer operates more than 385 service centers island wide <span id="dots2">...</span><span id="more1"> and in this centers Repair two type products </br>
                                    <b>Electronic-</b>Any model of electronic product such as TV's, Audios, DVD, or any other electronic product sold by any of the outlets of Singer (Sri Lanka) PLC will be accepted for servicing or repairs.</br>

                                    <b>Electrical-</b>Any model of electrical product such as Refrigerator, Electric Ovens, or any other electrical product sold by any of the outlets of Singer (Sri Lanka) PLC will be accepted for servicing or repairs.</span></p>
		                            </div>
		                             <div class="news-buttons">
                                    <button  id="myBtn2" class="btn btn-outline-danger btn-sm">Read more</button>
                                    <button  id="myBtn3" class="btn btn-outline-danger btn-sm">Read less</button>
                                </div>
		                        </div>

		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    
	
		      
</div>
                  </div>
              </div>
             </div>  
					
                  </div>
              </div>
             </div>  
             <div class="container-home ">
                <div class="row">
                  <div class="col-sm-12">
                      <img src="img/Ad.jpg" width="100%">
                    
                  </div>
                </div>
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
  <script type="text/javascript">
    $(document).ready( function(){
      $("#more").hide();
      $("#more1").hide();
      $("#myBtn1").hide();
      $("#myBtn3").hide();

    $('#myBtn').click(function(){
     
        $("#more").slideDown("slow");
        $("#dots1").hide();
        $("#myBtn").hide();
        $("#myBtn1").show();
      
      });

    $('#myBtn1').click(function(){
      $("#more").slideUp("slow");
      $("#myBtn1").hide();
      $("#dots1").show();
      $("#myBtn").show();

    });

     $('#myBtn2').click(function(){
     
        $("#more1").slideDown("slow");
        $("#dots2").hide();
        $("#myBtn2").hide();
        $("#myBtn3").show();
      
      });

      $('#myBtn3').click(function(){
      $("#more1").slideUp("slow");
      $("#myBtn3").hide();
      $("#dots2").show();
      $("#myBtn2").show();

    });
     
    });
</script>