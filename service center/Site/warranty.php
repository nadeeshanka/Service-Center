<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">

  
  <link rel="stylesheet" type="text/css" href="css/Warranty.css">
  <title>Warranty</title>
</head>
<body id="warrantyform">

<div class="container-fluid">
    <div class="row header">   
        <div >
            <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
        </div>
    </div>
 </div>
<div class="container">
    <div  class="row">
        <div  class="col-sm-1 col-md-3 col-lg-3">
          <a href="javascript:history.back()">
            <span style="font-size: 30px;color:red;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
        </div>
        <div  id ="main" class="col-sm-10 col-md-6 col-lg-6 ">
    <div id="warranty">
   <h2>Warranty Validation</h2>
   <p  class="text-secondary">Please enter product details</p>
    </div>

               <form class="form-horizontal" action="warrantycheck" method="POST" id="myForm">

                <div class="form-group">
                  <label for="sel2"><b>Product Category (select one)</b></label>
                  <select class="form-control" id="cat" name="cat" required>
                    <option value="" selected>Select Category...</option>
                    <option value="TV_A_Kapp">Television & Audio</option>
                    <option value="TV_A_Kapp">Kitchen Appliances</option>
                    <option value="TV_A_Kapp">Phones & Accessories</option>
                    <option value="COM">Computers/Laptops </option>
                    <option value="REF">Refrigerators </option>
                    <option value="Deepf_Bot">Deep Freezers/Bottle Coolers/Water Dispensers </option>
                    <option value="WAM">Washing Machine</option>
                    <option value="AC">Air Conditioners</option> 
                    <option value="TV_A_Kapp">Sewing Machine & Electrical Accessories </option>  
                  </select>
                </div>  


                <div class="form-group">
                  <label for=""><b>Product Insurance(select one)</b></label>
                  <select class="form-control" id="insurance" name="insurance" required>
                     <option value="" selected>Select Insurance...</option>
                    <option value="normal">Normal</option>
                    <option value="sanasuma">Sanasuma</option>
                  </select>
                  </div>
                  <div id="msg1">
                  </div>
                <div class="form-group">
                  <label for=""><b>Product Type</b></label>
                  <select class="form-control" id="ptype" name="ptype" required>
                    <option value="" selected>Select Type...</option>
                    <option value="normal">Normal</option>
                    <option value="no_frost">No Frost</option>
                    <option value="inverter">Inverter</option>
                  </select>
               </div>
                  <div class="form-group">
                  <label for=""><b>Product Brand</b></label>
                  <br>
                  <div class="form-check-inline">
                    <label class="form-check-label" for="brand">
                      <input type="radio" class="form-check-input" id="brand" name="brand" value="si">SINGER
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label" for="brand">
                      <input type="radio" class="form-check-input" id="brand" name="brand" value="si">SISIL
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label" for="brand">
                      <input type="radio" class="form-check-input" id="brand" name="brand" value="other">Other Brand
                    </label>
                  </div>
                </div>
              
                  <div class="form-group">
                       <label for="date"><b>Purchase date</b></label>
                       <input type="date" class="form-control" id="pdate"  name="pdate" max="<?php echo date('Y-m-d');?>" required>
                  </div>
                  </form>

                    <div class="card">
                      <div id="msg"class="card-body">Result</div>
                    </div>
                 
                    <br>
                
                  <div id="bottom">            
                    <button id="check"class="btn btn-danger" >Check</button>
                    
                  </div>
              
        
                <div id="footer"><br><h6>Powered by<small class="text-danger"> SINGER(PLC)</small></h6></div>
    </div>
    
    <div  class="col-sm-1 col-md-3 col-lg-3"></div>
    </div>
</div>


</body>
</html>               
<script type="text/javascript">

  $('#insurance').click(function(){
    var index1=$('#cat').val();
    if(index1 == ""){
      $(".error").remove();
      $('#cat').after('<span class="error">*Please select Product Category</span>');
      $(".error").show();
    }else{
      $(".error").remove();
    }

  });
  $('#ptype').click(function(){
    var index1=$('#insurance').val();
    if(index1 == ""){
      $(".error1").remove();
      $('#insurance').after('<span class="error1">*Please select product Insurance</span>');
      $(".error1").show();
    }else{
      $(".error1").remove();
    }
    });

    $('#ptype').focusout(function(){
    var index1=$('#ptype').val();
    if(index1 == ""){
      $(".error2").remove();
      $('#ptype').after('<span class="error2">*Please select Product Type</span>');
      $(".error2").show();
    }else{
      $(".error2").remove();
    }

  });
    $('#check').on("click", function() {
      $.ajax({
        type:"POST",
        url:"warrantycheck.php",
        data:$("#myForm").serialize(),
        async: true,
        success:function(data)
        {

          $("#msg").html(data);   
          $("#msg").show()
          
        }
      });
    });
    $('#check').on("focusout", function() {
        $("#msg").hide()

      });
</script>