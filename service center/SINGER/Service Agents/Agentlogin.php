<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agent login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Agent/bootstrap/bootstrap.min.css">
  <script src="Agent/bootstrap/jquery.min.js"></script>
  <script src="Agent/bootstrap/popper.min.js"></script>
  <script src="Agent/bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Agent/bootstrap/css/all.css">

  
  <link rel="stylesheet" type="text/css" href="Agentlogin.css">
</head>

<body id="LoginForm">

<div class="container-fluid">
    <div class="row header">   
        <div >
            <img src="Agent/img/slogo.png" class="float-left" style="width:450px;height: 80px;">
        </div>
    </div>
 </div>
<div class="container">
    <div  class="row">
        <div  class="col-sm-1 col-md-3 col-lg-3"></div>
        <div  id ="main" class="col-sm-10 col-md-6 col-lg-6 ">
    <div id="login">
   <h1>Agent login</h1>
   <p  class="text-secondary">Please enter your Email and Password</p>
    </div>
    <form id="Login" action="check.php" method="post">
            <?php
            if(isset($_GET['error'])){
            echo "Enter valid email/password";
            }
            ?>

        <div class="form-group">


        <input type="text" class="form-control" id="inputemail"  placeholder="Email" name="email" required="">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pwd"  required=""><i class="far fa-eye" id="field-icon"></i>

        </div>
      <div class="forgot">
        <p>If you forgot password ,Please contact service center </p>
      </div>
        <div id="msg">

        </div>

    <button type="submit" name="btnlogin" value="Login" class="btn btn-danger" >Login</button>
    <button type="reset" value="clear" class="btn btn-primary">Reset</button>
    
        </form>
        
    <div class="space"></div> 
        
         
        <h6 id= "footer">Powered by<small class="text-danger"> SINGER(PLC)</small></h6>
    
    </div>
   
    <div  class="col-sm-1 col-md-3 col-lg-3"></div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
  $("#field-icon").hide();
$(document).ready(function(){  
   $('button[type="submit"]').click(function(){
      var username=$("#inputemail").val(); 
      if(username.length <= 0 ){
        $("#inputPassword").fadeTo(1000,0.1);
      
      }
    }); 
      $("#inputPassword").on("click",function(){
      var expression = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var email = $("#inputemail").val();
      if (email.match(expression)){
        $("#inputPassword").fadeTo(1,1);
      }
    });

$("#inputPassword").on("keyup",function(){
    if($(this).val())
        $("#field-icon").show();
    else
        $("#field-icon").hide();
    });
$("#field-icon").mousedown(function(){
                $("#inputPassword").attr('type','text');
            }).mouseup(function(){
              $("#inputPassword").attr('type','password');
            }).mouseout(function(){
              $("#inputPassword").attr('type','password');
            });
});


</script>



