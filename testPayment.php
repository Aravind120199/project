<?php
include('connect.php');
session_start();





if(isset($_POST['pay_id']) && isset($_POST['amount']) && isset($_POST['id'])) {
    $pay_id=$_POST['pay_id'];
    $amount=$_POST['amount'];
    $id=$_POST['id'];
    

    $insert_order="UPDATE `subject` SET `status`='1' WHERE `id`='$id'";
    $insert_order_run= mysqli_query($conn, $insert_order);
    
    

    
}

?>
