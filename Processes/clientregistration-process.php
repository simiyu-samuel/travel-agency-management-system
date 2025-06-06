<?php 
require("DBCONNECT.php");

$fname = $_POST['client_fname'];
$lname = $_POST['client_lname'];
$age = $_POST['age'];
$gender = $_POST['sex'];
$national_id = $_POST['national_id'];
$phonenumber = $_POST['phone_number'];
$email = $_POST['client_email'];
$password = $_POST['password'];

$sql= "INSERT INTO `clients`(`client_fname`, `client_lname`, `age`, `sex`, `national_id`,  `phone_number`, `client_email`, `password`) VALUES ('$fname', '$lname', '$age', '$gender', '$national_id', '$phonenumber', '$email', '$password')";


if (mysqli_query($conn,$sql)) {

 header("location: ../Client-Interfaces/registration-popup.php");

}else{echo "Error: Record not added".mysqli_error($conn);}

?>
