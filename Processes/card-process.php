<?php 
require("DBCONNECT.php");

$client_code = $_POST['client_code'];
$card_owner= $_POST['card_owner'];
$card_number = $_POST['card_number'];
$cvv = $_POST['cvv'];
$expiry_month = $_POST['expiry_month'];
$expiry_year = $_POST['expiry_year'];




$sql= "INSERT INTO card_payments (`client_code`, `card_owner`,`card_number`, `cvv`, `expiry_month`, `expiry_year` ) VALUES ('$client_code', '$card_owner', '$card_number', '$cvv', '$expiry_month', '$expiry_year')";

if (mysqli_query($conn,$sql)) {
 header("location: ../Client-Interfaces/payment-popup.php");
}
else{
  header("location: ../Client-Interfaces/card-failure-popup.php");
}

?>
