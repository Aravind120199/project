<?php 
include "connect.php";


$id = $_GET['ID']; 
$status = $_GET['status'];
echo "$id";
echo "$status";

if($status==0){
$q="UPDATE reguser SET `status`= 0 WHERE `ID`='$id'";
$stat=mysqli_query($conn, $q);
if($stat){
header('location:viewstu.php');
}else{
    echo "Error";
}
}else{
    $q="UPDATE reguser SET `status`= 1 WHERE `ID`='$id'";
    $stat=mysqli_query($conn, $q);
    $q="UPDATE userlog SET `staus`= 1 WHERE `ID`='$id'";
    $stat=mysqli_query($conn, $q);
    if($stat){
    header('location:viewstu.php');
    }else{
        echo "Error";
    }
}
?>