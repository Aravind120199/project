<?php 
include "connect.php";


$id = $_GET['id']; 
$status = $_GET['status'];
echo "$id";
echo "$status";

if($status==0){
$q="UPDATE regteacher SET `status`= 0 WHERE `id`='$id'";
$stat=mysqli_query($conn, $q);
if($stat){
header('location:viewtech.php');
}else{
    echo "Error";
}
}else{
    $q="UPDATE regteacher SET `status`= 1 WHERE `id`='$id'";
    $stat=mysqli_query($conn, $q);
    if($stat){
    header('location:viewtech.php');
    }else{
        echo "Error";
    }
}
?>