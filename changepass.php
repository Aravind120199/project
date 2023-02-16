


<?php
include('session.php');
include('connect.php');
if(!isset($_SESSION["email"])) 
{
    header("Location:login.php");
}
$var = $_SESSION['email'];
if(isset($_POST["submit"]))
{
    $password1= $_POST['password1'];
    $password2 = $_POST['password2'];
    
  $sql ="UPDATE `regteacher` SET `Pass`='$password1' where email_id='$var'";
    $result =mysqli_query($conn,$sql);
    $sql1 ="UPDATE `userlog` SET `Password`='$password1' where Email_id='$var'";
    $result1 =mysqli_query($conn,$sql1);
    if($result)
    {
        echo"<script>alert('Updated');</script>";
    }
}
    ?>





<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="dashbord.css">
  
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
          <a href="update_mark.php">
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
          <a href="changepass.php">
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
   

  <br><br>
<div class="container">
<div class="row">
<div class="col-sm-8">
<center><br><center><h1>Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-2">

<!-- <form method="post" id="passwordForm" action='#'> -->
<form action="#" method="post">
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
 <br>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
 <br>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" name="submit" id="submit" data-loading-text="Changing Password..." value="Change Password">
<!-- <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button> -->
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>



  </section>



</body>
</html>



















