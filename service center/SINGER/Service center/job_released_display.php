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
                <th>Current situation</th>
                <th style='background-color:RGB(0,120,255);color:white;'>Product Location</th>
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
            echo "<td>" .$row['location']."</td>";


            echo "</tr>";
            echo "</tbody>";
          }
          echo "</table>";
          echo "</div>";      
          
      ?>