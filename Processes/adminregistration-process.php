<?php 
require("DBCONNECT.php");

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];


$sql= "INSERT INTO `admins`(`admin_name`, `admin_email`, `admin_password`) 
VALUES ('$admin_name', '$admin_email', '$admin_password')";


if (mysqli_query($conn,$sql)) {
 echo "Agent added Successful.";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>
