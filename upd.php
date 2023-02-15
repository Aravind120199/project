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
          <a href="teacher.php" class="active">
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
          <a href="addmrk.php">
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
            <span class="links_name">Attendece</span>
          </a>
        </li>
        <li>
          <a href="view_takeAttendance.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> Edit Attendece</span>
          </a>
        </li>
     
        <li>                                        
          <a href="">
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







<?php
include('connect.php');



if (isset($_POST["submit"]))
{
    $id=$_POST['sid'];
    $mar=$_POST['marks'];
    $d=$_POST['mtype'];
    $sql=mysqli_query($conn,"UPDATE mark set `mark`='$mar' where `sid`='$id'");
    header('addmark.php');
}

  ?>

<link rel="stylesheet" href="timetable.css"> 

<div class="container"> 

  <form id="contact" action="" method="post">
 
  <h2>mark Details</h2>
  <?php
  include('connect.php');
  $id=$_GET['id'];
  $uid=$_GET['uid'];
  $sql=mysqli_query($conn,"SELECT * from mark where `sid`='$id' and `mid`='$uid'");
  while($row=mysqli_fetch_array($sql))
  {
    ?>
  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <fieldset>
       <h4><b> Subject</b></h4>
    <input type="text" name="sid" id="" value="<?php echo $row['sid'];?>" readonly>
    
</fieldset>
    <fieldset> <h4><b> Mark</b></h4>
    <input type="text" name="marks" id="" value="<?php echo $row['mark'];?>">
<br> <h4><b> Mark of</b></h4>
  <input type="text" id="" name="mtype" value="<?php echo $row['mtype'];?>" readonly>
 
 <?php 
  }
  ?>
 <br>
  <button name="submit" type="submit" id="submitForm" onclick="a()" name="submit" data-submit="...Sending">Update</button>
<script>
    function a(){
        alert("Update Sucessfully");
    }
    </script>
</select> 
</fieldset>
</div>

</html>
