<!-- in this file we write code for connection with database.
-->

<?php
$dbhost = "localhost";
$dbuser="root";
$dbpass="";
$dbname = "registration";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    echo "Database connection faild...";
}
?>






