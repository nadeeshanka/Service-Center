<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Service Agent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/all.css">  

  <link rel="stylesheet" type="text/css" href="css/renew.css">
  
</head>

<body id="ForgotPassword">

<div class="container-fluid">
    <div class="row header">   
        <div >
            <img src="img/slogo.png" class="float-left" style="width:450px;height: 80px;">
        </div>
    </div>
</div>
 <div  class="col-sm-1 col-md-3 col-lg-3">
    <a href="javascript:history.back()">
      <span style="font-size: 30px;color:red;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
  </div>
<div class="container">
    <div  class="row">
        <div  class="col-sm-1 col-md-3 col-lg-3"></div>
		<div  id ="main" class="col-sm-10 col-md-6 col-lg-6 ">
			<div id="fpassword">
				<h1>Renew Password</h1>
			</div>
      <div style="text-align:center;font-size:18px" >
      <?php
        echo $_SESSION['id'];
      ?>
      </div>
			
			<form id="newpwd" action="renew_password.php" method="POST">
        <?php
            if(isset($_GET['error'])){
            echo "Enter valid email/password";
            }
        ?>

        <div class="form-group">
          <input type="password" class="form-control" id="inputPassword" placeholder="Current Password" name="pwd" required><i class="far fa-eye" id="field-icon"></i>
          
        </div>
				
				<div class="form-group">
					<input type="password" class="form-control" id="inputPassword1" placeholder="New Password" name="newpwd" required><i class="far fa-eye" id="field-icon1"></i>
					
				</div>
		
				<div class="form-group">
					<input type="password" class="form-control" id="inputPassword2" placeholder="Re-enter Password" name="newpwd2"  required><i class="far fa-eye" id="field-icon2"></i>
					
				</div>

				<button type="submit" name="btncreat" value="Login" class="btn btn-danger" >Change</button>
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
  $("#field-icon1").hide();
 	$("#field-icon2").hide();
	$(document).ready(function(){  
   		$("#inputPassword1").click(function(){
      		var index=$("#inputPassword").val(); 
      		if(index.length <= 0 ){
        		$("#inputPassword1").fadeTo(1000,0);
        		$("#inputPassword2").fadeTo(1000,0);
      }

    }); 
      $("#inputPassword").on("click",function(){
        $("#inputPassword1").fadeTo(1,1);
        $("#inputPassword2").fadeTo(1,1);
      
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

 $("#inputPassword1").on("keyup",function(){
    if($(this).val())
        $("#field-icon1").show();
    else
        $("#field-icon1").hide();
    });
$("#field-icon1").mousedown(function(){
                $("#inputPassword1").attr('type','text');
            }).mouseup(function(){
              $("#inputPassword1").attr('type','password');
            }).mouseout(function(){
              $("#inputPassword1").attr('type','password');
            });           

$("#inputPassword2").on("keyup",function(){
    if($(this).val())
        $("#field-icon2").show();
    else
        $("#field-icon2").hide();
    });
$("#field-icon2").mousedown(function(){
                $("#inputPassword2").attr('type','text');
            }).mouseup(function(){
              $("#inputPassword2").attr('type','password');
            }).mouseout(function(){
              $("#inputPassword2").attr('type','password');
            });

$("#inputPassword2").on("keyup",function(){
	$(".error").remove();
 	var pwd1= $("#inputPassword1").val();
	var pwd2= $("#inputPassword2").val();
	if(pwd1!=pwd2){
		$('#inputPassword2').after('<span class="error">Password not matched</span>');
	}
	});



});



</script>
