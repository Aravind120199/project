<?php
include "connect.php";
$id = $_GET['id']; 
//$status = $_GET['status'];
echo "$id";
//echo "$status";

$q="UPDATE regteacher SET status= '1' WHERE `id`='$id'";
$stat=mysqli_query($conn, $q);
$sql=mysqli_query($conn,"update userlog set staus='1' where fid='$id'");
header('location:viewtech.php');
?>