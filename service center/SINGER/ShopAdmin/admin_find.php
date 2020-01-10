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

    <title>Find Job</title>
    <link rel="stylesheet" type="text/css" href="css/admin_find.css">
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
            <a class="nav-link" href="admin.html">
            <span style="font-size: 30px;color:green;"><i class="far fa-arrow-alt-circle-left"></i> Back</span></a>
        </div>
    
        <div id="sheet" class="col-sm-8  bg-light" >   
        
        <div id="topic">
            <p >Work Order</p>
        </div>
            <?php
              
            include("conni.php");
            mysqli_select_db($conn,"cs2018g2");
            
            if(isset($_POST['btnfind'])){
            $search=$_POST['find'];

            $sql = "select * from complaint where complaint_no='$search' ";

            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                   
                $row = mysqli_fetch_array($result);

                    echo "<p id='part1'>SER Number :SER- " . $row['complaint_no'] . "</br>";
                    echo "Request Date : " . $row['date'] . "</br><p>";
                    

                    $nic=$row['NIC_no'];

                    $sql1 = "select * from customer where NIC_No='$nic'";
                    $result1=mysqli_query($conn,$sql1);
                    if (mysqli_num_rows($result1) > 0) {
                    $data1= mysqli_fetch_array($result1);

                    echo"<div class='container-home'>
                            <div class='row'>
                            <div class='col-sm-6' >
                    <b>Customer</b> </br><p id='part2'>NIC : ".$data1['NIC_No']."</br>
                     Mr/Mrs: ".$data1['first_name']." ".$data1['last_name']."</br>
                     Tel: 0".$data1['tel_no']."</br></p></div>";
                    }

                    $center=$row['center_id'];
                    echo"<div class='col-sm-6'><b>Service Center</b>";

                    $sql2="select * from service_center where center_id='$center'";
                    $result2=mysqli_query($conn,$sql2);

                    if (mysqli_num_rows($result) > 0) {
                        $data2 = mysqli_fetch_array($result2);

                        echo "<p id='part2'>".$data2['name'].".</br>";
                        echo $data2['location'].".</br>";
                        echo "Tel: 0". $data2['tel']."</p></div></div></div>";

                     }


                    $serial=$row['serial_no'];
                    $defect=$row['defect'];
                    if($row['esti_payment']=="Not_Requested"){

                       $esti_payment="Not Request";
                    }
                    else{ 
                         $esti_payment=$row['esti_payment'];
                         
                    }

                    
                    echo "<p id='part1'>Product Defect : " .$defect. "</br>";
                    
                    echo "Estimate Payment : ".$esti_payment. "</br></p>

                    <div id='subtopic'>
                        <p >Product details</p>
                    </div>
                    <p id='part3'class='bg-warning text-body'>Product Serial Number : " . $serial. "</br>";
                    $sql3 = "select * from product where serial_number ='$serial' ";

                    $result3=mysqli_query($conn,$sql3);
                    if(!$result3){
                        die("Inavlid query".mysqli_error($conn)); 
                    }
                    while($data3 = mysqli_fetch_array($result3))
                    {  
                        echo "Product Type : " . $data3['product_type'] . "</br>";
                        echo "Brand : " . $data3['Brand'] . "</br>";
                        echo "Purchase Date : " . $data3['purchase_date'] . "</br></p>";
                    } 
                     
                    echo"<div id='subtopic'>
                        <p >Job details</p>
                    </div>";
                    $ser=$row['complaint_no'];
                     $sql4 = "SELECT * FROM job WHERE complain_no='$ser'";
                     $result4=mysqli_query($conn,$sql4);
                    if (mysqli_num_rows($result4) > 0) {
  
                    while($data5 = mysqli_fetch_array($result4))
                    { 


                    echo "<p  id='part4'class='bg-primary text-white'>Job number :JO-" . $data5['job_no'] . "</br>";
                    echo "Job Date : " . $data5['jobdate'] . "</br>";
                    echo "Center ID : " . $data5['center_id'] . "</br>";
                    
                    echo "Job Type : " . $data5['job_type'] . "</br>";
                    echo "Job Description : " . $data5['job_description'] . "</br>";
                    echo "Current situation : " . $data5['current_situation'] . "</br></p>";
  
                    }

                }else{
                    echo"<p id='part4' style='text-align:center;'> Relevant job not created yet</p>";
                }           
 
            }
            else{
                echo "<div class='jumbotron jumbotron-fluid'>
                        <div class='container'>
                            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                            <p id='error' class='text-danger' >*Please enter full SER-Number</p>
                        </div>
                    </div";
            
            }
        }
    ?>
    </div>


    <div class="col-sm-2 " ></div>
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