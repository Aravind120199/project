<?php

// Create connection

require_once('connect.php');

if(isset($_POST["save"]))
{
   
    $name = $_POST['Name'];
    $lastname = $_POST['Lastname'];
    $date = $_POST['Date'];
    $fname = $_POST['Fname'];
    $Occupation= $_POST['Occupation'];
    $Number = $_POST['number'];
    $pemailid = $_POST['pemail_id'];
    $Address = $_POST['Address'];
    $batch= $_POST['batch'];
    $gender = $_POST['Gender'];
    $Emailid = $_POST['Email_id'];
    $Password = $_POST['Password'];
   
     

   $sql="INSERT INTO `reguser`( `Name`, `Lastname`, `Date`, `Fname`, `Occupation`, `number`, `pemail_id`, `Address`, `batch`, `Gender`, `Email_id`, `Password`) VALUES ('$name','$lastname','$date','$fname','$Occupation','$Number','$pemailid','$Address','$batch','$gender','$Emailid','$Password')";

$result =mysqli_query($conn,$sql);
$sql2=mysqli_query($conn,"SELECT ID from reguser where Name='$name' and Lastname = '$lastname' and Email_id='$Emailid'") ;
                        while ($row = mysqli_fetch_array($sql2)) 
                        {
                                $value=$row['ID'];
                                $result2=mysqli_query($conn,"INSERT INTO `userlog`(`Email_id`, `Password`,`fid`,`role`) VALUES ('$Emailid','$Password','$value','student')");
                                $result3=mysqli_query($conn,"INSERT INTO `fees`(`id`, `name`,`Lastname`,`batch`, `email`, `status`) VALUES ('DEFAULT','$name','$lastname', '$batch','$Emailid','pending')");
                                if($result2==true && $result3==true)
                                {   
                                    header("Location:login.php"); 
                                } 
                                else
                                {
                                    echo "error:".$sql;   
                                }   
                        }
                    }
?>