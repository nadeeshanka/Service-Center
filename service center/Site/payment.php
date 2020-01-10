<?php 
include('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>online payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">  

  <link rel="stylesheet" type="text/css" href="css/payment.css">
</head>
    
<body id="payForm"> 
<div class="container-fluid">
    <div class="row header">   
        <div >
            <img src="img/slogo.png" class="float-left" style="width:350px;height: 70px;">
        </div>
    </div>
 </div>	

    <div class="container">
      <div  class="row">
        <div  class="col-sm-1 col-md-3 col-lg-3">
          <a class="nav-link" href="ActiveHome.php">
            <span style="font-size: 30px;color:red;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
        </div>
        <div  id ="main" class="col-sm-10 col-md-6 col-lg-6 ">
          <div id="login">

			<?php
				session_start();
				$nic = $_SESSION['NIC'] ;
				$sql = "SELECT *  FROM bill WHERE status='Not Paid' and nic_no ='".$nic."'";
				$result = mysqli_query($connection,$sql);	
   			

    if (isset($_POST['checkBtn'])) {
      $getID = $_POST['getID'];
      $sql2 = "SELECT amount FROM bill WHERE bill_no='$getID'";
      $res=mysqli_query($connection,$sql2);
      $getBill =  mysqli_fetch_assoc($res);
    }
      ?>

   
     <h2><b>PAY YOUR BILLS</b></h2>
	<form action="" method="post"> 
  <div class="form-group">
        <div  class="col-sm-1 col-md-3 col-lg-3"></div>

    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1" name="getID">
      <option>Select bill Number</option>
         <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <option value='<?php echo $row['bill_no']; ?>'><?php echo $row['bill_no']; ?></option>
          <?php endwhile; ?>
        <?php echo $row['bill_no']; ?>
    </select>
    
  </div>
   <input type="submit" name="checkBtn" class="btn btn-danger" value="Check" ><br><br><br><br>

 <h2 class="text-danger">  <?php if(isset($getBill['amount'])){echo "LKR".$getBill['amount']."/=" ; } ?> </h2>
     
    </form>
   
    <?php
	$sql2 = "SELECT * FROM customer WHERE NIC_no='".$nic."'";
      $rese=mysqli_query($connection,$sql2);
      $name =  mysqli_fetch_assoc($rese);
      //echo $name['first_name'];
      //echo $name['last_name'];
	?>
	
    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1211913">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/example/projects/Site/payment.php">
    <input type="hidden" name="cancel_url" value="http://localhost/example/projects/Site/payment.php">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
   
    <input type="hidden" name="order_id" value="ItemNo12345">
    <input type="hidden" name="items" value="Door bell wireless">
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value=<?php if (isset($getBill['amount'])) {
      echo $getBill['amount'] ;  
    } ?> 
    
    <div class="row">
    <input type="hidden" name="first_name" value="<?php echo $name['first_name']; ?> ">
    <input type="hidden" name="last_name" value="<?php echo $name['last_name']; ?>">
    <input type="hidden" name="email" value="<?php echo $name['email']; ?>">
    <input type="hidden" name="phone" value="<?php echo $name['tel_no']; ?>">
    <input type="hidden" name="address" value="<?php echo $name['address1']; ?>">
    <input type="hidden" name="city" value="<?php echo $name['city']; ?>">
    <input type="hidden" name="country" value="Sri Lanka">
    </div>

          <button type="submit" name="payment" value="Buy Now" class="alert alert-primary" > PAY HERE FROM YOUR CARD</button>

          <div >
              <img src="img/payments.png" class="float-left" style="width:450px;height: 45px;">
            </div>
 
  </form>
        <br><br>
        <h6 id= "footer">Powered by<small class="text-danger"> SINGER(PLC)</small></h6>
    
        </div>
        <div  class="col-sm-1 col-md-3 col-lg-3"></div>
        </div>
    </div>
  </body>
</html>


