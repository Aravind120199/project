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
          <a href="add_subject.php">
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
          <a href="officefee.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Office</span>
          </a>
        </li>
        <li>
          <a href="timetable.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">timetable</span>
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

<body> 
</body>

</html>
 
<head>
   <title> Registration page </title>
   <link rel="stylesheet" href="addtec.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.5/dist/bootstrap-validate.js" ></script>
</head>
<body>
  <form class="form-horizontal" method="POST" action="addteacher.php" onsubmit="alert('register successfully')" id="teacher">

  <div class ="form2"> 

        <h2>
     Add teacher
    </h2>


    <div>


 
      
</div>
  </select>
      <div class="">
    <input type="text" name="Name" placeholder="First name"id= "finame" required  >
    <input type="text" name="Lastname" placeholder="last  name" id = "laname" required>
    
    
    <input type="text" id="txtDate" name="Date"    placeholder="date of birth" readonly="readonly" />
    <br />
<span id="lblError" style = "color:Red"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
    type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
    rel="Stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#txtDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showOn: 'button',
            buttonImageOnly: true,
            buttonImage: 'images/calendar.gif',
            dateFormat: 'dd/mm/yy',
            yearRange: '1900:+0',
            onSelect: function (dateString, txtDate) {
                ValidateDOB(dateString);
            }
        });
    });
    function ValidateDOB(dateString) {
        var lblError = $("#lblError");
        var parts = dateString.split("/");
        var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
        var dtCurrent = new Date();
        lblError.html("Eligibility 18 years ONLY.")
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
            return false;
        }
 
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
            //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
            if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                return false;
            }
            if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                if (dtCurrent.getDate() < dtDOB.getDate()) {
                    return false;
                }
            }
        }
        lblError.html("");
        return true;
    }
</script>
 

</div>
<br>
 <div>
    <input type="text" name="Address" placeholder="Address" id="adrs" required>
    <input type="text" name="quali" placeholder="qualification" id ="qul" required>
    <input type="text" name="email_id" placeholder="Email" id ="email" required>
    

    </div>
    <div>
    <input type="tel" name="phone" placeholder="Phone number" id ="ph" required>
              
    <label for="batch" style="color:black">Batch
    <select name="batch" id="batc" >   
      <option value = "" selected> Select option </option>  
      <option value = "plus_one" > plus one </option>  
      <option value = "plus_two" > plus two </option>  
      </select>  
      </div>
               <br>
               <div>
     <label for="batch" style="color:black">Experience<br>
     <select name="exp" id="exper" >   
      <option value = "" selected> Select option </option>  
      <option value = "1" > 1 </option>  
      <option value = "2" > 2 </option>
      <option value = "3" > 3 </option>
      <option value = "4" > 4 </option>
      <option value = "5" > 6 </option>
      <option value = "7" > 7 </option>

       
    </select>  <br>
    <br>
      <label for="sub" style="color:black">subject<br>
      <select name="sub" id="subj" > 
      <option value = "physics" >select</option>  
      <option value = "physics" >Physics </option>  
      <option value = "chemistry" > Chemistry </option>  
      <option value = "biology" > Biology </option>  
      <option value = "maths" > maths</option>  
</div>
  </select>
   <br>
    </div>
    <div>
    <input type="password" name="pass" placeholder="Password" id ="passw" required>        
    <button type ="submit"  name="save"   class="btn2" >register</button>
</div>
   </form>

   <!-- <script src="./bootstrap-validate.js"></script> -->
    <script>
      
       

   
       bootstrapValidate('#email', 'email:Enter a valid E-Mail!');
       bootstrapValidate('#finame', 'alpha:You can only input alphabetic characters');
       bootstrapValidate('#laname', 'alpha:You can only input alphabetic characters');
       bootstrapValidate('#ph', 'numeric:Please only enter numeric characters!');
       bootstrapValidate('#qul', 'max:10:Please dont enter more than 10 characters!');
       bootstrapValidate('#ph', 'min:10:Enter at least 10 characters!');
       bootstrapValidate('#adrs', 'alpha:You can only input alphabetic characters');
       bootstrapValidate('#pass', 'matches:#pass:incorrect password')
       
    </script>
</body>
</div>
<!-- here write the code for    registratioon.
-->
<?php

// Create connection

require_once('connect.php');

if(isset($_POST["save"]))
{
   
    $name = $_POST['Name'];
    $lastname = $_POST['Lastname'];
    $date = $_POST['Date'];
    $addrss = $_POST['Address'];
    $quli= $_POST['quali'];
    $batch = $_POST['batch'];
    $exp = $_POST['exp'];
    $sub = $_POST['sub'];
    $email = $_POST['email_id'];
    $phone = $_POST['phone'];
    $Password = $_POST['pass'];
  

  $sql ="INSERT INTO `regteacher`( `Name`, `Lastname`, `Date`, `Address`, `quali`, `batch`, `exp`, `sub`, `role`, `email_id`, `phone`, `Pass`) VALUES ('$name','$lastname','$date','$addrss','$quli','$batch','$exp','$sub','tec','$email','$phone','$Password')";
    $result =mysqli_query($conn,$sql);
    //$result =mysqli_query($conn,$sql);
    $sql2=mysqli_query($conn,"SELECT id from regteacher where Name='$name' and Lastname = '$lastname' and email_id='$email'") ;
                        while ($row = mysqli_fetch_array($sql2)) 
                        {
                                $value=$row['id'];
                                $result2=mysqli_query($conn,"INSERT INTO `userlog`(`Email_id`, `Password`,`role`,`fid`) VALUES ('$email','$Password','tec','$value')");
                                
                        }
                    }

?>

                  </body>
                  </html>
