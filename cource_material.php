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
    
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    


    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["module1"]["name"]);
  //module1//  
$module1=$_FILES["module1"]["name"];
$temp = explode(".", $_FILES["module1"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);

   
move_uploaded_file($_FILES["module1"]['tmp_name'],"uploads/" .$newfilename);         
$s="/WEBSITE/uploads/".$newfilename;


$module2=$_FILES["module2"]["name"];
$temp1 = explode(".", $_FILES["module2"]["name"]);
$newfilename1 = round(microtime(true)) . '.' .end($temp1);

   
move_uploaded_file($_FILES["module2"]['tmp_name'],"uploads/" .$newfilename1);         
$m="/WEBSITE/uploads/".$newfilename1;
// //module3//
$module3=$_FILES["module3"]["name"];
$temp = explode(".", $_FILES["module3"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);

   
move_uploaded_file($_FILES["module3"]['tmp_name'],"uploads/" .$newfilename);         
$n="/WEBSITE/uploads/".$newfilename;
//module4//
$module4=$_FILES["module4"]["name"];
$temp = explode(".", $_FILES["module4"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);

   
move_uploaded_file($_FILES["module4"]['tmp_name'],"uploads/" .$newfilename);         
$t="/WEBSITE/uploads/".$newfilename;
//module5//
$module5=$_FILES["module5"]["name"];
$temp = explode(".", $_FILES["module5"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);

   
move_uploaded_file($_FILES["module5"]['tmp_name'],"uploads/" .$newfilename);         
$k="/WEBSITE/uploads/".$newfilename;

//module6//
$module6=$_FILES["module6"]["name"];
$temp = explode(".", $_FILES["module6"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);

   
move_uploaded_file($_FILES["module6"]['tmp_name'],"uploads/" .$newfilename);         
$e="/WEBSITE/uploads/".$newfilename;

//  `module3`, `module4`, `module5`, `module6`
// ,'$n','$t','$k,'$e'
 mysqli_query($conn, "INSERT INTO `cource_material`(`class`, `subject`, `module1`, `module2`,`module3`, `module4`, `module5`, `module6`) VALUES ('$class','$subject','$s','$m','$n','$t','$k','$e')");
}

  ?>

<link rel="stylesheet" href="timetable.css"> 

<div class="container"> 

  <form id="contact" action="" method="post" enctype="multipart/form-data">
 
  <h2>Add Cource Materials</h2>
    <fieldset>
    <select name="class" id="class" name="class" required>
    <option value="sel">Select Class</option>
  <option value="Plusone">Plusone</option>
  <option value="Plustwo">Plustwo</option>

</select> 
</fieldset>
    <fieldset>
    <select name="subject" id="subject" name="subject" required>
    <option value="sel">Select subject</option>
  <option value="chemistry">chemistry</option>
  <option value="physics">physics</option>
  <option value="Maths">Maths</option>
  <option value="Botany">Botany</option>
  <option value="Zoology">Zoology</option>
</select> 
<br>
<br>



  <h2>Module 1</h2>
  <input type="file" id="myfile" name="module1">


  
<h2>Module 2</h2>
  <input type="file" id="myfile" name="module2">
  

  
<h2>Module 3</h2>
  <input type="file" id="myfile" name="module3">
  

  
<h2>Module 4</h2>
  <input type="file" id="myfile" name="module4">
 

  
<h2>Module 5</h2>
  <input type="file" id="myfile" name="module5">

  <h2>Module 6</h2>
  <input type="file" id="myfile" name="module6">
 
 
  <button name="submit" type="submit" id="submit" name="submit" onsubmit="alert('Add successfully')"data-submit="...Sending">Submit</button>

</select> 
</fieldset>
</div>
</html>
