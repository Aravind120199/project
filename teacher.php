<?php
include('session.php');
include('connect.php');
if(!isset($_SESSION["email"])) 
{
    header("Location:login.php");
}
$var = $_SESSION['email'];
?>


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
      <span class="logo_name">Teacher</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="viewstudent.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="stuleave.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">leave status</span>
          </a>
        </li>
        <li>
          <a href="subjects.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Subject</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">  mark</span>
          </a>
        </li>
        <li>
          <a href="teacher_leave.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> leave</span>
          </a>
        </li>
        <li>
          <a href="tec_timetable.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Time table</span>
          </a>
        </li>
        <li>
          <a href="teacher/takeAttendance.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Attendance</span>
          </a>
        </li>
     
        <li>
          <a href="cource_material.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">cource Material</span>
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
                                    $job_query=mysqli_query($conn,"select * from regteacher");
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
            <div class="card mb-4 mb-xl-0" >
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2"style="width:200px;" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                  <!--  <button class="btn btn-primary" type="button">Upload new image</button> -->
                </div>
            </div>
        </div>



        <?php
   
   $sql = "SELECT * FROM `regteacher` WHERE `email_id`= '$var'";
   $data = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($data);
   $name = $row['Name'];
   $l_name = $row['Lastname'];
   $q = $row['quali'];
   $p = $row['phone'];
  
?>
  

        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">First name</label>
                            <input class="form-control" id="fname" type="text" readonly="readonly" value="<?php  echo $name;?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputusername">Lastname</label>
                                <input class="form-control" id="fname" type="text" readonly="readonly"  value=<?php  echo $l_name;?>>
                            </div>
                          
                        
                          
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputphone">phone number</label>
                            <input class="form-control" id="inputphone" type="num"  readonly="readonly"  value=<?php  echo $p;?>>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail">email</label>
                                <input class="form-control" id="email" type="email"  readonly="readonly"  value=<?php  echo $var;?>>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Qualification</label>
                                <input class="form-control" id="inputgnder" type="text" name="gender"  readonly="readonly"  value=<?php  echo $q;?>>
                            </div>
                            
                           
                          
					

                    </form>
                    </div>
                  



               
            </div>
        </div>
        <a href="edit_bio.php?em=<?php echo $var;?>"><button>Update</button></a>
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

