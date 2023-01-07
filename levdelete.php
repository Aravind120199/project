<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string
 
$del = mysqli_query($conn,"UPDATE `leave` SET `status`='Rejected' WHERE id='$id';"); // update query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:stuleave.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
    
}
?>  