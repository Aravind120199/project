<?php
include('session.php');
include('connect.php');
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
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="viewtech.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Teacher</span>
          </a>
        </li>
        <li>
          <a href="addteacher.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add New Teacher</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">subject</span>
          </a>
        </li>
        <li>
          <a href="viewstu.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="teacher_leave_status.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">teacher leave</span>
          </a>
        </li>
       
        <li>
          <a href="timetable.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">timetable</span>
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
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>plus one <b>Stundets</b></h2>
                    </div>
                    <div class="col-sm-7">
                       
                       						
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
            <thead>  
  
  <tr>  


          <th>First name</th>
          <th>lastname</th>
          <th>Batch</th>
    
          <th>Student email id</th>
          <th>Action</th>

  </tr>  
  </thead> 
  <?php  
        include("connect.php");  
        $view_users_query="select * from reguser where batch='plus 1' ";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_name=$row[1];  
            $user_lname=$row[2];
            $user_batch=$row[3];  
            $user_Email_id=$row[4];   

  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
             
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_lname;  ?></td>  
            <td><?php echo $user_batch;  ?></td> 
     
            <td><?php echo $user_Email_id;  ?></td> 




            <td> <?php if($row['status']==1){
echo '<p><a class="btna" href="status1.php?ID='.$row['ID'].'&status=0">DEACTIVATE</a></p>';
}if($row['status']==0){
echo '<p><a class="bt" href="status1.php?ID='.$row['ID'].'&status=1">ACTIVATE</a></p>';
} ?></td>
 </tr>  
  <?php } ?>  
   
     
  </container>
                   
                   </div> 
                                   </div>
                               </div>
                               <table class="table table-striped table-hover">
                               <thead>  
                               <div class="col-sm-5">
                                           <h2>plus two <b>Stundets</b></h2>
                                       </div> 
                                           
  <tr>  


          <th>First name</th>
          <th>lastname</th>
          <th>Batch</th>
        
          <th>Student email id</th>
          <th>Action</th>

  </tr>  
  </thead> 
  <?php  
        include("connect.php");  
        $view_users_query="select * from reguser where batch='plus 2' ";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_name=$row[1];  
            $user_lname=$row[2];
            $user_batch=$row[3];  
         
            $user_Email_id=$row[4];   

  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
             
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_lname;  ?></td>  
            <td><?php echo $user_batch;  ?></td> 
          
            <td><?php echo $user_Email_id;  ?></td> 




<td> <?php if($row['status']==1){
echo '<p><a class="btn" href="status1.php?ID='.$row['ID'].'&status=0">DEACTIVATE</a></p>';
}if($row['status']==0){
echo '<p><a class="btn" href="status1.php?ID='.$row['ID'].'&status=1">ACTIVATE</a></p>';
} ?>
</td>
 </tr>  
  <?php } ?>  
   
     
    </div>
</div>     
</body>
</html>




















