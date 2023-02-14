<?php 
include 'connect.php';
session_start();
if(isset($_POST['login'])){

  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $_SESSION["y"]=$email;

  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $_SESSION["z"]=$password;

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $sel="SELECT * from userlog where Email_id='".$email."' AND Password='".$password."'";

    $res=$conn->query($sel);

if($res->num_rows > 0)
{
      $row=mysqli_fetch_array($res);
      $_SESSION['type']=$row['role'];

      if($_SESSION['type']=='student')
      {
        session_start();
        $_SESSION['message']="Welcome";
        $_SESSION['email']=$row['Email_id'];
        header("location:student.php");
        
      }
           
      elseif($_SESSION['type']=='teacher' and $row['staus']=='1')
      
      {
        $status="SELECT * FROM `regteacher` WHERE 'status'=1";
        if(($conn->query($status)))  
        {
          session_start();
          $_SESSION['message']="Welcome";
          $_SESSION['email']=$row['Email_id'];
          header("location:subject_teacher.php");
        }
        else{
          echo "alert('Something error')";
        }
        
      }
      elseif($_SESSION['type']=='tec' and $row['staus']=='1')
      
      {
        $status="SELECT * FROM `regteacher` WHERE 'status'=1";
        if(($conn->query($status)))  
        {
          session_start();
          $_SESSION['message']="Welcome";
          $_SESSION['email']=$row['Email_id'];
          header("location:teacher.php");
        }
        else{
          echo "alert('Something error')";
        }
        
      }
     
      elseif($_SESSION['type']=='admin')
      
      {
        session_start();
        $_SESSION['message']="Welcome";
        $_SESSION['email']=$row['Email_id'];
        header("location:admin.php");
        
      }
      elseif($_SESSION['type']=='office')
      {
        session_start();
        $_SESSION['message']="Welcome";
        $_SESSION['email']=$row['Email_id'];
        header("location:office.php");
      }
}
else
                {
                  
                   
                    echo '<script> alert("password incorrect")
                    window.location.href="login.php";
                    </script>' ;
                 }
            } 
          }
        $conn->close();
      
 
?>
<!DOCTYPE html>
<html>

<head>
  <style>
    .error_form
{
top: 12px;
color: rgb(216, 15, 15);
    font-size: 15px;
font-weight:bold;
    font-family: Helvetica;
}
    </style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
 
  $(document).on('click','#submit',function()
  {  $("#captcha_message").hide();
 var response = grecaptcha.getResponse();
 if(response.length == 0)
 {
 $("#captcha_message").html("Please verify you are not a robot");
               $("#captcha_message").show();
 return false;
 }
 else{
 $("#captcha_message").hide();
 return true;
 }
  });
 
 
</script>
        </head>
    <title>loginform</title>

 
  



<div class="wrapper login">
        <div class="container">
        <link rel="stylesheet" href="login.css">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Create your account.<br>It's totally free.</p>
                    <a href="register.php" class="btn">Sign Up</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">

                    <h2>Login</h2>
                    <form id="login" class="form" method="POST" action="login.php">
                        <p>
                            <label>Email id<span>*</span></label>
                            <input type="text" name="email" id="email" placeholder="email Id" autocomplete="off">
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                        </p> <div class="g-recaptcha" data-sitekey="6LewyAMkAAAAACWIhN9wXtI9vfC5IXznKK0JM3gh"></div>
                        <p>
                        <span class="error_form" id="captcha_message"></span>
                        </p>
                        <p>
                        <span class="error_form" id="captcha_message"></span>
                        <input type="submit" id="submit" value="login" name="login" class="btn">   
                        </p>
                        <p>
                            <a href="forgot.php">Forget password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
        </body>
        </html>