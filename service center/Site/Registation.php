<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  	<script src="bootstrap/jquery.min.js"></script>
  	<script src="bootstrap/popper.min.js"></script>
  	<script src="bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/all.css">
  
	<link rel="stylesheet" type="text/css" href="css/Registation.css">
</head>

<body id="RegistationForm">

<div class="container-fluid">
    <div class="row header">   
        <div>
            <img src="img/slogo.png" class="float-left" style="width:450px; height:80px;">
        </div>
    </div>
</div>
              
<div class="container">

<div class="row">

<div class="col-sm-3">
</div>

<div class="col-sm-6">

	<form class="form-horizontal " id="form" action="AddRegistation.php" method="post" onsubmit="return validate()">
		<h2 >REGISTRATION</h2>
		<br>
	
			<div class="form-inline">
				<label for="first_name" class="col-sm-3 control-lable">First Name :</label>
					<div class="col-sm-9">
						<input type="name" class="form-control" id="name" placeholder="Enter your first name" onkeyup = "Validate(this)"  name="fname" required autocomplete="off">
						<div id="errFirst"></div>
					</div>
			</div>
	
			<div class="form-inline">
				<label for="last_name" class="col-sm-3 control-lable">Last Name :</label>
				
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" placeholder="Enter your last name" onkeyup = "Validate(this)" name="lname" required autocomplete="off">
						<div id="errLast"></div>
					</div>
			</div>
  
			<div class="form-inline">
				<label for="nic_no" class="col-sm-3 control-lable">NIC No :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control " id="nic_no" placeholder="Enter NIC No" name="nic" required autocomplete="off">
					</div>	
			</div>
	
			<div class="form-inline">
				<label for="address" class="col-sm-3 control-lable"> Address:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="address" placeholder="Address1" name="address1" required autocomplete="off">
                    </div>
                    <label for="address" class="col-sm-3 control-lable"></label>
                    <div class="col-sm-9">
						<input type="text" class="form-control" id="address" placeholder="Street" name="street" required autocomplete="off">
                    </div>
                    <label for="address" class="col-sm-3 control-lable"></label>
                    <div class="col-sm-9">
						<input type="text" class="form-control" id="address" placeholder="City" name="city" required autocomplete="off">
					</div>
			</div>
	
			<div class="form-inline">
				<label for="nic_no" class="col-sm-3 control-lable">Phone No :</label>
					<div class="col-sm-9">
						<input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone No"  onkeyup="validatephone(this);" name="phone_no" required autocomplete="off">			
					</div>	
			</div>
  
			<div class="form-inline">
				<label for="email" class="col-sm-3 control-lable">Email :</label>
					<div class="col-sm-9">
						<input type="email" class="form-control " id="email" placeholder="someone@example.com" name="email" onchange="email_validate(this.value);" required autocomplete="off">
						<div class="status" id="status"></div>
					</div>	
			</div>
			
	
			<div class="form-inline">
				<label for="psw" class="col-sm-3 ">Password :</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="psw" placeholder="Enter password" name="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					</div>	
					
					
					
			</div>
	
			<div class="form-inline">
				<label for="pwd" class="col-sm-3 control-lable">Confirm Password :</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="psw2" placeholder="Enter again to validate password" name="psw2"  required >
					</div>	
			</div>
			<div><br></div>
			
			<div class="row">
				<div class="col-sm-6">
					<button  type="submit"  class="btn btn-danger" name="btnregi" >Register</button>
				</div>
				<div class="col-sm-6">
					<button type="reset" class="btn btn-primary">Reset</button>
				</div>
			</div>
			<div><br></div>
			
			<h5 class="text-center">Powered by<small class="text-danger"> SINGER(PLC)</small></h5>
    </form>
	
	</div>
	<div class="col-sm-3">
	
	<div class=" msg" id="message">
						<h3>Password must contain the following:</h3>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
	
</div>
</div>
	
    </div>

</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function validate()

{
	var psw=document.getElementById("psw").value;
	var psw2=document.getElementById("psw2").value;
	if(psw!=psw2)
	{
		alert("password not match");
		return false;
	}
}
</script>




	
</body>
</html>
