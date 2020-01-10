 <?php
                   
    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>Service Request No</th>
        <th>Date & Time</th>
        <th>Customer ID</th>
        <th>Center ID</th>
        <th>Model-Serial No</th>
        <th>Defect</th>
        <th>Gross Estimate</th>
        <th class='bg-dark text-white'>More..</th>
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
        echo "<td> <button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#modal-".$row['complaint_no']."'>view</button>
                  
                        <!-- The Modal -->
                        <div class='modal' id='modal-".$row['complaint_no']."''>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Product Detalis</h4>
                                
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";
                               
                                      include("conni.php");
                                      mysqli_select_db($conn,"cs2018g2");
                                      
                                      $serial=$row['serial_no'];

                                       $sql1 = "select * from product where serial_number='$serial'";

                                      $result1=mysqli_query($conn,$sql1);
                                      if (mysqli_num_rows($result1) > 0) {
                                      $data= mysqli_fetch_array($result1);
                       
                                      echo "<table>

                                      <tr>
                                        <td>Product Type :</td><td>".$data['product_type']."</td>
                                      </tr>
                                      <tr>
                                       <td> Brand :</td><td>".$data['Brand']."</td>
                                      </tr>
                                       <tr>
                                       <td> Model-Serial Number :</td><td>". $data['serial_number'] ."</td>
                                      </tr>
                                      <tr>
                                        <td>Purchase Date :</td><td> ".$data['purchase_date']."</td>
                                      </tr>
                                        
                                      <tr>
                                        <td>Location :</td><td>".$data['location']."</td>
                                      </tr></table>";}
                                           
                               echo" </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                  <form action='accepte.php' method='POST'>
                                    <div class='form-group form-check' id='need'>
                                      <label class='form-check-label'>
                                        <input class='form-check-input' type='checkbox' name='handover' value='need'>Product must handover
                                      </label>
                                    </div>
                                    <div>
                                      <button type='submit' name='accept' value='".$row['complaint_no']."' class='btn btn-danger'>Accept</button>
                                    </div>
                                  </form>
                                  </div> 
                                </div>
                              </div>
                             </div><td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
?>    