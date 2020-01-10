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
                <th>Job Description</th>
                <th class='bg-warning text-white'>Situation</th>
                <th class='bg-warning text-white'></th>

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
            echo "<td>" . $row['job_description'] . "</td>";
            if(empty($row['current_situation']))
              $row['current_situation']="Parts Not Avaliable";
             echo "<td>" . $row['current_situation'] . "</td>";
            
            echo "<td><button type='button' class='btn btn-outline-success' data-toggle='modal' data-target='#modal-".$row['job_no']."'>  Update
                  </button> 


                  <!-- The Modal -->
                        <div class='modal' id='modal-".$row['job_no']."'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Job Situation Update</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";

                                
                                  $job=$row['job_no'];
                                 
    
                                echo"<form action='jobupdate_homevisit.php'method='POST'> 
                                      <div class='form-group'> 
                                      <label for='job'> Job Number : JO-</label>".$job."
                                      <input type='hidden' name='job'  value='$job' class='form-control' >
                                      </div>
                                      <div>
                                      <label class='form-check-label'><b>Warranty </b>: </label> ".$row['warranty']."
                                      </div>
                                      <div class='form-group form-check'>
                                        <label class='form-check-label'>
                                        <input class='form-check-input' type='checkbox' name='warranty' value='Not Valid'>Yes (Do you want to cancel warranty )
                                        </label>
                             
                                      </div>
                                      <div class='form-group'>
                                        <label for='type'><b>Situation </b>:</label>
                                     
                                                <select name='situation'>
                                                    <option value='Processing'>Processing</option>
                                                    <option value=''>Parts Not Avaliable</option>
                                                    <option value='Finished'>Finished</option>
                                                    <option value='Replace'>Replace</option>
                                                </select>
                                      </div>
                                    
                                    <div class='form-group'>
                                        <label for='defect'><b>Job Description(Updated)</b></label>
                                        <textarea class='form-control' rows='4' id='description' name='description'  placeholder='Enter new job description...'></textarea>
                                      </div>
                                    </div>
                              <!-- Modal footer -->
                              <div class='modal-footer'>
                                
                                  <button type='submit' name='btnupdate' value='update' class='btn btn-success' align='text-center'>Update</button>
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