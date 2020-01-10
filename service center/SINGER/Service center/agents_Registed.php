 <?php
    session_start();
  ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">


  <title>Sevice Center</title>
  <link rel="stylesheet" type="text/css" href="css/agents_Registed.css">
  
</head>

<body >
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 ">
        <img src="img/slogo.png" class="float-left" style="width:350px;height:70px;">
      </div>
      <div class="col-sm-7 ">
        <nav class="navbar navbar-expand-sm  navbar-light justify-content-center">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="available_complain.php">
                <span style="font-size: 20px;color:RGB(91, 255, 51)">
                  <i class="fas fa-bolt"></i></span>
                   Service Requests
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="job_servicecenter.php">
              <span style="font-size: 20px;color:RGB(232, 39, 83)">
                <i class="fas fa-check-double"></i></span>
                  Current Jobs 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="agents_Registed.php">
              <span style="font-size: 20px;color:RGB(15, 84, 232);">
                <i class="fas fa-diagnoses"></i></span> 
                <span style="font-size: 20px;color:RGB(0, 0, 0);">
                  Service Agents</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment_bills.php">
               <span style="font-size: 20px;color:RGB(220, 120, 0);">
                <i class="fab fa-amazon-pay"></i></span> 
                 Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
              <span style="font-size: 20px;color:rgb(214, 13, 187);">
                <i class="fas fa-sign-out-alt"></i></span> 
                Log Out 
               </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row content">
      <div class="col-sm-2 ">
        <div class="card" style="width:auto">
          <div class="card-body">

             <h3 class="card-title"><i class="fas fa-users-cog"></i>  Service Center</h3>     
          </div> 
        </div>

        <div class="card" style="width:auto;">

          <ul class="nav flex-column nav-pills">
            <li class="nav-item">
              <a class="nav-link " href="agents_add.php">
                <span style="font-size: 25px;color:rgb(0,0,152);">
               <i class="fas fa-user-plus"></i>
                </span>  
                <span style="font-size:18px;color:rgb(0,0,0);">Add Agents</span>
              </a>
            </li>
              <br>
            <li class="nav-item">
              <a class="nav-link active" href="agents_Registed.php">
              <span style="font-size: 25px;">
              <i class="fas fa-user-check"></i>
              </span>
               <span style="font-size:18px;">Registered Agents</span>
              </a>
            </li>
            <br>
             <li class="nav-item">
              <a class="nav-link  " href="agent_vacancy.php">
              <span style="font-size: 25px;color:rgb(0,0,152);">
               <i class="fas fa-address-card"></i>
                </span>
              <span style="font-size:18px;color:rgb(0,0,0);">Job Vacancies</span>
              </a>
            </li>
            <br>
          </ul>
        </div>  
      </div>
                    


  <div  class="col-sm-10">
      <div class="card bg-light text-dark" style="height:50px;">
        <div class="card-body"> 
          <p id="p1">Service-Agent / Registered Agents </p>
        </div>
      </div>
      <div id="space"></div> 
      <div class="row">
      <div class="col-sm-10">
        <button id='button1' type='button' class='btn btn-outline-primary'>More details</button>
        <button id='button2' type='button' class='btn btn-outline-danger'>Hide details</button>
      </div>
      <div class="col-sm-2">
          <button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#edit'><i class='fas fa-user-edit'></i></span> Edit Agents</button>

              <div class='modal fade' id='edit'>
                 <div class='modal-dialog'>
                  <div class='modal-content'>
      
            <!-- Modal Header -->
             <div class='modal-header'>
              <h4 class='modal-title'>Edit Personal Details</h4>
              <button type='button' class='close' name='edit' data-dismiss='modal'>&times;</button>
            </div>
        
             <!-- Modal body -->
            <div class='modal-body'>
            <?php
            include("agent_edit.php");
             ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div id="space"></div> 
    <div>
      <?php      
        include("conni.php");
        mysqli_select_db($conn,"cs2018g2"); 
        $cid=$_SESSION['USERNAME'];
    
        $sql1 = "SELECT * FROM service_agents WHERE center_id='$cid'";

          $result=mysqli_query($conn,$sql1);
          if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_array($result))
            {
            echo"
            <div class='container-fluid'>
            <div class='row' >
            <div  class='col-sm-9'>
            <div class='media border p-2' style='width:auto;'>
              <img src='img/agent.png' alt='John Doe' class='mr-3 mt-1 rounded' style='width:100px;'>
              
              <div class='media-body'>
              <h5>Agent ID:" . $row['agent_id'] ."<br><small><i>Name : ".$row['first_name']." ".$row['last_name']."</i></small></h5>
              <p>Relevant Field : " . $row['field'] ."</p>
              <div class='more'>
              NIC-".$row['nic_no']."<br> 
              Address-".$row['address'] ."<br>
              Tel-0".$row['phone_no']." <br>
              Email-".$row['email']." 
              </div>
              </div>
            
              <button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#delet-".$row['agent_id']."'><i class='fas fa-trash-alt'></i></span></button>

              <div class='modal' id='delet-".$row['agent_id']."'>
                 <div class='modal-dialog'>
                  <div class='modal-content'>
      
            <!-- Modal Header -->
             <div class='modal-header'>
              <h5 class='modal-title'>Are you sure want to remove agent ".$row['agent_id']." ?</h5>
              
            </div>
        
             <!-- Modal body -->
            <div class='modal-footer'>

            <form action='deletagent.php' method='POST'>
              <input type='hidden' name='agent_id' value='".$row['agent_id']."' >
              <button type='submit' name='btndelete' value='delete' class='btn btn-danger' >Yes</button>
            </form>
            <button type='button' class='btn btn-success' data-dismiss='modal'>No</button>
            </div>
        </div>
      </div>
      </div>
          </div>
        </div>";


              echo"<div  class='col-sm-3'>
              <div class='card' style='width:auto'>
              <div class='card-body'>
              <p id='pro'>Current Processing</p>
             
              <button type='button' class='btn btn-success' data-toggle='modal' data-target='#modal-".$row['agent_id']."'>Jobs
              </button>
              <!-- The Modal -->
                <div class='modal fade' id='modal-".$row['agent_id']."'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
      
                    <!-- Modal Header -->
                    <div class='modal-header'>
                      <h4 class='modal-title' style='color:blue;'>".$row['agent_id']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
        
                    <!-- Modal body -->
                    <div class='modal-body'>";
                    include("conni.php");
                    mysqli_select_db($conn,"cs2018g2");
                    $sql2 = "SELECT * FROM job where service_agent='".$row['agent_id']."'";

                    $result2=mysqli_query($conn,$sql2);
                    if (mysqli_num_rows($result2) > 0) {
                      echo "<div class='table-responsive'>";
                      echo "<table class='table table-hover'>
                      <thead class='table-primary'>
                      <tr>
                      <th>JOB NO </th>
                      <th style='background-color:RGB(0,120,255);color:white;'>Current situation</th>
                      </tr>
                      <thead>";
        
                    while($data = mysqli_fetch_array($result2))
                    {
                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td>JO-" . $data['job_no'] . "</td>";
                      echo "<td>" . $data['current_situation'] . "</td>";
                      echo "</tr>";
                      echo "</tbody>";
                    }
                    echo "</table>
                          </div>";
                    
                  }
                  echo"</div>
                  </div>                                                                                       
                  </div>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div id='space'></div>";
    
        }
      }
      mysqli_close($conn);
              
      ?>
      </div>

                
    </div>
  </div>

 </div>

  <div class="container-fluid">
    <div class="row footer" >
      <div class="col-sm-7 ">
        <h4 id="footer" >Powered by<small class="text-danger"> SINGER(PLC)</small></h4>
      </div>   
      <div class="col-sm-5">
                     
        <pre id="pre1" ><i class="fab fa-facebook-square"></i>  <i class="fab fa-twitter"></i>  <i class="fab fa-youtube"></i>  <i class="fab fa-skype"></i></pre>
                  
      </div>
    </div>
  </div>








  <script type="text/javascript">

    $(document).ready( function(){
      $(".more").hide();
      $("#button2").hide();
     
    $('#button1').click(function(){
     
        $(".more").slideDown("slow").show();
        $("#button1").hide();
        $("#button2").show();
       
      
      });
    $("#button2").click(function(){
      $(".more").slideUp("slow");
      
      $("#button1").show();
      $("#button2").hide();

    });
     
    });
</script>

</body>
</html> 
