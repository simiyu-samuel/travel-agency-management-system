<?php 

$issued = $_POST['issued'];
$paymentID = $_POST['payment_id']; 





require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE mpesa_payments SET `issued`='$issued' WHERE `payment_id` = '$paymentID'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 
 
    header("Location: payments-popup.php");
             

                } 
else{
    header("Location: error-popup.php");
}
 

?> 

 
 

 