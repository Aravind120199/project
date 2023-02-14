<?php
//Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
include('connect.php');
/* include('header.php'); */
   /*  if(isset($_SESSION_EMAIL))
    {
        if($_SESSION['role']==1)
     {
         
         header('location:./user_area/user_page.php');
         exit(0);
     }
if($_SESSION['role']==2)
     {
         
         header('location:./user_area/tenant_page.php');
         exit(0);
     }
if($_SESSION['email']=='admin@gmail.com')
     {
         header('location:./admin_area/index.php'); 
         exit(0);
     }
    }
 */
    

   
    
    
    $msg="";
    if(isset($_POST['submit']))
    {
        $uemail =$_POST['email'];
        $email=filter_var($uemail,FILTER_SANITIZE_EMAIL);
        $code = mysqli_real_escape_string($conn, md5(rand()));
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM userlog WHERE Email_id='{$email}'")) > 0) 
        {
            $query = mysqli_query($conn, "UPDATE userlog SET code='{$code}'  WHERE Email_id='{$email}'");
            if($query){
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'masterstution@gmail.com';                        // SMTP username
                    $mail->Password   = 'pswqwihthmbwynzf';                           // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; PHPMailer::ENCRYPTION_STARTTLS; encouraged
                    $mail->Port       = 465;                                    // TCP port to connect to, use 587 for `PHPMailer::ENCRYPTION_STARTTLS` above
                
                    //Recipients
                    $mail->setFrom('masterstution@gmail.com', 'Admin');
                    $mail->addAddress($email);     // Add a recipient
                
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Password Reset';
                    $mail->Body    = 'To reset your password click <a href="http://localhost/website/forget.php?reset='.$code.'">http://localhost/website/forget.php?reset='.$code.'</a></b>';
            
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";        
                $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Bootstrap CSS link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Forgot Password</h2>
            <form method="post" action="">
            <?php echo $msg; ?>
                        
                <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                <button name="submit" class="btn btn-info" type="submit">Send Reset Link</button>
            
            </form>
            <div class="social-icons">
                <p>Back to! <a href="login.php">Login</a>.</p>
            </div>
        </div>
    </body>
</html>