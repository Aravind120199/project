<?php
include('connect.php');
$id=$_POST['id'];
$sql ="SELECT status FROM regteacher WHERE id='$id'";
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

$update="UPDATE regteacher  SET status='$status' WHERE id='$id'";
$update_run =mysqli_query($conn,$update);
if($update_run)
{
    echo $status;
}

?>