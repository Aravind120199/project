<?php
include 'connect.php';
if(isset($_POST["submit"]))
{
    $em= $_GET['em'];
    $name = $_POST['name'];
    $lastname = $_POST['last'];
    $date = $_POST['date'];
    $addrss = $_POST['address'];
    $quli= $_POST['quali'];
    $batch = $_POST['batch'];
    $exp = $_POST['exp'];
    $sub = $_POST['sub'];

    // $email = $_POST['email_id'];
    $phone = $_POST["phone"];
   

  $sql ="UPDATE `regteacher` SET `Name`='$name',`Lastname`='$lastname',`Date`='$date',`Address`='$addrss',`quali`='$quli',`batch`='$batch',`exp`='$exp',`sub`='$sub',`phone`='$phone' where email_id='$em'";
    $result =mysqli_query($conn,$sql);
}
    ?>

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
          <a href="subject_teacher.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="subject_teacher_view_student.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> update mark</span>
          </a>
        </li>
        <li>
          <a href="subject_tec_leave.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> leave</span>
          </a>
        </li>
        <li>
          <a href="subject_tec_timetable.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> timetable</span>
          </a>
        </li>
       
        <li>
          <a href="upload/index.php">
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
                                    $job_query=mysqli_query($conn,"SELECT * from regteacher");
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
                    <form action="#" method="post" onsubmit="alert('Update successfully')">

                            <?php
                                $id = $_GET['em'];
                                // $result = mysqli_query($con,"SELECT * from adminregisterfaculty where id = '$id'");
                                $sql="SELECT * FROM `regteacher` WHERE `email_id`= '$id'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();  
                                $conn->close();
                            ?>

                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">First name</label>
                            <input class="form-control" id="fname" type="text" name="name" value="<?php  echo $row['Name'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputusername">Lastname</label>
                                <input class="form-control" id="fname" type="text" name="last"  value="<?php echo $row['Lastname'];?>">
                            </div>
                          
                        
                          
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputphone">Date of birth</label>
                            <input class="form-control" id="inputphone" name="date" type="date" value="<?php echo $row['Date'];?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail"><Address></Address></label>
                                <input class="form-control" id="email" name="address" type="text"  value="<?php echo $row['Address'];?>">
                            </div>
                            
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Qualification</label>
                                <input class="form-control" id="inputgnder" name="quali" type="text" name="gender" value="<?php echo $row['quali'];?>">
                            </div>
                            
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Batch</label>
                                <input class="form-control" id="add" type="text" name="batch" value="<?php echo $row['batch'];?>">
                            </div>
                             
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Experience</label>
                                <input class="form-control" id="ba" type="text" name="exp"  value="<?php echo $row['exp'];?>">
                            </div>
                            
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">Subject</label>
                                <input class="form-control" id="expr" type="text" name="sub" value="<?php echo $row['sub'];?>">
                            </div>
                             
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">phone</label>
                                <input class="form-control"  type="text" name="phone" value="<?php echo $row['phone'];?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputgender">email id</label>
                                <input class="form-control" id="sub" type="text" name="email_id"  value="<?php echo $row['email_id'];?> " readonly>
                            </div>


                           
                          
					
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                    </div>
                    
               
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

