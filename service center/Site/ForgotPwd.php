
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/> 

  <link rel="stylesheet" type="text/css" href="css/ForgotPwd.css">
  
</head>

<body id="ForgotPassword">

<div class="container-fluid">
    <div class="row header">   
        <div >
            <img src="img/slogo.png" class="float-left" style="width:450px;height: 80px;">
        </div>
    </div>
</div>

<div class="container">
    <div  class="row">
        <div  class="col-sm-1 col-md-3 col-lg-3"></div>
		<div  id ="main" class="col-sm-10 col-md-6 col-lg-6 ">
			<div id="fpassword">
				<h1>Reset Password</h1>
			</div>
			
			<form id="ForgotPwd" action="updatepassword.php" method="POST">
				

				<div class="form-group">
					<input  class="form-control" id="inputemail"  placeholder="Email" name="email" type='email' required>
					
				</div>

				<div class="form-group">
					<input type="password" class="form-control" id="inputPassword" placeholder="New Password" name="newpwd" required><i class="far fa-eye" id="field-icon"></i>
					
				</div>
		
				<div class="form-group">
					<input type="password" class="form-control" id="inputPassword2" placeholder="Re-enter Password" name="newpwd2"  required><i class="far fa-eye" id="field-icon2"></i>
					
				</div>

				<button type="submit" name="btncreat" value="Login" class="btn btn-danger" >Login</button>
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
 	$("#field-icon2").hide();
	$(document).ready(function(){  
   		$('button[type="submit"]').click(function(){
      		var index=$("#inputemail").val(); 
      		if(index.length <= 0 ){
        		$("#inputPassword").fadeTo(1000,0.1);
        		$("#inputPassword2").fadeTo(1000,0.1);
      }

    }); 
      $("#inputPassword").on("click",function(){
      var expression = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var email = $("#inputemail").val();
      if (email.match(expression)){
        $("#inputPassword").fadeTo(1,1);
        $("#inputPassword2").fadeTo(1,1);
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
 	var pwd1= $("#inputPassword").val();
	var pwd2= $("#inputPassword2").val();
	if(pwd1!=pwd2){
		$('#inputPassword2').after('<span class="error">Password not matched</span>');
	}
	

	});
});



</script>
