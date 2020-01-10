<?php
        
    include("conni.php");
    mysqli_select_db($conn,"cs2018g2");
        
    $find=$_POST['find'];
    $sel1=$_POST['sel1'];
    $sel2=$_POST['sel2'];

if(($sel1==1) &&($sel2==1)){
  
    $sql1 = "SELECT * FROM customer WHERE first_name LIKE '%$find%' OR last_name LIKE '%find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        

        echo "<div class='table-responsive'>";
        echo "<table class='table table-hover'>
            <thead class='table-primary'>
            <tr>
            <th>NIC Number </th>
            <th style='background-color:RGB(0,120,255);color:white;'>Name</th>
            <th>Addres</th>
            <th>Telphone</th>
            <th>Email</th>
            </tr>
            <thead>";
            while($row = mysqli_fetch_array($result))
                {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" . $row['NIC_No'] . "</td>";
                    echo "<td>" . $row['first_name'] ." ". $row['last_name'] . "</td>";
                    echo "<td>" . $row['address1'] .",". $row['street'] .",". $row['city'] . "</td>";
                    echo "<td>0" . $row['tel_no'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                         
                }
            echo "</table>";
            echo "</div>";

        }else{
        echo "<div class='jumbotron jumbotron-fluid'>
            <div class='container'>
                <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
                <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
            </div>
            </div";
    }
    }


elseif(($sel1==1) &&($sel2==2)){
  
    $sql1 = "SELECT * FROM customer WHERE NIC_No LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        

        echo "<div class='table-responsive'>";
        echo "<table class='table table-hover'>
            <thead class='table-primary'>
            <tr>
            <th style='background-color:RGB(0,120,255);color:white;'>NIC Number </th>
            <th>Name</th>
            <th>Addres</th>
            <th>Telphone</th>
            <th>Email</th>
            </tr>
            <thead>";
            while($row = mysqli_fetch_array($result))
                {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" . $row['NIC_No'] . "</td>";
                    echo "<td>" . $row['first_name'] ." ". $row['last_name'] . "</td>";
                    echo "<td>" . $row['address1'] .",". $row['street'] .",". $row['city'] . "</td>";
                    echo "<td>0" . $row['tel_no'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                         
                }
            echo "</table>";
            echo "</div>";

        }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
    }

elseif(($sel1==2) &&($sel2==2)){
  
    $sql1 = "SELECT * FROM product WHERE NIC_no LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        
        echo "<div class='table-responsive'>";
        echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th style='background-color:RGB(0,120,255);color:white;'>NIC Number </th>
        <th>Serial Number</th>
        <th>Product Type</th>
        <th>Brand</th>
        <th>Purchase Date</th>
        <th>Service Center ID</th>
        <th class='bg-warning text-white'>Location </th>
        </tr>
        <thead>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['NIC_no'] . "</td>";
            echo "<td>" . $row['serial_number'] . "</td>";
            echo "<td>" . $row['product_type'] . "</td>";
            echo "<td>" . $row['Brand'] . "</td>";
            echo "<td>" . $row['purchase_date'] . "</td>";
            echo "<td>" . $row['center_id'] . "</td>";
            if($row['delivery']=="null"){
                $row['delivery']="Service Center";
                echo "<td>" . $row['delivery'] . "</td>";
            }else{
                echo "<td>" . $row['delivery'] . "</td>";  
            }
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        echo "</div>";
        

        }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
    }
elseif(($sel1==2) &&($sel2==5)){
  
    $sql1 = "SELECT * FROM product WHERE serial_number LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
        
        echo "<div class='table-responsive'>";
        echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th >NIC Number </th>
        <th style='background-color:RGB(0,120,255);color:white;'>Serial Number</th>
        <th>Product Type</th>
        <th>Brand</th>
        <th>Purchase Date</th>
        <th>Service Center ID</th>
        <th class='bg-warning text-white'>Location </th>
        </tr>
        <thead>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['NIC_no'] . "</td>";
            echo "<td>" . $row['serial_number'] . "</td>";
            echo "<td>" . $row['product_type'] . "</td>";
            echo "<td>" . $row['Brand'] . "</td>";
            echo "<td>" . $row['purchase_date'] . "</td>";
            echo "<td>" . $row['center_id'] . "</td>";
            if($row['delivery']=="null"){
                $row['delivery']="Service Center";
                echo "<td>" . $row['delivery'] . "</td>";
            }else{
                echo "<td>" . $row['delivery'] . "</td>";  
            }
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        echo "</div>";
        

        }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
    }
elseif(($sel1==3) &&($sel2==2)){
  
    $sql1 = "SELECT * FROM complaint WHERE NIC_no LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {

    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>Service Request No</th>
        <th>Date</th>
        <th style='background-color:RGB(0,120,255);color:white;'>Customer NIC</th>
        <th>Center ID</th>
        <th>Product Serial</th>
        <th>Defect</th>
        <th>Gross Estimate</th>
        <th class='bg-warning text-white'>Status</th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complaint_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['NIC_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['defect'] . "</td>";
        echo "<td>" . $row['esti_payment'] . "</td>"; 
        echo "<td>" . $row['status'] ."</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>"; 
        
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
}

elseif(($sel1==3) &&($sel2==3)){
  
    $sql1 = "SELECT * FROM complaint WHERE complaint_no LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {

    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th style='background-color:RGB(0,120,255);color:white;'>Service Request No</th>
        <th>Date</th>
        <th>Customer NIC</th>
        <th>Center ID</th>
        <th>Product Serial</th>
        <th>Defect</th>
        <th>Gross Estimate</th>
        <th class='bg-warning text-white'>Status</th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complaint_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['NIC_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['defect'] . "</td>";
        echo "<td>" . $row['esti_payment'] . "</td>"; 
        echo "<td>" . $row['status'] ."</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>"; 
        
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,  nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
}
elseif(($sel1==3) &&($sel2==5)){
  
    $sql1 = "SELECT * FROM complaint WHERE serial_no LIKE '%$find%' ";
    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {

    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>Service Request No</th>
        <th>Date</th>
        <th>Customer NIC</th>
        <th>Center ID</th>
        <th style='background-color:RGB(0,120,255);color:white;'>Product Serial</th>
        <th>Defect</th>
        <th>Gross Estimate</th>
        <th class='bg-warning text-white'>Status</th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complaint_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['NIC_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['defect'] . "</td>";
        echo "<td>" . $row['esti_payment'] . "</td>"; 
        echo "<td>" . $row['status'] ."</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>"; 
        
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,  nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
}
elseif(($sel1==4) &&($sel2==3)){
    $sql1 = "SELECT * FROM job WHERE complain_no LIKE '%$find%'";

    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='table-responsive'>";
      echo "<table class='table table-hover'>
            <thead class='table-primary'>
            <tr>
            <th style='background-color:RGB(0,120,255);color:white;'>Service Request NO</th>
            <th>JOB NO </th>
            <th>Center ID</th>
            <th>Model-Serial Number</th>
            <th>Warranty</th>
            <th>Job Type</th>
            <th>Job Description</th>
            <th>Current situation</th>
            </tr>
            <thead>";
      while($row = mysqli_fetch_array($result))
      {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complain_no'] . "</td>";
        echo "<td>JO-" . $row['job_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['warranty'] . "</td>";
        echo "<td>" . $row['job_type'] . "</td>";
        echo "<td>" . $row['job_description'] . "</td>";
        echo "<td>" . $row['current_situation'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
      }
      echo "</table>";
      echo "</div>";
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry, nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
}
elseif(($sel1==4) &&($sel2==4)){
    $sql1 = "SELECT * FROM job WHERE job_no LIKE '%$find%'";

    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='table-responsive'>";
      echo "<table class='table table-hover'>
            <thead class='table-primary'>
            <tr>
            <th>Service Request NO</th>
            <th style='background-color:RGB(0,120,255);color:white;'>JOB NO </th>
            <th>Center ID</th>
            <th>Model-Serial Number</th>
            <th>Warranty</th>
            <th>Job Type</th>
            <th>Job Description</th>
            <th>Current situation</th>
            </tr>
            <thead>";
      while($row = mysqli_fetch_array($result))
      {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complain_no'] . "</td>";
        echo "<td>JO-" . $row['job_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['warranty'] . "</td>";
        echo "<td>" . $row['job_type'] . "</td>";
        echo "<td>" . $row['job_description'] . "</td>";
        echo "<td>" . $row['current_situation'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
      }
      echo "</table>";
      echo "</div>";
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,  nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }
}

elseif(($sel1==4) &&($sel2==5)){
    $sql1 = "SELECT * FROM job WHERE serial_no LIKE '%$find%'";

    $result=mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='table-responsive'>";
      echo "<table class='table table-hover'>
            <thead class='table-primary'>
            <tr>
            <th>Service Request NO</th>
            <th>JOB NO </th>
            <th>Center ID</th>
            <th style='background-color:RGB(0,120,255);color:white;'>Model-Serial Number</th>
            <th>Warranty</th>
            <th>Job Type</th>
            <th>Job Description</th>
            <th>Current situation</th>
            </tr>
            <thead>";
      while($row = mysqli_fetch_array($result))
      {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complain_no'] . "</td>";
        echo "<td>JO-" . $row['job_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['warranty'] . "</td>";
        echo "<td>" . $row['job_type'] . "</td>";
        echo "<td>" . $row['job_description'] . "</td>";
        echo "<td>" . $row['current_situation'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
      }
      echo "</table>";
      echo "</div>";
    }else{
        echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry,  nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }

}

else{
    echo "<div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h2 class='text-danger'> SINGER <small class='text-primary'> Service</small></h2>      
            <p>Sorry, nothing matched your search terms. Please try again with different keywords.</p>
        </div>
    </div";
    }




?>