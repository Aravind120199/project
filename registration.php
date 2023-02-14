<?php

// Create connection

require_once('connect.php');

if(isset($_POST["save"]))
{
   
    $name = $_POST['Name'];
    $lastname = $_POST['Lastname'];
    $date = $_POST['Date'];
    $batch= $_POST['batch'];
    $Emailid = $_POST['Email_id'];
    $Password = $_POST['Password'];

    
   $duplicate=mysqli_query($conn,"SELECT * from `reguser` WHERE `Email_id`='$Emailid'");
   if(mysqli_num_rows($duplicate)>0)
            {
                echo "<script>window.alert('Already Registered');window.location.href='register.php'</script>";
            }
    else
        {
            $sql="INSERT INTO `reguser`( `Name`, `Lastname`,`batch`, `Email_id`, `Password`) VALUES ('$name','$lastname','$batch','$Emailid','$Password')";

                $result =mysqli_query($conn,$sql);
                if($result)
                {
                    mysqli_error($result);
                }
                $sql2=mysqli_query($conn,"SELECT ID from reguser where `Name`='$name' and `Lastname` = '$lastname' and `Email_id`='$Emailid'") ;              
                while ($row = mysqli_fetch_array($sql2)) 
                                {
                                        $value=$row['ID'];
                                        $result2=mysqli_query($conn,"INSERT INTO `userlog`(`Email_id`, `Password`,`fid`,`role`) VALUES ('$Emailid','$Password','$value','student')");
                                        $result3=mysqli_query($conn,"INSERT INTO `fees`( `name`,`Lastname`,`batch`, `email`, `status`) VALUES ('$name','$lastname', '$batch','$Emailid','pending')");
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
}
                
?>