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
    <form class="form-horizontal" action="editcustomer.php" method="post">
	    
		<div class="form-group">
			<label for="nic_no">NIC Number: <?php echo $_SESSION['NIC'];?></label>
		</div>
	
		<div class="form-group">
            <label for="address"> Address:</label>
            <div class="row">
				<div class="col-sm-4">
					<input type="text" class="form-control" id="address" placeholder="Address1" name="address1" >
                </div>
                <div class="col-sm-4">
				    <input type="text" class="form-control" id="address" placeholder="Street" name="street" >
                </div>
                <div class="col-sm-4">
				    <input type="text" class="form-control" id="address" placeholder="City" name="city" >
                </div>
            </div>
		</div>
	
		<div class="form-group">
			<label for="nic_no">Phone No :</label>
			<input type="tel" class="form-control" id="phone_no" placeholder="Enter Phone No..." name="phone_no" maxlength="10">			
		</div>	
    <div id="msg2"></div>
		
	
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


    $('#phone_no').keyup(function() {
      var num=$('#phone_no').val()
        if ( num.match('[a-zA-Z ]') || num.length < 10) {
           $('#msg2').html("<span style=color:red;>*That is not a phone Number</span>");
           $('#msg2').show();
          }else{
             $('#msg2').hide();
          }

        });


</script>
