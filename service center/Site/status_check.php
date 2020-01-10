<!DOCTYPE html>
<html>
<head>
   <title>Current Situation</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">

  
  <link rel="stylesheet" type="text/css" href="css/status_check.css">
  
</head>
<body id="status_check">

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
    <div id="status">
   <h2>Current situation</h2>
   <p  class="text-secondary">Please enter your service request number</p>
    </div>
        <div class="container">
          <div  class="row">
            <div  class="col-sm-2"></div>
            <div  class="col-sm-8">
              <form class="form-horizontal" action="" method="POST" id="Form">
                <div class="form-inline">
                  <label for="serno">SER-</label>
                  <input type="text" class="form-control" id="inputno"  name="serno"   required="">
                </div>
              </form>
            </div>
            <div class="col-sm-2"></div>
          </div>
        </div>
        <div class="space"></div>
          <div class="card">
            <div id="msg"class="card-body">Result</div>
          </div>
                 
          <div class="space"></div>
                
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

    $('#check').on("click", function() {
      $.ajax({
        type:"POST",
        url:"ajax_status_check.php",
        data:{serno: $('#inputno').val()},
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