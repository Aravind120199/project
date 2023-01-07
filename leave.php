
<?php
include('connect.php');


session_start();
if(!isset($_SESSION["email"])) 
{
    header("Location:login.php");
}
$var = $_SESSION['email'];
if (isset($_POST["submit"]))
{
  $name=$_POST['name'];
    $type=$_POST['res'];
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $des=$_POST['reason'];
  
   
    $lid="";        
    $sql = "SELECT * FROM `reguser` WHERE `Email_id`= '$var'";
    $data = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($data))
    {
     $lid = $row['ID'];
    }
     $value='student';
      mysqli_query($conn, "INSERT INTO `leave`(`name`,`type`,`descr`,`fromdate`,`todate`,`user`)
     VALUES ('$name','$type','$des','$fromdate','$todate','$value')");
 
    }
  ?>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Leave Application</title>
  <style>
    h1 {
      text-align: center;
      font-size: 2.5em;
      font-weight: bold;
      padding-top: 1em;
      margin-bottom: -0.5em;
    }

    form {
      padding: 40px;
    }

    input,
    textarea {
      margin: 5px;
      font-size: 1.1em !important;
      outline: none;
    }

    label {
      margin-top: 2em;
      font-size: 1.1em !important;
    }

    label.form-check-label {
      margin-top: 0px;
    }

    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    table{
      width: 90% !important;
      margin: 1.5rem auto !important;
      font-size: 1.1em !important;
    }

    .error{
      color: #FF0000;
    }
  </style>

  <script>
    const validate = () => {

      let desc = document.getElementById('leaveDesc').value;
      let checkbox = document.getElementsByClassName("form-check-input");
      let errDiv = document.getElementById('err');

      let checkedValue = [];
      for (let i = 0; i < checkbox.length; i++) {
        if(checkbox[i].checked === true)
          checkedValue.push(checkbox[i].id);
      }

      let errMsg = [];

      if (desc === "") {
        errMsg.push("Please enter the reason and date of leave");
      }

      if(checkedValue.length < 1){
        errMsg.push("Please select the type of Leave");
      }

      if (errMsg.length > 0) {
        errDiv.style.display = "block";
        let msgs = "";

        for (let i = 0; i < errMsg.length; i++) {
          msgs += errMsg[i] + "<br/>";
        }

        errDiv.innerHTML = msgs;
        scrollTo(0, 0);
        return;
      }
    }
  </script>

</head>

<body>
  <!--Navbar-->
  <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     
      <ul class="nav justify-content-end">
           
          
               
            </li>
            <li class="nav-item">
            <button id="back" onclick="window.location.href='student.php';">back</button>
           <br>
           <br>
           <button id="back" onclick="window.location.href='students_leave_history.php';">MY  Leave History</button>
            </ul>

      
    </div>
  </nav>


  <h1>Leave Application</h1>

  <div class="container">
    <div class="alert alert-danger" id="err" role="alert">
    </div>
  
    <form method="POST" onsubmit="alert(' successfully applied')">
    
    <label><b>Enter your name</b></label>
    <input  type="text" class="form-control" name="name" id="name" placeholder="enter your name"></input>
      <label><b>Select Leave Type :</b></label>
      <!-- error message if type of absence isn't selected -->
<!--     
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Sick" id="Sick">
        <label class="form-check-label" for="Sick">
          Sick
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Casual" id="Casual">
        <label class="form-check-label" for="Casual">
          Casual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Vacation" id="Vacation">
        <label class="form-check-label" for="Vacation">
          Vacation -->
          
          
                        <div class="form-check">
                            <select name="res" class="form-control" id="res" required >
                            <option  class="form-check-input" ></option>
                                <option value="Sick" name="res">Sick</option>
                                <option value=" Casual" name="res">Casual</option>
                                <option value="Climatic Disaster " name="res">Climatic Disaster</option>
                                <option value=" Family Functions" name="res ">Family Functions</option>
                                <option value="Others" name="res">Others</option>
                              </select>
                        </div><br><br>  
        <!-- </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Bereavement" id="Bereavement">
        <label class="form-check-label" for="Bereavement">
          Bereavement
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Time off without pay" id="Time Off Without Pay">
        <label class="form-check-label" for="Time Off Without Pay">
          Time off without pay
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Maternity / Paternity" id="Maternity/Paternity">
        <label class="form-check-label" for="Maternity/Paternity">
          Maternity / Paternity
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Sabbatical" id="Sabbatical">
        <label class="form-check-label" for="Sabbatical">
          Sabbatical
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="absence[]" type="checkbox" value="Other" id="Other">
        <label class="form-check-label" for="Other">
          Others
        </label>
      </div> -->
  
      <div class="mb-3 ">
        <label for="dates"><b>From -</b></label>
        <input type="date" name="fromdate">
  
        <label for="dates"><b>To -</b></label>
        <input type="date" name="todate">
      </div>
  
      <div class="mb-3">
        
        <label for="leaveDesc" class="form-label"><b>Please mention reasons for your leave days :</b></label>
        <!-- error message if reason of the leave is not given -->
         
        <textarea class="form-control" name="reason" id="leaveDesc" rows="4" placeholder="Enter Here..."></textarea>
      </div>
  
  
      <input type="submit" name="submit" value="Submit Leave Request" class="btn btn-success">
    </form>
  
    
  </div>


</body>

</html>

