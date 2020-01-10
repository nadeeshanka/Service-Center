<?php
          echo "<div class='w3-responsive' style='margin-top:90px'>";
          echo "<table class='w3-table w3-bordered w3-striped'>
                <thead>
                <tr class='w3-light-blue'>
                <th>JOB NO </th>
                <th>Complain No</th>
                <th>Date</th>
                <th>Serial Number</th>
                <th>Warranty</th>
                <th>Job Type</th>
                <th>Job Description</th>
                <th class='w3-yellow text-white'>Current situation</th>
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
           
            echo "</tr>";
            echo "</tbody>";
          }
          echo "</table>";
          echo "</div>";      
          
      ?>