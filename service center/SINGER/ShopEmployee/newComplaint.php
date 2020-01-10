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

  <script src="js/mysearch.js"></script>

  <title>User-Assistant</title>
  <link rel="stylesheet" type="text/css" href="css/newComplaint.css">
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
              <a class="nav-link active" href="newComplaint.php">
                <span style="font-size: 20px;">
                    <i class="fas fa-plus-circle"></i> New 
                </span> 
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link " href="complaint-current.php">
				      <span style="font-size: 20px;color:orangered;">
                    <i class="fas fa-play-circle"></i> Current
                </span>
              </a>
            </li>
 
              <br>
          </ul>
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
        <div class="card" style="width:auto;">
          <h4 class="links">Quick Search</h4>
          <form id="searchform"  Method="POST">
    
            <div class="form-group">
              <label for="sel1"><b>Search In</b></label>
              <select class="form-control" id="sel1" name="sel1" required>
                <option value="" selected>In...</option>
                <option value="1">Customers</option>
                <option value="2">Products</option> 
                <option value="3">Service Request</option>
                <option value="4">Jobs</option>
              </select>
              </div> 
             
              <div class="form-group">
                <label for="sel2"><b>Search By</b></label>
                <select class="form-control" id="sel2" name="sel2" required>
                  <option value="" selected>By...</option>
                  <option id="customer" value="1">Customer Name</option>
                  <option id="nic" value="2">NIC Number</option> 
                  <option id="ser" value="3">SER Number</option>
                  <option id="job" value="4">Job Number</option>
                  <option id="serial" value="5">Serial Number</option>  
                </select>    
              </div>
            <div id="find_input" class="input-group">
            <input class="form-control" type="text" placeholder="Keyword.." id="find" name="find" required>
            </div> </form>
            <div id="space2"></div>
            <button class="btn btn-success"  id="btnsuper" ><i class="fas fa-search"></i></button>
           
        
        </div>
			</div>
 
      <div class="col-sm-10">
        <div id="normal1" class="container-fluid">
          <div class="row ">
            <div class="col-sm-10 ">
              <div class="card bg-light text-dark"style="height:50px;">
                <div class="card-body"> 
                  <p id="p1">Service Requests / New</p>
               </div>
              </div>
            </div>
            <div class="col-sm-2 ">
              <button style="height:50px;" type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#myModal">
                Add Customers
              </button>
                <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
        
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Add Customer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
          <!-- Modal body -->
          <div class="modal-body">
              <?php
              include("addCustomer.php");
              ?>
          </div>
          
        </div>
      </div>
    </div>
            </div>
          </div>
        </div>
        <div id="normal2" class="container-fluid">
          <div class="row ">
            <div class="col-sm-2 "></div>
            <div class="col-sm-8 ">
              <form id=sform" class="form-horizontal" action="insertcomplaint.php"method="post">
               <!--<input type="hidden" id="centerID">-->
                <div>
                   <br>
                </div>
                <div class="form-group">
                  <label for="name"><b>Customer ID</b></label>
                  <input type="text" class="form-control" id="NIC"  placeholder="NIC Number..." name="nic" required>
                </div>
                <div id="msg1">
                </div>
                <div class="form-group">
                  <label for="sel1"><b>Your Location (select Nearest one)</b></label>
                  <select class="form-control" id="location" name="location" required>
				            <option value="" selected>Select Location...</option>
                    <option value="003">Akmeemana</option>
                    <option value="002">Ambalangoda</option> 
                    <option value="003">Baddegama</option>
                    <option value="002">Balapitiya</option>
                    <option value="002">Benthota</option>
                    <option value="001">Bope-Poddala</option>
                    <option value="002">Elpitiya</option>
                    <option value="001">Galle</option>   
                    <option value="001">Habaraduwa</option> 
                    <option value="002">Hikkaduwa</option> 
                    <option value="001">Imaduwa</option> 
                    <option value="003">Karandeniya</option> 
                    <option value="003">Nagoda</option> 
                    <option value="003">Neluwa</option> 
                    <option value="003">Niyagama</option> 
                    <option value="003">Thawalama</option> 
                    <option value="003">Welivitiya-Divithura</option> 
                    <option value="003">Yakkalamulla</option> 
                    <option value="002">Gonapinuwal</option> 
                  </select>
                </div>	
                <div id="msg2">
                </div>
       
                <div class="form-group">
                  <label for="sel2"><b>Product Category (select one)</b></label>
                  <select class="form-control" id="category" name="Ptype" required>
                    <option value="" selected>Select Category...</option>
                    <option value="TV_A">Tv & Audio</option>
                    <option value="K_app">Kitchen Appliances</option>
                    <option value="C_P">Computers,Phones & Accessories</option>
                    <option value="R_B">Refrigerators & Bottle collers</option>
                    <option value="WA_E">Washing Machine & Electrical Accessories </option>
                    <option value="AC">Air Conditioners</option>   
                  </select>
                </div>	

                <div id="msg3">
                </div>
       
                <div class="form-group">
                  <label for="product"><b>Product</b></label>
                  <input type="text" class="form-control" id="product"  placeholder="Enter Your Product..." name="product" required>
                </div>

                <div id="msg4">
                </div>
       
             <div class="form-group">
                       <label for="sel1"><b>Product Brand (select one)</b></label>
                           <select class="form-control" id="brand" name="Pbrand" required >
                                <option value="" selected>Select Your Product Brand...</option>
                                <option value="APPLE">APPLE</option>
                                <option value="ASUS">ASUS</option>
                                <option value="BEKO">BEKO</option>
                                <option value="DELL">DELL</option>>
                                <option value="HITACHI">HITACHI</option>
                                <option value="HUAWEI">HUAWEI</option>
                                <option value="KDK">KDK</option>
                                <option value="KRUPPS">KRUPPS</option>
                                <option value="PANASONIC">PANASONIC</option>
                                <option value="PHILIPS">PHILIPS</option>
                                <option value="PRESTIGE">PRESTIGE</option>
                                <option value="REGNIS">REGNIS</option>
                                <option value="SAMSUNG">SAMSUNG</option>
                                <option value="SHARP">SHARP</option>
                                <option value="SINGER">SINGER</option>
                                <option value="SINGER Furniture">SINGER Furniture</option>
                                <option value="SISIL">SISIL</option>
                                <option value="SKYWORTH">SKYWORTH</option>
                                <option value="SONY">SONY</option>
                                <option value="SYMPHONY">SYMPHONY</option>
                                <option value="TCL">TCL</option>
                                <option value="TEFAL">TEFAL</option>
                                <option value="TOSHIBA">TOSHIBA</option>
                                <option value="UNIC">UNIC</option>
                                <option value="WHIRLPOOL">WHIRLPOOL</option>
                                <option value="ZIGO">ZIGO</option>
                                <option value="ZOJE">ZOJE</option>
             
                </select>
            </div>	

            <div id="msg5">
            </div>
             <div class="form-group">
                  <label for="name"><b>Model Number</b></label><br>
                  <input type="text" class="form-control" id="modelno"  placeholder="Enter Model number..." name="Mlno" required>
                </div> 
             <div class="form-group">
                  <label for="name"><b>Serial Number</b></label><br>
                  <input type="text" class="form-control" id="serialno"  placeholder="Enter serial number..." name="Slno" required>
                </div> 
       
                  <div class="form-group">
                       <label for="date"><b>Purchase date</b></label>
                       <input type="date" class="form-control" id="purchasedate"  name="Pdate"  max="<?php echo date('Y-m-d');?>" required>
                  </div>

                  <div id="msg6">
                  </div>
         
                <div class="form-group">
                     <label for="defect"><b>Defect</b></label>
                     <textarea class="form-control" rows="4" id="defect" name="Dtype" required></textarea>
                </div>
                <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="payment" value="Requested">Estimated Payment request
                      </label>
                             
                </div>
              
              <div id="bottom">
                <button type="submit" id="submit" class="btn btn-danger" name="btnsend" >Send</button>
                <button type="reset" id="reset" class="btn btn-primary">Reset</button>
              </div>
              </form>
       
            </div>
            <div class="col-sm-2 "></div>
          </div>
        </div>
      
        <div id="search" class="card bg-light text-dark"style="height:50px;">
          <div class="card-body"> 
            <p id="p1">Quick Search</p>
          </div>
        </div>
        <div id="space1">
        <div id="result">
     
        </div>
     </div>
    </div>
  </div>
  <div id="space1">
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
<script type="text/javascript">

$(document).ready(function(){

    $('#NIC').focusout(function(){
      $.ajax({
        type:"post",
        url:"ajaxnic.php",
        data:{nic: $('#NIC').val()},
        async: true,
        success:function(data)
        {

          $("#msg1").html(data);
          $("#msg1").show();
        }
      
      });
    });

    $('#NIC').click(function(){
      $("#msg1").hide();
    });
  
    $('#product').focusout(function(){
      $.ajax({
        type:"post",
        url:"centerAjax.php",
        data:{location:$('#location').val() ,category:$('#category').val()},
        async: true,
        success:function(data)
        {

          $("#msg4").html(data);
          $("#msg4").show();
          //$('#centerID').attr("value",data);

        }
      });
    });

     $('#product').click(function(){
      $('#msg4').hide();

    });

    $('#defect').on("focus", function() {
      $.ajax({
        type:"post",
        url:"warrantyAjax.php",
        data:{pdate:$('#purchasedate').val()},
        async: true,
        success:function(data)
        {

          $("#msg6").html(data);
          
        }
      });
    });

    $('#purchasedate').click(function() {
        exist();
    });

    $('#defect').click(function() {
        exist();
    });

    function exist(){  
      $.ajax({
        type:"post",
        url:"repeatAjax.php",
        data:{serial:$('#serialno').val() ,model:$('#modelno').val()},
        async: true,
        success:function(data)
        {
          if(data==1){
          alert("This service request is already exist.");
          }
        }
      });
    };




    $('#location').click(function(){
      location();
    });

     $('#category').click(function(){
        category();
    });

    $('#brand').click(function(){
      brand();
    });

    $('#serialno').keyup(function(){
      serial();
    });


    $('#modelno').keyup(function() {
      model();
    });


    function location(){
      var index1=$('#location').val();
      if(index1== ""){
        $("#msg2").html("*Please select Product Location");
        $("#msg2").show();
        

      }else{
        $("#msg2").hide();
      }

    }


    function category(){
      
      var index2=$('#category').val();
      if(index2 == ""){
        $("#msg3").html("*Please select Product Category");
        $("#msg3").show();
       
      }else{

        $("#msg3").hide();
      }

    }
 


    function brand(){
      var index3=$('#brand').val();
      if(index3 == ""){
        $("#msg5").html("*Please select Product Brand");
        $("#msg5").show();
        
      }else{

        $("#msg5").hide();
      }

    }


    function serial(){
      var serial=$('#serialno').val(); 
      $(".error1").remove();
      if(serial.length < 7){
        $('#serialno').after('<span class="error1">Serial Number must be at least 7 characters long</span>');
        
      }
    }

      
    function model(){
      var model=$('#modelno').val(); 
      $(".error2").remove();
      if(model.length < 7){
        $('#modelno').after('<span class="error2">Model Number must be at least 7 characters long</span>');
       
      }
    }



});

</script>
      