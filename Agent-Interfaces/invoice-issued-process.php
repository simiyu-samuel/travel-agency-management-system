<?php 

$issued = $_POST['issued'];
$invoice_id = $_POST['invoice_id']; 





require("../Processes/DBCONNECT.php"); 

$sql = "UPDATE invoices SET `issued`='$issued' WHERE `invoice_id` = '$invoice_id'"; 

$result = mysqli_query($conn, $sql); 


if($result = mysqli_query($conn, $sql)){ 
 
    header("Location: invoice-issued-popup.php");
             

                } 
else{
    header("Location: error-popup.php");
}
 

?> 

 
 

 