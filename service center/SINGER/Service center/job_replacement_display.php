<?php
  include("conni.php");
  mysqli_select_db($conn,"cs2018g2");

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
                <th style='background-color:RGB(0,120,255);color:white;'>Approval</th>
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
           if($row['current_situation'] =='Replace'){
           
            echo "<td> <button type='button' class='btn btn-outline-info'  data-toggle='modal' data-target='#modal-".$row['job_no']."'> Send </button> 
                   
      
                        <!-- The Modal -->
                        <div class='modal' id='modal-".$row['job_no']."'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Replacement Approval</h4>
                                <button type='button' class='close' data-dismiss='modal'> &times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";

                                  include("conni.php");
                                  mysqli_select_db($conn,"cs2018g2");
            
                                  $sql2 = "select replacement_no from replacement   ORDER BY replacement_no DESC LIMIT 1  ";
                                  $result2=mysqli_query($conn,$sql2);
                                  $data = mysqli_fetch_array($result2);
                                  $replace=$data['replacement_no'] + 1;
                                  $date = date('Y-m-d');
    
                                echo"<form action='replace_approval.php' method='POST'> 
                                      <div class='form-group'> 
                                      <label for='Rno'>Replacement Number : REP-</label> ".$replace."
                                      <input type='hidden' name='Rno'  value='$replace' class='form-control' >
                                      </div>
                                       <div class='form-group'>
                                      <label for='date'>Replacement Date : </label> ".$date."
                                      <input type='hidden' name='date' value='$date'  class='form-control'  >
                                      </div>
                                       <div class='form-group'>
                                       <label for='center'>Service Center ID : </label> ".$row['center_id']."
                                      <input type='hidden' name='center' value='".$row['center_id']."'  class='form-control'  >
                                      </div>
                                      <div class='form-group'>
                                      <label for='serial'>Model-Serial Number : </label> ".$row['serial_no']."
                                      <input type='hidden' name='serial' value='".$row['serial_no']."'  class='form-control' >
                                      </div>
                                       <div class='form-group'>
                                      <label for='warranty'>Warranty : </label> ".$row['warranty']."
                                      <input type='hidden' name='warranty' value='".$row['warranty']."'  class='form-control' >
                                      </div>
                                  
                                      <div class='form-group'>
                                        <label for='reason'><b>Replacement Reason</b></label>
                                        <textarea class='form-control' rows='4' id='reason' name='reason' required></textarea>
                                      </div>

                                      <div class='form-group'>
                                        <label for='type'><b>Replacement Type</b></label>
                                        <textarea class='form-control' rows='1' id='type' name='type' required ></textarea>
                                      </div> 
                                  
                                      
                                </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                
                                  <button type='submit' name='btnsend' value='send' class='btn btn-primary' >Send Approval</button>
                                      </form>
                                  </div>
                                </div>
                               </div>
                            </div> <td>";
                            }else{
                              echo"<td> <span style='font-size: 25px;color:rgb(210,0,100);'><i class='fas fa-check'></i></span> </td>";
                            }
                                  
                        
                    
                      
                        
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
?>    
