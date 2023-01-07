<?php

include('connect.php');

?>
<form class="form-horizontal" method="POST" action="editstu.php" onsubmit="alert('Update successfully')" id="FORM_ID">

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="dashbord.css">
 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-m-plus-plus'></i>
      <span class="logo_name">student</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-box' ></i>
            <span class="links_name">Teacher</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">subject</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">cource material</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">mark</span>
          </a>
        </li>
        <li>
          <a href="leave.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">leave</span>
          </a>
        </li>
        <li>
          <a href=".php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Time table</span>
          </a>
        </li>
        <li>
          <a href="feedback.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">feedback</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <li class="">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
     
    </nav>

              
             
            </div>
          </div>
          <i class=''></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Teachers</div>
            <div class="number"><?php 
                                    $job_query=mysqli_query($conn,"select * from reguser");
                                    $count=mysqli_num_rows($job_query);
                                    echo $count;
                                    ?></div>
            <div class="indicator">
            
            </div>
          </div>
          <i class='' ></i>
        </div>
        <div class="box">

          <div class="right-side">
            <div class="box-topic">Office</div>
            <div class="number">1</div>
            <div class="indicator">
              
            </div>
          </div>
          <i class='' ></i>
        </div>
   
           
            <div class="indicator">
              
            </div>
        
      </div>

      <div class="sales-boxes">
  <div class="recent-sales box">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js">

  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->

  
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
           
            </div>
        </div>


  

        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Update Details</div>
                <div class="card-body">
                    <form>

                            <?php
                             
                                // $result = mysqli_query($con,"SELECT * from adminregisterfaculty where id = '$id'");
                                $sql="SELECT * FROM `reguser` WHERE `Email_id`= '$id'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();  
                                $conn->close();
                            ?>

                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">First name</label>
                            <input class="form-control" id="fname" type="text"  value="<?php  echo $row['Name'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputusername">Lastname</label>
                                <input class="form-control" id="fname" type="text"   value="<?php echo $row['Lastname'];?>">
                            </div>
                          
                        
                          
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputphone">Date of birth</label>
                            <input class="form-control" id="inputphone" type="date" value="<?php echo $row['Date'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail"><Address></Address></label>
                                <input class="form-control" id="email" type="email"  value="<?php echo $row['Address'];?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputfname"><Address></Address></label>
                                <input class="form-control" id="fname" type="text"  value="<?php echo $row['Fname'];?>"> 
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputocc"><Address></Address></label>
                                <input class="form-control" id="Occupation" type="text"  value="<?php echo $row['Occupation'];?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputnum"><Address></Address></label>
                                <input class="form-control" id="number" type="num"  value="<?php echo $row['number'];?>">
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Parent email id</label>
                                <input class="form-control" id="inputemail" type="email" name="pemail_id" value="<?php echo $row['pemail_id'];?>">
                            </div>
                            
                             
                          
                             
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Gender</label>
                                <input class="form-control" id="Gender" type="text" name="Gender"  value="<?php echo $row['Gender'];?>">
                            </div>
                            
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail">Email_id</label>
                                <input class="form-control" id="Email_id" type="text" name="Email_id" value="<?php echo $row['Email_id'];?>">
                            </div>
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputpass">Password</label>
                                <input class="form-control" id="Password" type="text" name="Password" value="<?php echo $row['Password'];?>">
                            </div>
                            


                           
                          
					

                    </form>
                    </div>
                    <button type="button" id="submit" name="submit" class="btn btn-primary">Submit</button>
               
            </div>
        </div>
    </div>
</div
 </div>
 </div>
 </div>
</div>

           
          </div>
        </div>
       
      </div>
    </div>
  </section>



</body>
</html>

