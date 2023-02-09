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
            <span class="links_name">Attendece</span>
          </a>
        </li>
        <li>
          <a href="view_takeAttendance.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Edit Attendance</span>
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







<?php
include('connect.php');



if (isset($_POST["submit"]))
{
    $id=$_POST['id'];
    $s=$_POST['status'];
    $d=$_POST['dte'];
    $sql=mysqli_query($conn,"update attendancetable set status='$s',dateTimeTaken='$d' where id='$id'");
    header('location:teacher.php');
}

  ?>

<link rel="stylesheet" href="timetable.css"> 

<div class="container"> 

  <form id="contact" action="" method="post">
 
  <h2>Attendance Details</h2>
  <?php
  include('connect.php');
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"select * from attendancetable where id='$id'");
  while($row=mysqli_fetch_array($sql))
  {
    ?>
  <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <fieldset>
       <h4><b> First Name</b></h4>
    <input type="text" name="fname" id="" value="<?php echo $row['firstname'];?>" readonly>
</fieldset>
    <fieldset> <h4><b> Last Name</b></h4>
    <input type="text" name="lname" id="" value="<?php echo $row['lastname'];?>" readonly>
<br> <h4><b> Batch</b></h4>
  <input type="text" id="" name="batch" value="<?php echo $row['batch'];?>" readonly>
  <h4><b> Status</b></h4>
<input type="text" id="" name="status" value="<?php echo $row['status'];?>">
<h4><b>Date</b></h4>
  <input type="date" id="" name="dte" value="<?php echo $row['dateTimeTaken'];?>" min="<?php echo date('Y-m-d');?>">
 <?php 
  }
  ?>
 <br>
  <button name="submit" type="submit" id="submit" name="submit" onsubmit="alert('Add successfully')"data-submit="...Sending">EDIT</button>

</select> 
</fieldset>
</div>
</html>
