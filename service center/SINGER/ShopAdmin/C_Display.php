<?php

echo "<div class='table-responsive'>";
echo "<table class='table table-hover'>
<thead class='table-primary'>
<tr>
<th>NIC Number </th>
<th>Name</th>
<th>Address</th>
<th>Telephone</th>
<th>Email</th>
<th>Action</th>
</tr>
<thead>";
while($row = mysqli_fetch_array($result))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['NIC_No'] . "</td>";
    echo "<td>" . $row['first_name'] ." ". $row['last_name'] . "</td>";
    echo "<td>" . $row['address1'] .",". $row['street'] .",". $row['city'] . "</td>";
    echo "<td>" . $row['tel_no'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";

    echo "<form action='oneCustomer.php' method='post'>";
                   
    echo "<input name='nic_no' value='".$row['NIC_No']."' type='hidden' />";
    echo "<input name='fname' value='". $row['first_name'] ."' type='hidden' />";
    echo "<input name='lname' value='". $row['last_name'] ."' type='hidden' />";
    echo "<input name='pwd' value='". $row['passward'] ."' type='hidden' />";
    echo "<input name='address1' value='". $row['address1']."' type='hidden' />";
    echo "<input name='street' value='". $row['street'] ."' type='hidden' />";
    echo "<input name='city' value='". $row['city'] ."' type='hidden' />";
    echo "<input name='tel' value='".$row['tel_no']."' type='hidden' />";
    echo "<input name='email' value='". $row['email'] ."' type='hidden' />";
    echo "<td> <button type='submit' name='btnblacklist' value='Blacklist' class='btn btn-danger' >Blacklist</button></td>";
    echo "</form>";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo "</div>";

?>