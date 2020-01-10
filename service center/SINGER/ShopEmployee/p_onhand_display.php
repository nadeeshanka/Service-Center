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
<th class='bg-warning text-white'>Location </th>
<th class='bg-warning text-white'></th>
<tr>
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
    echo "<td>" . $row['location'] . "</td>";
    echo"<td><button type='button' class='btn btn-outline-dark'  data-toggle='modal' data-target='#modal-".$row['serial_number']."add'><i class='fas fa-align-justify'></i></button>


                <!-- The Modal -->
                        <div class='modal' id='modal-".$row['serial_number']."add'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                            
                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h4 class='modal-title'>Product Manager</h4>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class='modal-body'>";

                                $serial=$row['serial_number']; 
                                echo"<form action='sendproduct.php'method='POST'> 
                                      
                                      <div class='form-group'> 
                                      <label for='job'> Model-Serial Number :</label> ".$serial."
                                      <input type='hidden' name='serial'  value='".$serial."' class='form-control' >
                                      </div>
                                    
                                    </div>
                                  <!-- Modal footer -->
                                  <div class='modal-footer'>
                                
                                  <button type='submit' name='btnEnter' value='' class='btn btn-warning' align='text-center'>Send Product</button>
                                      </form>
                                  </div> 

                                </div>
                              </div>
                            </div></td>";



    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo "</div>"
?>