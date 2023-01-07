<?php
include 'connect.php';
$id = $_GET['id']; // get id through query string
 
$del = mysqli_query($conn,"UPDATE `regteacher` SET `status`=0 WHERE id=$id;"); // update query
$del2 =  mysqli_query($conn,"DELETE from `userlog` WHERE id=$id and role='tec'"); // update query

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