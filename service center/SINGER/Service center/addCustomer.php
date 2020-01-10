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
    <form class="form-horizontal" action="insertaddcustomer.php" method="post">
	    <div class="form-group">
		    <label for="first_name">First Name</label>
			    <input type="text" class="form-control" id="fname" placeholder="Enter your first name..."  name="fname" required >
		</div>
	
        <div class="form-group">
			<label for="last_name" >Last Name</label>
			<input type="text" class="form-control" id="lname" placeholder="Enter your last name.." name="lname" required>
			
		</div>
			
		<div class="form-group">
			<label for="nic_no">NIC Number:</label>
			<input type="text" class="form-control " id="nic_no" placeholder="Enter NIC Number..." name="nic" required>
		</div>
		<div id="msga"></div>
		<div class="form-group">
            <label for="address"> Address:</label>
            <div class="row">
				<div class="col-sm-4">
					<input type="text" class="form-control" id="address" placeholder="Address1" name="address1" required>
                </div>
                <div class="col-sm-4">
				    <input type="text" class="form-control" id="address" placeholder="Street" name="street" required>
                </div>
                <div class="col-sm-4">
				    <input type="text" class="form-control" id="address" placeholder="City" name="city" required>
                </div>
            </div>
		</div>
	
		<div class="form-group">
			<label for="nic_no">Phone No :</label>
			<input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone No..." name="phone_no" required maxlength="10">			
		</div>	
    <div id="msg2"></div>
		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control " id="email" placeholder="Enter email.." name="email"  required>
			<div class="status"></div>
		</div>	
		<div id="password" >
		<label for="password" class="text-danger">Defult Password Created : Customer123</label>
		</div>	
		<br> 
		<div>
			<button  type="submit" id="submit" class="btn btn-danger" name="btnregister" >Register</button>
			<button type="reset" id ="reset" class="btn btn-primary">Reset</button>
		</div>
        
        <h5 id= "footer">Powered by<small class="text-danger"> SINGER(PLC)</small></h5>
    </form>
</body>
</html>
<script type="text/javascript">

	$("#fname").on("blur", function() {
    	if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
        	$('#fname').after('<span class="error6">*Valid name</span>');
    	} else {
        	alert("That's not a name");
    	}
	});
	$("#fname").on("click", function() {
		$(".error6").remove();
	});

	$("#lname").on("blur", function() {
    	if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) {
        	$('#lname').after('<span class="error2">*Valid name</span>');
    	} else {
        	alert("That's not a name");
    	}
	});
	$("#lname").on("click", function() {
		$(".error2").remove();
	});


	
	function backlist(){
      $.ajax({
        type:"post",
        url:"checkbacklist.php",
        data:{nic: $('#nic_no').val()},
        async: true,
        success:function(data)
        {
     	  

          $("#msga").html(data);
          $("#msga").show();

       		
       		
        }
      });
  	}
       
       $('#nic_no').focusout(function(){
       	backlist();

    	});


    $('#nic_no').on("keyup", function() {
     	var nic=$('#nic_no').val(); 
      	$(".error3").remove();
      		if(nic.length < 10){
        		$('#nic_no').after('<span class="error3">NIC Number must be at least 9 characters long</span>');
      		}	
    });
    $("#nic_no").on("click", function() {
		$(".error3").remove();
	});

    $('#phone_no').keyup(function() {
      var num=$('#phone_no').val()
        if ( num.match('[a-zA-Z ]') || num.length < 10) {
           $('#msg2').html("<span style=color:red;>*That is not a phone Number</span>");
           $('#msg2').show();
          }else{
             $('#msg2').hide();
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

</script>
