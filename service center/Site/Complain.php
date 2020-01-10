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
   
    <link rel="stylesheet" type="text/css" href="css/Complain.css">
</head>
<body id="page">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-12" bg-light>
        <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
                  
      </div>           
    </div>
 
  <div  class="col-sm-1 col-md-3 col-lg-3">
    <a href="javascript:history.back()">
      <span style="font-size: 30px;color:red;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
  </div>
    </div> 
<div class="container-fluid ">		
	<div class="row">
    <div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="container">
				<div class="d-flex justify-content-center h-100">
					<div class="card">

						<div class="card-header">
							<h3 align="center" style="color:white">REQUEST HERE</h3>
						</div>

						<div class="card-body">
				
							<form class="form-horizontal" action="AddComplain.php" method="post" enctype="multipart /form-data" name="ComplainForm">
        
         
          				<div class="form-inline">
               			 <label for="name" class="col-sm-5"><b>Customer Id </b></label>
						 
               			 <div class="col-sm-7">
						 	<?php
								session_start();
								echo $_SESSION['NIC'] ;
								
							?>
						</div> 
						 
                		</div>

					
					<!-- <div class="form-inline">
                    <label class="col-sm-5"><b>Upload photo</b><p><i>(upload serial no photo)</i></p></label>
                    <div class="col-sm-7">
						<input type="file" name="image" id="image";>
                    <input type="submit"  name="btnsub" value="Upload the picture"></div>
					
      		        </div>  -->
      		      <div class="form-inline">
                  <label for="sel1" class="col-sm-5"><b>Your Location (select nearest one)</b></label>
                  <div class="col-sm-7">
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
                  <div id="msg1"></div>
                </div>	
             
                </div>
                
       
                <div class="form-inline"">
                  <label for="sel2" class="col-sm-5"><b>Product Category (select one)</b></label>
                  <div class="col-sm-7">
                  	<select class="form-control" id="category" name="Ptype" required>
                    <option value="" selected>Select Category...</option>
                    <option value="TV_A">Tv & Audio</option>
                    <option value="K_app">Kitchen Appliances</option>
                    <option value="C_P">Computers,Phones & Accessories</option>
                    <option value="R_B">Refrigerators & Bottle collers</option>
                    <option value="WA_E">Washing Machine & Electrical Accessories </option>
                    <option value="AC">Air Conditioners</option>   
                  </select>
                  <div id="msg2"></div>
                </div>
              </div>
              

					<div class="form-inline">
						<label for="product" class="col-sm-5"><b>Product</b></label>
						<div class="col-sm-7">
              <input type="text" class="form-control" id="product"  placeholder="Enter Your product.." name="product" required>
            </div>
					</div>
			   <div id="msg4"></div>
			
					<div class="form-inline">
                		<label for="sel1" class="col-sm-5"><b>Product Brand (select one)</b></label>
                    		<div class="col-sm-7"><select class="form-control" id="brand" name="Pbrand" required>
                    			   <option value="" selected>Select Brand...</option>
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
                        <div id="msg3"></div>
						          </div>
					         </div>	
          
					     <div class="form-inline">
		            	<label for="model" class="col-sm-5"><b>Model No</b></label><br>
                    	<div class="col-sm-7"><input type="text" class="form-control" id="modelno"  placeholder="Enter model number..." name="Mlno" required autocomplete="off"></div>
                    </div>
	         		<div class="form-inline">
		            	<label for="serial" class="col-sm-5"><b>Serial No</b></label><br>
                    	<div class="col-sm-7"><input type="text" class="form-control" id="serialno"  placeholder="Enter serial number..." name="Slno" required autocomplete="off"></div>
                    </div>
	         
	         		<div class="form-inline">
		            	<label for="name" class="col-sm-5"><b>Purchase date</b></label>
		            	<div class="col-sm-7"><input type="date" class="form-control" id="purchasedate"  placeholder="" name="Pdate" max="<?php echo date('Y-m-d');?>"></div>
                  
           			</div>
                <div id="msg5"></div>
	             <div id="msg6"></div>

	         
 					<div class="form-inline">
      		    		<label for="sel1" class="col-sm-5"><b>Defect Description</b></label>
      		    			<div class="col-sm-7"><textarea class="form-control" rows="4" id="comment" name="Dtype" required></textarea></div>
	       			</div>
         
					<div><br></div>
         			
         			   <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="payment" value="Requested">Estimated Payment request
                      </label>
                             
                </div>
					<div><br></div>

	       			 <button type="submit" id="submit" class="btn btn-danger" name="btnsend">Send</button>
         			<button type="reset" id="reset" class="btn btn-primary">Reset</button> 

				    </form>
		        </div>
		        </div>
	         </div>
          </div>
          </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">

$(document).ready(function(){


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


    $('#modelno').on("keyup", function() {
      model();
    });


    function location(){
      var index1=$('#location').val();
      if(index1== ""){
        $("#msg1").html("*Please select Product Location");
        $("#msg1").show();
      
      }else{
        $("#msg1").hide();
      }

    }


    function category(){
      
      var index2=$('#category').val();
      if(index2 == ""){
        $("#msg2").html("*Please select Product Category");
        $("#msg2").show();
       
      }else{

        $("#msg2").hide();
      }

    }
 


    function brand(){
      var index3=$('#brand').val();
      if(index3 == ""){
        $("#msg3").html("*Please select Product Brand");
        $("#msg3").show();
        
      }else{

        $("#msg3").hide();
      }

    }


    function serial(){
      var serial=$('#serialno').val(); 
      $(".error").remove();
      if(serial.length < 7){
        $('#serialno').after('<span class="error">Serial Number must be at least 7 characters long</span>');
        
      }
    }

      
    function model(){
      var model=$('#modelno').val(); 
      $(".error1").remove();
      if(model.length < 7){
        $('#modelno').after('<span class="error1">Model Number must be at least 7 characters long</span>');
       
      }
    }


  
 
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

    $('#comment').on("focus", function() {
      $.ajax({
        type:"post",
        url:"warrantyAjax.php",
        data:{pdate:$('#purchasedate').val()},
        async: true,
        success:function(data)
        {

          $("#msg5").html(data);
          
        }
      });
    });



    $('#purchasedate').click(function() {
        exist();
    });

    $('#comment').click(function() {
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


		
});
</script>
</body>
</html>
