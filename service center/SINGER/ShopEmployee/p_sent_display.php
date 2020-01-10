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

    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo "</div>"
?>