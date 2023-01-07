<?php 
include 'connect.php';
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
           
      elseif($_SESSION['type']=='tec')
      
      {
        $status="SELECT * FROM `regteacher` WHERE 'status'=0";
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
      elseif($_SESSION['type']=='teacher')
      
      {
        $status="SELECT * FROM `regteacher` WHERE 'status'=0";
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
                        </p>
                        <p>
                        <input type="submit"  value="login" name="login" class="btn">   
                        </p>
                        <p>
                            <a href="forget.php">Forget password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
        </body>
        </html>