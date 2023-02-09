<?php
include('session.php');
include('connect.php');
if(!isset($_SESSION["email"])) 
{
    header("Location:login.php");
}
$var = $_SESSION['email'];
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

 $res= mysqli_query($conn, "INSERT INTO `mark`( `sid`, `stid`, `mark`,`mtype`) VALUES ('$subject','$stid','$mark','$mt')");
 if($res)
 {

    echo "<script>alert('mark added')</script>";
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
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
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
<center>
<form id="contact" action="" method="post">
 
 <h2>Add Mark</h2>




 <table>
  <tr>
    <th>Subject</th>
    <th>Mark</th>
    <th>Mark Of</th>
   
    <th>Submit</th>
  </tr>
<!--   
<tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
 </tr>
 --><form id="contact" action="" method="post">
  <tr>
    <td>
      <fieldset>
   <label for="sub">subject<br>
    <select  name="subject"id="subject" required>
    <?php  
$b=$_GET['b'];
$view_users_query="SELECT * from subject WHERE batch='".$b."' ";//select query for viewing subjects.  
$run=mysqli_query($conn,$view_users_query);//here run the sql query.  

while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
{  
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['subject'] ?></option>

<?php } ?>
</select>
    </fieldset>
    </td>
    <td><fieldset>
   <input placeholder="Mark" type="number" min="1" max="100"  name="mark"id="mark" required>
   
   <input  type="hidden"  name="stid"id="stid" value="<?php echo $_GET['id']?>" required>
   </fieldset></td>
    <td><fieldset>  <label for="sub">Mark of<br>
   <select name="mt" id="mt" > 
      <option value = "Onam Exam" >Onam Exam</option>  
      <option value = "X-Mas Exam" >X-Mas Exam</option>
      <option value = "Model Exam" >Model Exam </option>  

</SELECT>
      </fieldset></td>
      <td>
         <fieldset>
     <button name="submit" type="submit" id="submit" name="submit" onsubmit="alert('register successfully')"data-submit="...Sending">Submit</button>
   </fieldset> 
      </td>
 </tr></table><br><br><br>

<style>
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




 <table border="1" sytle="width:100%; margin-bottom:20px;">

<tr>
    <th>Subject</th>
    <th>Mark</th>
  
    <th>Mark of</th>
</tr>
<?php
  $viewquery="select * from mark inner join subject on subject.id=mark.sid where subject.batch='".$_GET['b']."' and stid=".$_GET['id'];//select query for viewing users.  
  $run=mysqli_query($conn,$viewquery);//here run the sql query.  

  while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
  { 
    ?><tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['mark'];?></td>
<td><?php echo $row['mtype'];?></td>
  </tr>
  <td><a href="updatemark.php?id=<?php echo $row['id'];?>&uid=<?php echo $row['mid'];?>" style="color:blue; font-size:14px;">EDIT</a></td>

    <?php } ?>
</table>
</center>
</div>     
</body>
</html>


























