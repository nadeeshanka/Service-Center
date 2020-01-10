<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create New Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">
  
  <link rel="stylesheet" type="text/css" href="css/createnew.css">
</head>

<body id="newForm">

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
    <div id="createnew">
   <h1>Create a new password</h1>
   <p  class="text-secondary">Enter the email address you used when you created the ad or account. You will receive an email with the information you need to change your password.</p>
    </div>
    <form action="createnew.php" method="post">
          
      <div class="form-group">
        <input type="email" class="form-control" id="inputemail"  placeholder="Enter Your Email..." name="email" required>
      </div>
      <div id="msg"></div>
    </form>
     <div class="space"></div>
    <button id="submit"class="btn btn-danger" >Submit</button>
        
    <div class="space"></div>
    
         
        <h6 id= "footer">Powered by<small class="text-danger"> SINGER(PLC)</small></h6>
    
    </div>
   
    <div  class="col-sm-1 col-md-3 col-lg-3"></div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    function EmailValidate() {
    var expression = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = $("#inputemail").val();
    if (email.match(expression)){
        return true;
     }else{
      return false;
    }
      
    }
  $('#submit').on("click", function() {
    if (!(EmailValidate())) {
  
    $('#inputemail').after('<span class="error">*Invalid Email</span>');
  }else{
    $(".error").remove();
    $('#inputemail').after('<span class="error1">Valid Email</span>');

    $.ajax({
      type:"post",
      url:"mail/sendMai1.php",
      data:{email: $('#inputemail').val()},
      async: true,
      success:function(data)
      {

        $("#msg").html(data);
        
      }
    });
  }
  })


</script>

