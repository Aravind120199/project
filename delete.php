<?php
include 'connect.php';
$id = $_GET['ID']; // get id through query string
 
$del = mysqli_query($conn,"UPDATE `reguser` SET `status`=0 WHERE ID=$id;"); // update query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
    
}
?>  