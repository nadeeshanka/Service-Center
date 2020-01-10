<?php             
echo "<div class='table-responsive'>";
echo "<table class='table table-hover'>
    <thead class='table-primary'>
    <tr>
    <th>NIC Number </th>
    <th>Name</th>
    <th>Addres</th>
    <th>Telphone</th>
    <th>Email</th>
    </tr>
    <thead>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['nic_no'] . "</td>";
            echo "<td>" . $row['fname'] ." ". $row['lname'] . "</td>";
            echo "<td>" . $row['address1'] .",". $row['street'] .",". $row['city'] . "</td>";
            echo "<td>" . $row['tel'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
                 
        }
    echo "</table>";
    echo "</div>";
?>