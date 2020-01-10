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
        <th>Pay Mode</th>
        <th class='bg-warning text-white'>Product</th>
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
        $amount = number_format($row['amount']);
        echo "<td class='text-right'>Rs:" . $amount . "/=</td>"; 
        echo "<td>" . $row['pay_mode'] . "</td>"; 
        $job=$row['job_no'];
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2");
        $sql1 = "select * from job,product  where job.serial_no=product.serial_number and job.job_no='$job' ";
                   
        $result1=mysqli_query($conn,$sql1);
        if(!$result1){
        die("Inavlid query".mysqli_error($conn)); 
        }
       
        $data = mysqli_fetch_array($result1); 


        if($data['location']<>'Customer'){


        echo"<td> <button type='button' class='btn btn-success btn-sm'  data-toggle='modal' data-target='#modal-".$row['job_no']."release'>Release</button>


                <!-- The Modal -->
                        <div class='modal' id='modal-".$row['job_no']."release'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Product Release</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";
                             
                              $release=$data['serial_no']; 
                              echo"<form action='pay_product_release.php' method='POST'> 
                              <div> 
                              <label for='job'> Job Number : JO-</label>".$job."
                              </div>
                              <div class='form-group'> 
                              <label for='job'> Model-Serial Number :</label> ".$release."
                              <input type='hidden' name='release'  value='$release' class='form-control' >
                              </div>
                                  
                              <div class='form-group'>
                                <label for='type'><b>Location </b>:</label>
                                     
                                <select name='location'>
                                    <option value='Service Center'>Select location</option>
                                    <option value='Showroom'>Show room</option>
                                    <option value='Customer'>Customer's Place</option>
                                </select>
                              </div>
                                    
                              </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                
                                <button type='submit' name='btnrelease' value='release' class='btn btn-success' align='text-center'>Product Release</button>
                                </form>
                              </div> 

                              </div>
                            </div>
                          </div></td>";
                         
                        } else{

                              echo"<td> <h5><span class='badge badge-light'>Released</span><h5></td>";
                              }  
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
?>    