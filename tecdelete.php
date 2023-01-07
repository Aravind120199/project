<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string
 
$del = mysqli_query($conn,"UPDATE `tecleave` SET `status`=1 WHERE id=$id;"); // update query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:tecleavestatus.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
    
}
?>  