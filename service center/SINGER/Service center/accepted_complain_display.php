 <?php
    
               
    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>SER No</th>
        <th>Date & Time</th>
        <th>Product(Type)
        <th>Product Serial</th>
        <th>Defect</th>
        <th>Product Location</th>
        <th>Gross Estimate</th>
        <th class='bg-danger text-white'>Action</th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complaint_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['product_type'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['defect'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['esti_payment'] . "</td>"; 
        echo "<td>  <button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#modal-".$row['complaint_no']."'>  View
                  </button>
                   
      
                        <!-- The Modal -->
                        <div class='modal' id='modal-".$row['complaint_no']."'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Create Job</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";

                                  include("conni.php");
                                  mysqli_select_db($conn,"cs2018g2");
            
                                  $sql2 = "select job_no from job   ORDER BY job_no DESC LIMIT 1  ";
                                  $result2=mysqli_query($conn,$sql2);
                                  $data = mysqli_fetch_array($result2);
                                  $job=$data['job_no'] + 1;
                                  $date = date('Y-m-d');
    
                                echo"<form action='jobcreate.php' method='POST'> 
                                      <div class='form-group'> 
                                      <label for='job'> Job Number : JO-</label> ".$job."
                                      <input type='hidden' name='job'  value='$job' class='form-control' >
                                      </div>
                                       <div class='form-group'>
                                      <label for='date'>Job Date : </label>".$date."
                                      <input type='hidden' name='date' value='$date'  class='form-control'  >
                                      </div>
                                       <div class='form-group'>
                                       <label for='brand'>Service Request Number : SER-</label>".$row['complaint_no']."
                                      <input type='hidden' name='SER' value='".$row['complaint_no']."'  class='form-control'  >
                                      </div>
                                      <div class='form-group'>
                                      <label for='serial'>Model-Serial Number : </label>".$row['serial_no']."
                                      <input type='hidden' name='serial' value='".$row['serial_no']."'  class='form-control' >
                                      </div>
                                       <div class='form-group'>
                                      <label for='center'>Service Center ID : </label>".$row['center_id']."
                                      <input type='hidden' name='center' value='".$row['center_id']."'  class='form-control' >
                                      </div>
                                      
                                      <label for='pdate'>Purchase Date : </label>".$row['purchase_date']."
                                      
                                      <div class='form-group form-check'>
                                        <label class='form-check-label'>
                                        <input class='form-check-input' type='checkbox' name='warranty' value='Valid'><b>Warranty Valid</b>
                                        </label>
                             
                                      </div>
                                      <div class='form-group'>
                                        <label for='type'><b>Job Type </b>:</label>
                                     
                                                <select name='job_type'>
                                                    <option value='Service Center'>Service Center</option>
                                                    <option value='Home Visit'>Home Visit</option>
                                                </select>
                                      </div>";
                                      
                                        mysqli_select_db($conn,"cs2018g2");
                                        $cid=$_SESSION['USERNAME'];
                                        $sql3="SELECT agent_id FROM service_agents WHERE center_id='$cid'";
                                        $result3=mysqli_query($conn,$sql3);
                                        

                                       echo"<div class='form-group'>
                                        <label for='agent'><b>Service Agent </b>:</label>
                                     
                                                <select name='agent'>
                                                <option value=''selected>Select Agent</option>";
                                                while ($get = mysqli_fetch_assoc($result3)){
                                                    echo "<option value='".$get['agent_id']."'>".$get['agent_id']."</option>";
                                                 }   
                                                echo"</select>
                                      </div>
                                      <div class='form-group'>
                                        <label for='defect'><b>Job Description</b></label>
                                        <textarea class='form-control' rows='2' id='description' name='description' ></textarea>
                                      </div>
                                </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                
                                  <button type='submit' name='btncreate' value='create' class='btn btn-danger' >Create Job</button>
                                      </form>
                                  </div>
                                </div>
                               </div>
                            </div> <td>";
                                  
                        
                    
                      
                        
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
?>    
