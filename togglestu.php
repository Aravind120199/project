<?php
include('connect.php');
$id=$_POST['ID'];
$sql ="SELECT status FROM reguser WHERE ID='$id'";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$status =$data['status'];
if($status == 1)
{
    $status = 0;
}
else
{
    $status = 1;
}

$update="UPDATE reguser  SET status='$status' WHERE ID='$id'";
$update_run =mysqli_query($conn,$update);
if($update_run)
{
    echo $status;
}

?>