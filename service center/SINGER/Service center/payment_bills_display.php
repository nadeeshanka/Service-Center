 <?php
                   
    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>Bill Number</th>
        <th>Date</th>
        <th>Job Number</th>
        <th>Customer NIC</th>
        <th>Center ID No</th>
        <th>Reason</th>
        <th>Amount</th>
        <th class='bg-warning text-white'></th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $row['bill_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>JO-" . $row['job_no'] . "</td>";
        echo "<td>" . $row['nic_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['reason'] . "</td>";
        echo "<td>Rs:" . $row['amount'] . "/=</td>"; 
        echo "<td> <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal-".$row['bill_no']."'>Pay</button>
                  
                        <!-- The Modal -->
                        <div class='modal' id='modal-".$row['bill_no']."''>
                          <div class='modal-dialog modal-lg'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Receipt</h4>
                                
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";
                               
                                      include("conni.php");
                                      mysqli_select_db($conn,"cs2018g2");
                                      
                                      $nic=$row['nic_no'];

                                       $sql1 = "select * from customer where NIC_No='$nic'";

                                      $result1=mysqli_query($conn,$sql1);
                                      if (mysqli_num_rows($result1) > 0) {
                                      $data= mysqli_fetch_array($result1);
                       
                                      echo "<table><form action='pay_bill.php' method='POST'> 

                                      <tr>
                                        <td>Bill Number :</td><td>".$row['bill_no']."</td><td>Date: ".$row['date']."</td>
                                        <input type='hidden' name='bill'  value='".$row['bill_no']."' class='form-control' >
                                      </tr>
                                      <tr>
                                        <td>Service center :</td><td>".$row['center_id']."</td>
                                      </tr>
                                      <tr>
                                       <td> Job Number:</td><td>".$row['job_no']."</td>

                                      </tr>
                                       <tr>
                                       <td>Customer NIC:</td><td>".$row['nic_no']."</td>
                                       <td> Customer Name :</td><td>". $data['first_name'] ." ".$data['last_name']."</td>
                                      </tr>
                                      <tr>
                                        <td>Payment Reason :</td><td> ".$row['reason']."</td>
                                      </tr>
                                      <tr>
                                        <td>Amount: Rs:</td><td> ".$row['amount'].".00/=</td>
                                      </tr>
                                      <tr>
                                   
                                      <td>
                                        <label for='pay mode'><b>Pay Mode </b>:</label></td>
                                     
                                                <td><select name='mode'>
                                                    <option value='Cash'>Cash</option>
                                                     <option value='Card'>Card</option>
                                                    <option value='Online'>Online</option>
                                                </select></td>
                                     
                                       </tr> 
                                      <tr>
                                        <td>Printed on:</td><td>".date('Y-m-d - h:m:s')."</td>
                                      </tr></table>";}
                                           
                               echo" </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                 
                                  <button type='submit' name='btndownload' value='print' class='btn btn-danger'>Paid</button>
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