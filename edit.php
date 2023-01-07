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
  

  $sql ="UPDATE INTO `regteacher`( `Name`, `Lastname`, `Date`, `Address`, `quali`, `batch`, `exp`, `sub`, `role`, `email_id`, `phone`, `Pass`) VALUES ('$name','$lastname','$date','$addrss','$quli','$batch','$exp','$sub','tec','$email','$phone','$Password')";

 
    
    $result =mysqli_query($conn,$sql);
}
    ?>
     
 
   

