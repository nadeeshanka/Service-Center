
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
  <link rel="stylesheet" type="text/css" href="css/agents_add.css">
  
</head>

<body >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 ">
        <img src="img/slogo.png" class="float-left" style="width:350px;height:70px;">
      </div>
      <div class="col-sm-7 ">
        <nav class="navbar navbar-expand-sm  navbar-light justify-content-center">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="available_complain.php">
                <span style="font-size: 20px;color:RGB(91, 255, 51)">
                  <i class="fas fa-bolt"></i></span>
                   Service Requests
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
              <span style="font-size: 20px;color:RGB(15, 84, 232);">
                <i class="fas fa-diagnoses"></i></span> 
                <span style="font-size: 20px;color:RGB(0, 0, 0);">
                  Service Agents</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment_bills.php">
               <span style="font-size: 20px;color:RGB(220, 120, 0);">
                <i class="fab fa-amazon-pay"></i></span> 
                 Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
              <span style="font-size: 20px;color:rgb(214, 13, 187);">
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
              <a class="nav-link active" href="agents_add.php">
                <span style="font-size: 25px;">
                <i class="fas fa-user-plus"></i>
                </span>  
                <span style="font-size:18px;">Add Agents</span>
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link " href="agents_Registed.php">
              <span style="font-size: 25px;color:rgb(0,0,152);">
              <i class="fas fa-user-check"></i>
              </span>
               <span style="font-size:18px;color:rgb(0,0,0);">Registed Agents</span>
              </a>
            </li>
            <br>
             <li class="nav-item">
              <a class="nav-link  " href="agent_vacancy.php">
              <span style="font-size: 25px;color:rgb(0,0,152);">
                <i class="fas fa-address-card"></i>
                </span>
              <span style="font-size:18px;color:rgb(0,0,0);"> Job Vacancies</span>
              </a>
            </li>
            <br>
          </ul>
        </div>  
      </div>
                    


  <div  class="col-sm-10">
      <div class="card bg-light text-dark" style="height:50px;">
        <div class="card-body"> 
          <p id="p1">Service-Agent / Add Agents</p>
        </div>
      </div>
      <div id="space"></div>
      <div class="container-fluid">
        <div class="row" >
          <div class="col-sm-2"></div>     
          <div id="form" class="col-sm-8">
             <form action="insert_agents.php" method="POST">  
     
              <div class="input-group">
                <label for="name"><b>Name </b></label>
              </div>
              <div class="input-group">
                <input type="text" name="first_name" id="fname" class="form-control" placeholder="First Name">
                <input type="text" name="last_name" id="lname" class="form-control" placeholder="Last Name">
              </div>
              <div><span id="msg1"></span> <span id="msg2"></span></div>
              <div id="space"></div>

              <div class="form-inline">
                <label for="nic"><b>NIC Number : </b></label>
                <input type="text" class="form-control" id="nic" placeholder="NIC Number" name="NIC_no"  >
              </div>
              <div id="msg3"></div>
              <div class="form-group">
                <label for="address"><b>Address </b></label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
               </div>
              
              <div class="form-inline">
                <label for="phone"><b>Phone : </b> </label>
                <input type="text" class="form-control" id="tel_no" placeholder="Phone Number" name="tel_no" maxlength="10">
                <div id="msg4"></div>
              </div>
              <div class="form-group">
                <label for="email"><b>Email </b></label>
                <input type="email" class="form-control" id="email" placeholder="Enter email.." name="email"  required>
              <div class="status"></div>
              </div>  
              <div class='form-group'>
                <label for='field'><b>Service Field </b></label>               
                <select name='field' id="field">
                  <option value="" selected>Select field...</option>
                  <option value="Refrigerators/Collers">Refrigerators & Bottle collers</option>
                  <option value="Washing_Machine">Washing Machine</option>
                  <option value="Air_Conditioners">Air Conditioners</option>
                  <option value="Kitchen_Appliances">Kitchen Appliances</option>
                  <option value="Computers">Computers</option>
                </select>
              </div>
              <div id="msg"> </div>
              <div class="form-group">
                <label for="experience"><b>Experience </b></label>
                <textarea class="form-control" rows="2" id="experience" placeholder="Working Experience" name="experience" required></textarea>
                
              </div>
              <div id="space"></div>
              <button type="submit" name="btnadd" class="btn btn-warning" align="text-center">Register</button>
              <button type="reset" id="reset" class="btn btn-primary">Reset</button>

            </form>
            <div id="space"></div>
          </div>
        <div class="col-sm-2"></div> 
        </div></div>
      </div>
    </div>

 </div>
  <div id="space"></div>
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

<script type="text/javascript">

  $("#fname").on("blur", function() {
    if( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
      $('#msg1').html("<span style=color:blue;>*Valid First name</span>");
      $("#msg1").show();
    }else {
      alert("That's not a name");
    }
  });
  $("#fname").on("click", function() {
     $("#msg1").hide();

  });

  $("#lname").on("blur", function() {
      if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          $('#msg2').html("<span style=color:blue;>and Last name</span>");
          $("#msg2").show();
      } else {
          alert("That's not a name");
      }
  });
  $("#lname").on("click", function() {
    $("#msg2").hide();
  });

    $('#nic').keyup(function() {
      var nic=$('#nic').val(); 
          if(nic.length < 10){
          $('#msg3').html("<span style=color:red;>*NIC Number must be at least 10 characters long</span>");
          $("#msg3").show();
          }else{
            $("#msg3").hide();
          } 
    });

    $('#tel_no').keyup(function() {
      var num=$('#tel_no').val()
        if ( num.match('[a-zA-Z ]') || num.length < 10) {
           $('#msg4').html("<span style=color:red;>*That is not a phone Number</span>");
           $('#msg4').show();
          }else{
             $('#msg4').hide();
          }

        });


    function EmailValidate() {
      var expression = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = $("#email").val();
    if (email.match(expression)){
        return true;
     }else{
      return false;
    }
      

    }
  $('#email').on("keyup", function() {
    if (!(EmailValidate())) {
      $(".error5").remove();
      $(".error4").remove();
    $('#email').after('<span class="error5">*Invalid Email</span>');
  }else{
    $(".error5").remove();
    $(".error4").remove();
    $('#email').after('<span class="error4">Valid Email</span>');
  }
  });
    $("#email").on("click", function() {
    $(".error5").remove();
  });

  $('#field').click(function(){
  var index1=$('#field').val();
  if(index1 == ""){
    $("#msg").html("<span style=color:red;>*Please select Agent's Field</span>");
    $("#msg").show();
  }else{

    $("#msg").hide();
  }
});
</script>



</body>
</html>     