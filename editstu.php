<?php

// Create connection

require_once('connect.php');

if(isset($_POST["save"]))
{
   
    $name = $_POST['Name'];
    $lastname = $_POST['Lastname'];
    $date = $_POST['Date'];
    $addrss = $_POST['Address'];
    $fname= $_POST['Fname'];
    $occ = $_POST['Occupation'];
    $num = $_POST['number'];
    $pemail = $_POST['pemail_id'];

    $gender = $_POST['Gender'];
    $Email = $_POST['Email_id'];
    $Password = $_POST['Password'];
  

  $sql ="UPDATE INTO `regteacher`( `Name`, `Lastname`, `Date`, `Address`, `Fname`, `Occupation`, `number`, `pemail_id`, `Gender`, `Email_id`, `Password`) VALUES ('$name','$lastname','$date','$addrss','$fname','$batch','$occ','$num','$pemail','$gender','$Email','$Password')";

 
    
    $result =mysqli_query($conn,$sql);
}
    ?>
     
 
   

