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
	<title></title>
</head>
<body>
	<form action="insertCustomerToBacklist.php" method="POST">
      <div class="form-group">
        <label for="nic_no">NIC Number:</label>
        <input type="text" class="form-control " id="nic_no" placeholder="Enter NIC Number..." name="nic" required>
      </div>
        
        <button  type="submit" id="submit" class="btn btn-danger" name="btnback" >Add To Blacklist</button>
    </form>

</body>
</html>
<script type="text/javascript">
    $('#nic_no').on("keyup", function() {
      var nic=$('#nic_no').val(); 
        $(".error").remove();
          if(nic.length < 10){
            $('#nic_no').after('<span class="error" style=color:red;>*ID Number must be at least 10 characters long</span>');
          } 
    });
</script>