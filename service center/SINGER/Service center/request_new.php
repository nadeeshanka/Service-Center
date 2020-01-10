
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
  <link rel="stylesheet" type="text/css" href="css/request_new.css">
  
</head>

<body >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 ">
        <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
      </div>
      <div class="col-sm-7 ">
        <nav class="navbar navbar-expand-sm  navbar-light justify-content-center">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="available_complain.php">
                <span style="font-size: 20px;color:RGB(91, 255, 51)">
                  <i class="fas fa-bolt"></i></span>
                    <span style="font-size: 20px;color:RGB(0, 0, 0)">
                       Service Request
                    </span>
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
              <span style="font-size: 20px;color:RGB(15, 84, 232)">
                <i class="fas fa-diagnoses"></i></span> 
                  Service Agents  
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment_bills.php">
               <span style="font-size: 20px;color:RGB(220, 120, 0)">
                <i class="fab fa-amazon-pay"></i></i></span> 
                 Payments 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
              <span style="font-size: 20px;color:rgb(214, 13, 187)">
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
              <a class="nav-link active" href="request_new.php">
                <span style="font-size: 25px;">
                <i class="far fa-question-circle"></i>
                </span>  
                <span style="font-size:18px;color:"> Request NEW!</span>
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link " href="available_complain.php">
              <span style="font-size: 25px;color:rgb(0,200,0);">
               <i class="far fa-arrow-alt-circle-down"></i> </span>
               <span style="font-size:18px;color:rgb(0,0,0);"> Available Requests </span>
               
              </a>
            </li>
            <br>
             <li class="nav-item">
              <a class="nav-link  " href="accepted_complain.php">
              <span style="font-size: 25px;color:rgb(0,200,0);">
               <i class="far fa-check-circle"></i> </span>
                <span style="font-size:18px;color:rgb(0,0,0);">Accepted Requests </span>
              </a>
            </li>
          </ul>
        </div>  
      </div>             
  <div  class="col-sm-10">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-10 ">
        <div class="card bg-light text-dark"style="height:50px;">
                <div class="card-body"> 
                  <p id="p1">Service Requests / Request NEW!</p>
               </div>
              </div>
            </div>
            <div class="col-sm-2 ">
              <button style="height:50px;" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#add">
                Add Customers
              </button>
                <!-- The Modal -->
              <div class="modal fade" id="add">
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
        <div class="container-fluid">
          <div class="row ">
            <div class="col-sm-2 "></div>
            <div class="col-sm-8 ">
              <form class="form-horizontal" action="insert_request.php"method="post">
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
                       <input type="date" class="form-control" id="purchasedate"  name="Pdate" max="<?php echo date('Y-m-d');?>"  required>
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
            <div class="col-sm-2">
              <br>
            </div>
          
          </div>
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
  
    function valid(){  
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
  }
    $('#NIC').focusout(function(){
      valid();
    });

     $('#NIC').click(function(){
      $("#msg1").hide();
    });
  
  
     $('#product').click(function(){
      $('#msg4').hide();

    });

    $('#brand').click(function(){
      var index3=$('#brand').val();
      if(index3 == ""){
        $("#msg5").html("*Please select Product Brand");
        $("#msg5").show();
      }else{

        $("#msg5").hide();
      }

    });
   $('#serialno').keyup(function(){
      var serial=$('#serialno').val(); 
      $(".error").remove();
      if(serial.length < 7){
        $('#serialno').after('<span class="error">Serial Number must be at least 7 characters long</span>');
      }
    });
      $('#modelno').on("keyup", function() {
      var model=$('#modelno').val(); 
      $(".error").remove();
      if(model.length < 7){
        $('#modelno').after('<span class="error">Model Number must be at least 7 characters long</span>');
      }
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
 
</script>