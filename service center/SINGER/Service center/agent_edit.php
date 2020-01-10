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

</head>
<body>	
    <form class="form-horizontal" action="editagent.php" method="post">
    <?php
      include("conni.php");
	    mysqli_select_db($conn,"cs2018g2");
      $cid=$_SESSION['USERNAME'];
      $sql3="SELECT agent_id FROM service_agents WHERE center_id='$cid'";
      $result3=mysqli_query($conn,$sql3);
                               
        echo"<div class='form-group'>
            <label for='agent'><b>Service Agent </b>:</label>
            <select name='id'>
            <option value=''selected>Select Agent</option>";
            while ($get = mysqli_fetch_assoc($result3)){
              echo "<option value='".$get['agent_id']."'> ".$get['agent_id']." </option>";
            }   
        echo"</select>
             </div>";
    ?>
	
		<div class="form-group">
      <label for="address"> Address:</label>    	
			<input type="text" class="form-control" id="address" placeholder="Address" name="address" >
  </div>      
		<div class="form-group">
			<label for="nic_no">Phone No :</label>
			<input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone No..." name="phone_no" maxlength="10">			
		</div>	
    <div id="msg2"></div>

		<div class="form-group">
      <label for="email">Email:</label>
      <input  class="form-control" id="inputemail"  placeholder="Email" name="email" type='email'>   
    </div>
    <div id="msg3"></div>
    <div class="form-group">
    <label for="pwd">Password :</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="New Password" name="newpwd" ><i class="far fa-eye" id="field-icon"></i>   
    </div>
    
    <div class="form-group">
    <input type="password" class="form-control" id="inputPassword2" placeholder="Re-enter Password" name="newpwd2" ><i class="far fa-eye" id="field-icon2"></i>   
    </div>
	
		<br> 
		<div class="text-center">
			<button  type="submit" id="submit" class="btn btn-danger" name="btnedit" >Update</button>
			<button type="reset" id ="reset" class="btn btn-primary">Reset</button>
		</div>
        <br>
        <h5 class="text-center">Powered by<small class="text-danger"> SINGER(PLC)</small></h5>
    </form>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){   
  $("#field-icon").hide();
  $("#field-icon2").hide();
 
  $('#phone_no').keyup(function() {
  var num=$('#phone_no').val()
    if ( num.match('[a-zA-Z ]') || num.length < 10) {
      $('#msg2').html("<span style=color:red;>*That is not a phone Number</span>");
      $('#msg2').show();
    }else{
      $('#msg2').hide();
    }

  });


  $('#inputemail').keyup(function(){

    var expression = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = $("#inputemail").val();
    if (email.match(expression)){
      $("#msg3").hide();
  
      }
      else{
        $("#msg3").html("<span style=color:red;>*That is not a email</span>");
        $("#msg3").show();
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
    $('#inputPassword2').after('<span class="error" style="color:red;">Password not matched</span>');
  }
  

  });
});

</script>
