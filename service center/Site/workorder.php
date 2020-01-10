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

    <title>Work order</title>
    <link rel="stylesheet" type="text/css" href="css/workorder.css">
</head>
<body>
<div class="container-home">
    <div class="row ">
        <div id="space" class="col-sm-12" >
        </div>    
    </div>
</div>
<div class="container-home">
    <div class="row ">
        <div class="col-sm-2" >
            <a class="nav-link" href="Complain.php">
            <span style="font-size: 30px;color:green;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
        </div>
    
        <div id="sheet" class="col-sm-8  bg-light" >   
        
        <div id="topic">
            <p >Work Order</p>
        </div>
            <?php
            session_start();  
            include("conni.php");
            mysqli_select_db($conn,"cs2018g2");
            
            $date=$_GET['date'];
            $serial=$_GET['serial'];



            $sql = "select * from complaint where serial_no='$serial' and date='$date' ";

            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                   
                $row = mysqli_fetch_array($result);

                    echo " <p id='part1'class='bg-warning text-body'>Serice Request No : " . $row['complaint_no'] . "</br>";
                    echo " Service Center ID :".$row['center_id']."</br>" ;
                    echo " Request Date & Time : " . $row['date'] . "</p></br>";
                    echo " Customer NIC : " . $row['NIC_no'] . "</br>";
                    echo " Product Serial Number : " . $row['serial_no']. "</br>";

                    $_SESSION['com']=$row['complaint_no'];    
                    $serial=$row['serial_no'];
                    $defect=$row['defect'];
                    $esti_payment=$row['esti_payment'];
                   
                    $sql1 = "select * from product where serial_number ='$serial' ";

                    $result1=mysqli_query($conn,$sql1);
                    if(!$result1){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    while($data = mysqli_fetch_array($result1))
                    {  
                        echo "Product Type : " . $data['product_type'] . "</br>";
                        echo "Brand : " . $data['Brand'] . "</br>";
                        echo "Purchase Date : " . $data['purchase_date'] . "</br>";
                    } 
                    
                    echo "Product Defect : " .$defect. "</br>";
                    
                    echo "Estimate Payment : ".$esti_payment. "</br></p>"; 

                }
                            
        ?>
        </div>

        <div class="col-sm-2 " >
            <a class="nav-link" href="workorder_download.php">
            <span style="font-size: 30px;color:green;">Download <i class="far fa-arrow-alt-circle-down"></i></span></a>

        </div>
    </div>
</div> 
<div class="container-home">
    <div class="row footer" >
        <div class="col-sm-2 ">
        </div>    
        <div class="col-sm-8  bg-light">
            <h4 id="footer" >Powered by<small class="text-danger"> SINGER(PLC)</small></h4>
        </div>   
        <div class="col-sm-2">         
            
        </div>
    </div>
</div>     
</body>
</html>