
<?php
          echo "<div class='table-responsive'>";
          echo "<table class='table table-hover'>
                <thead class='table-primary'>
                <tr>
                <th>JOB NO </th>
                <th>SER No</th>
                <th>Date</th>
                <th>Serial Number</th>
                <th>Warranty</th>
                <th>Job Type</th>
                <th>Job Description</th>
                <th>Current situation</th>
                <th style='background-color:RGB(0,120,255);color:white;'>Product</th>
                <th style='background-color:RGB(0,0,220);color:white;'>Payment</th>
                </tr>
                <thead>";
          while($row = mysqli_fetch_array($result))
          {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>JO-" . $row['job_no'] . "</td>";
            echo "<td>SER-" . $row['complain_no'] . "</td>";
            echo "<td>" . $row['jobdate'] . "</td>";
            echo "<td>" . $row['serial_no'] . "</td>";
            echo "<td>" . $row['warranty'] . "</td>";
            echo "<td>" . $row['job_type'] . "</td>";
            echo "<td>" . $row['job_description'] . "</td>";
            echo "<td>" . $row['current_situation'] . "</td>";
            echo"<td><button type='button' class='btn btn-success btn-sm'  data-toggle='modal' data-target='#modal-".$row['job_no']."release'>Release</button>


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

                                
                                  $job1=$row['job_no'];
                                  $release=$row['serial_no']; 
                                echo"<form action='product_release.php'method='POST'> 
                                      <div> 
                                      <label for='job'> Job Number : JO-</label>".$job1."
                                      </div>
                                      <div class='form-group'> 
                                      <label for='job'> Model-Serial Number :</label> ".$release."
                                      <input type='hidden' name='release'  value='$release' class='form-control' >
                                      </div>
                                  
                                      <div class='form-group'>
                                        <label for='type'><b>Location(*send to ".$row['delivery']." ) </b>:</label>
                                     
                                                <select name='location'>
                                                    <option value='Service Center'>Select location</option>
                                                    <option value='Showroom'>Showroom</option>
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
                  include("conni.php");
                  mysqli_select_db($conn,"cs2018g2");
                  $sql3="SELECT  bill_no FROM bill WHERE job_no='".$row['job_no']."' ";
                  $result3=mysqli_query($conn,$sql3);
                  $data1 = mysqli_fetch_array($result3);
                  $check=$data1['bill_no']; 
            
                  if(!$check){

                    echo"<td><button type='button' class='btn btn-dark btn-sm'  data-toggle='modal' data-target='#modal-".$row['job_no']."'>Create Bill</button>";




                    echo "<!-- The Modal -->
                        <div class='modal' id='modal-".$row['job_no']."'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Create Bill</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";

                                  include("conni.php");
                                  mysqli_select_db($conn,"cs2018g2");
                                  $sql2="SELECT  NIC_no FROM complaint WHERE complaint_no='".$row['complain_no']."' ";
                                  $result2=mysqli_query($conn,$sql2);
                                  $data = mysqli_fetch_array($result2);
                                  $nic=$data['NIC_no'];
            
                                 
                                  $bill="BIL-".$row['job_no'];

                                  $date = date('Y-m-d');
    
                                echo"<form action='bill_Create.php'method='POST'> 
                                      <div class='form-group'> 
                                      <label for='bill'> Bill Number : </label> ".$bill."
                                      <input type='hidden' name='billno'  value='$bill' class='form-control' >
                                      </div>

                                       <div class='form-group'>
                                      <label for='date'>Bill Date : </label>".$date."
                                      <input type='hidden' name='date' value='$date'  class='form-control'  >
                                      </div>

                                      <div class='form-group'>
                                      <label for='center'>Service Center ID : </label>".$row['center_id']."
                                      <input type='hidden' name='center' value='".$row['center_id']."'  class='form-control' >
                                      </div>

                                       <div class='form-group'>
                                       <label for='jobno'>Job Number : JO-</label>".$row['job_no']."
                                      <input type='hidden' name='jobno' value='".$row['job_no']."'  class='form-control'  >
                                      </div>

                                      <div class='form-group'>
                                      <label for='nic'>Customer NIC Number : </label>".$nic."
                                      <input type='hidden' name='nic' value='".$nic."' class='form-control' >
                                      </div>

              
                                      <div class='form-group'>
                                        <label for='reason'><b>Reason to Pay</b></label>
                                        <textarea class='form-control' rows='2' id='reason' name='reason' placeholder='why customer pay...' required></textarea>
                                      </div>

                                      <div class='form-group'>
                                      Bill Amount Rs : <input type='text' name='amount' id='amount' placeholder='Enter Amount..' required >
                                      </div>
                                      <div id='msg'></div>
                                </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                
                                  <button type='submit' name='btncreate' value='create' class='btn btn-danger' align='text-center'>Create Bill</button>
                                      </form></div> </td>";

                               } else{

                                     echo"<td> <h5><span class='badge badge-light'>Bill Created</span><h5></td>";
                               }      


            echo "</tr>";
            echo "</tbody>";
          }
          echo "</table>";
          echo "</div>";      
?>

<script type="text/javascript">
    $('#amount').keyup(function() {
        if ( $(this).val().match('[a-zA-Z ]')) {
           $('#msg').html("<span style=color:red;>*That is not a amount</span>");
           $('#msg').show();
          }else{
             $('#msg').hide();
          }

        });

   
</script>
</body>
</html>
