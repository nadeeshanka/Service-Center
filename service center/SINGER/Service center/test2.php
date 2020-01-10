<!DOCTYPE html>
<html lang="en">
<head>
  <title>test2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>

  
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
    <form action="test1.php" method="post">
          
      <div class="form-group">
        <input type="text" class="form-control" id="inputemail"  placeholder="Enter Your Email..." name="id" required>
      </div>
      <div id="msg"></div>
    
     <div class="space"></div>
    <button type="submit" value="submit" name='btnenter' class="btn btn-danger" >Submit</button>
     </form>   
    <div class="space"></div>
    
         
        <h6 id= "footer">Powered by<small class="text-danger"> SINGER(PLC)</small></h6>
    
    </div>
   
    <div  class="col-sm-1 col-md-3 col-lg-3"></div>
    </div>
</div>
</body>
</html>