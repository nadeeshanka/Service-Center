 <?php
                   
    echo "<div class='table-responsive'>";
    echo "<table class='table table-hover'>
        <thead class='table-primary'>
        <tr>
        <th>Service Request No</th>
        <th>Date</th>
        <th>Customer NIC</th>
        <th>Center ID</th>
        <th>Product Serial</th>
        <th>Defect</th>
        <th>Gross Estimate</th>
        <th class='bg-warning text-white'>Status</th>
        </tr>
        <thead>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>SER-" . $row['complaint_no'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['NIC_no'] . "</td>";
        echo "<td>" . $row['center_id'] . "</td>";
        echo "<td>" . $row['serial_no'] . "</td>";
        echo "<td>" . $row['defect'] . "</td>";
        echo "<td>" . $row['esti_payment'] . "</td>"; 
        echo "<td>" . $row['status'] ."</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
?>        