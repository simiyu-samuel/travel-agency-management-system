<?php 
require("DBCONNECT.php");

$client_code = $_POST['client_code'];
$confirmation_code = $_POST['confirmation_code'];



$sql= "INSERT INTO mpesa_payments (`client_code`, `confirmation_code` ) VALUES ('$client_code', '$confirmation_code')";

if (mysqli_query($conn,$sql)) {
 header("location: ../Client-Interfaces/payment-popup.php");
}else{header("location: ../Client-Interfaces/mpesa-failure-popup.php");}

?>
