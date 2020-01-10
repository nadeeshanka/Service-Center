<?php

echo "<div class='table-responsive'>";
echo "<table class='table table-hover'>
<thead class='table-primary'>
<tr>
<th>NIC Number </th>
<th>Serial Number</th>
<th>Product Type</th>
<th>Brand</th>
<th>Purchase Date</th>
<th>Service Center ID</th>
<th>More..<th>
</tr>
<thead>";
while($row = mysqli_fetch_assoc($result1))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['NIC_no'] . "</td>";
    echo "<td>" . $row['serial_number'] . "</td>";
    echo "<td>" . $row['product_type'] . "</td>";
    echo "<td>" . $row['Brand'] . "</td>";
    echo "<td>" . $row['purchase_date'] . "</td>";
    echo "<td>" . $row['center_id'] . "</td>";
    echo"<td> <button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#note".$row['serial_number']."'>History Note</button>

    <!-- The Modal -->
    <div class='modal fade' id='note".$row['serial_number']."'>
      <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
        
          <!-- Modal Header -->
          <div class='modal-header'>
            <h4 class='text-primary'>History Note</h4>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
          </div>

          <!-- Modal body -->";
          echo"<div class='modal-body'>";
          echo "<table>";
          echo "<tr>";
          echo "<td>Customer NIC : " . $row['NIC_no'] . "</td></tr>";
          echo "<tr><td>Product Serial number : " . $row['serial_number'] . "</td></tr>";
          echo "<tr><td>Type : " . $row['product_type'] . ""."</td>";
          echo "<td>Brand : " . $row['Brand'] . "</td></tr>";
          echo "<tr><td>Purchase Date : " . $row['purchase_date'] . ""."</td>";
          echo "<td>Service Center : " . $row['center_id'] . "</td></tr>";
          echo "</table>";
          echo "<br>";
          $serial=$row['serial_number'];
          $sql3 = "SELECT * FROM job WHERE serial_no='$serial'";
          $result3=mysqli_query($conn,$sql3);

          if(!$result3){
            die("Inavlid query".mysqli_error($conn)); 
          }
          echo"<h4>Repairment Hisotry</h4><br>";
          if(mysqli_num_rows($result3) > 0) { 
            echo"<h4>Job Hisotry</h4>";
            echo "<div class='table-responsive'>";
            echo "<table>
              <thead  class='bg-warning text-white'>
              <tr>
              <th>JOB NO </th>
              <th>Service Request No</th>
              <th>Date</th>
              <th>Center ID</th>
              <th>Job Type</th>
              <th>Job Description</th>
              <th>Current situation</th>
              </tr>
              <thead>";
              while($row1 = mysqli_fetch_array($result3))
              {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>JO-" . $row1['job_no'] . "</td>";
                echo "<td>SER-" . $row1['complain_no'] . "</td>";
                echo "<td>" . $row1['jobdate'] . "</td>";
                echo "<td>" . $row1['center_id'] . "</td>";
                echo "<td>" . $row1['job_type'] . "</td>";
                echo "<td>" . $row1['job_description'] . "</td>";
                echo "<td>" . $row1['current_situation'] . "</td>";
                echo "</tr>";
                echo "</tbody>";
              }
              echo "</table>";
              echo "</div>";   
              echo"<br>";
                 
              }
              else{echo"No Relevant Records for Serial Number :".$serial." ";
              }

              $sql2 = "select * from replacement where serial_no ='$serial'  ";

              $result2=mysqli_query($conn,$sql2);
              echo"<h4>Replacement Hisotry</h4><br>";
              if(mysqli_num_rows($result2) > 0) { 
                    
                echo "<div class='table-responsive'>";
                echo "<table class='table table-bordered' >
                    <thead class='table-dark'>
                    <tr>
                    <th>Replacement Number</th>
                    <th>Center ID</th>
                    <th>Serial Number</th>
                    <th>Replacement Type</th>
                    <th>Replacement Reason</th>
                      
                    </tr>
                    <thead>";
                while($data = mysqli_fetch_array($result2))
                {
                  echo "<tbody>";
                  echo "<tr>";
                  echo "<td>REP-" . $data['replacement_no'] . "</td>";
                  echo "<td>" . $data['center_id'] . "</td>";
                  echo "<td>" . $data['serial_no'] . "</td>";
                  echo "<td>" . $data['replacement_type'] . "</td>";
                  echo "<td>" . $data['replacement_reason'] . "</td>";
                  echo "</tr>";
                  echo "</tbody>";
                }
                echo "</table>";
                echo "</div>";
              }
              else{
                echo"No Relavant Records for Serial Number :".$serial." "; 
              }
              echo"<br>";       
          
              echo"<!-- Modal footer -->
              <div class='modal-footer'>
                
              </div>
          
            </div>
          </div>
        </div>
      </td>";
    echo "</tr>";
    echo "</tbody>";
  } 
  echo "</table>";
  echo "</div>"
?>