

<?php
include('connect.php');



if (isset($_POST["save"]))
{
   
 
    $m=$_POST['name'];
    $s=$_POST['lastname'];
    $d=$_POST['batch'];
    $g=$_POST['email'];
    $n=$_POST['feedback'];
   
   
    $sql="INSERT INTO `feedback`( `name`, `lastname`, `batch`, `email`, `feedback`)   VALUES ('$m','$s','$d','$g','$n')";
    $data = mysqli_query($conn, $sql);
 
    }
  ?>