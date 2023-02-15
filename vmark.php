<?php
include('session.php');
include('connect.php');
if(!isset($_SESSION["email"])) 
{
    header("Location:login.php");
}
$var = $_SESSION['email'];
$email=$_SESSION['email'];
$query = "SELECT * FROM reguser Where `Email_id`= '$email'";
$result= mysqli_query($conn, $query);
while ($rowz = $result->fetch_assoc()) {
 $uid = $rowz['ID'];
}
?>
<?php
if (isset($_POST["submit"]))
{
	
  
    $mark=$_POST['mark'];
    $subject=$_POST['subject'];
    $mt=$_POST['mt'];
    $stid=$_POST['stid'];
    $sel="SELECT * from mark where stid='".$stid."' AND mtype='".$mt."'";

    $res=$conn->query($sel);

if($res->num_rows > 0)
{
    echo "<script>alert('mark Already added')</script>";
}
else{
 $res= mysqli_query($conn, "INSERT INTO `mark`( `sid`, `stid`, `mark`,`mtype`) VALUES ('$subject','$stid','$mark','$mt')");
 if($res)
 {

    echo "<script>alert('mark added')</script>";
 }
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
     
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Gender','Number'],
 <?php 
      $query = "SELECT mark.mark, subject.subject FROM mark INNER JOIN subject WHERE mark.sid=subject.id AND stid=$uid";


       $exec = mysqli_query($conn,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['subject']."',".$row['mark']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Mark',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
  
    </script>

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
          <a href="view_teacher_details.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Teacher</span>
          </a>
        </li>
      
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">cource material</span>
          </a>
        </li>
        <li>
          <a href="vmark.php">
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
          <a href="view_student_timetable.php">
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
          <a href="payfees.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Fees</span>
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

    <div class="home-content">
      
            <div class="indicator">
              
            </div>
          </div>
         
        </div>
      </div>


        <body>  
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
    width: 90%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
fieldset {
  border-color: rgb(0 0 0 / 0%);
}

td, th {
  border:  solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>

<div class="container-xl">
Exam Result 
    <center>

 <br/><br/>
 <br/>


 <table border="1" sytle="width:100%">

<tr>
    <th>Subject</th>
    <th>Mark</th>
    <th>Mark of</th>
</tr>
<?php
  $viewquery="select * from mark inner join subject on subject.id=mark.sid where stid=(select id from reguser where Email_id='$var')";//select query for viewing users.  
  $run=mysqli_query($conn,$viewquery);//here run the sql query.  

  while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
  { 
    ?><tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['mark'];?></td>
<td><?php echo $row['mtype'];?></td>

  </tr>

    <?php } ?>
</table>
</center>

</div>  
<div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>   
</body>
</html>


























