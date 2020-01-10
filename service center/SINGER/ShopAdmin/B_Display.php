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
            
            if(($row['tel']==0)&& ($row['fname']=='blacklisted') && ($row['lname']=='blacklisted')){
            echo "<tr>";   
            echo "<td>" . $row['nic_no'] . "</td>";
            echo "<td><p class='bg-dark text-dark'>.</p></td>";
            echo "<td><p class='bg-dark text-dark'>.</p></td>";
            echo "<td><p class='bg-dark text-dark'>.</p></td>";
            echo "<td><p class='bg-dark text-dark'>.</p></td>";
           
            echo "<form action='permission.php' method='post'>";
            echo "<input name='nic_no' value='".$row['nic_no']."' type='hidden' />";

            echo "<td> <button type='submit' name='btndelet' value='delet' class='btn btn-dark'>Remove</button></td>";
            }
            else{
            echo "<tr>";
            echo "<td>" . $row['nic_no'] . "</td>";
            echo "<td>" . $row['fname'] ." ". $row['lname'] . "</td>";
            echo "<td>" . $row['address1'] .", ". $row['street'] .", ". $row['city'] . "</td>";
            echo "<td>0" . $row['tel'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
                
            echo "<form action='oneBacklist.php' method='post'>";
            echo "<input name='nic_no' value='".$row['nic_no']."' type='hidden' />";
            echo "<input name='fname' value='". $row['fname'] ."' type='hidden' />";
            echo "<input name='lname' value='". $row['lname'] ."' type='hidden' />";
            echo "<input name='pwd' value='". $row['passward'] ."' type='hidden' />";
            echo "<input name='address1' value='". $row['address1']."' type='hidden' />";
            echo "<input name='street' value='". $row['street'] ."' type='hidden' />";
            echo "<input name='city' value='". $row['city'] ."' type='hidden' />";
            echo "<input name='tel' value='".$row['tel']."' type='hidden' />";
            echo "<input name='email' value='". $row['email'] ."' type='hidden' />";
            echo "<td> <button type='submit' name='btnremove' value='Remove' class='btn btn-success' >Remove</button></td>";
            }
            echo "</form>";
            echo "</tr>";
            echo "</tbody>";
                 
        }
    echo "</table>";
    echo "</div>";
?>