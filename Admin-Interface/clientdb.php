<?php

require_once("../Processes/DBCONNECT.php");

$sqli="SELECT * FROM clients WHERE agent_assigned = '0'";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);
$data = mysqli_fetch_assoc($result);

if(isset($_GET["edit"])){
 $id=$_GET["edit"];
 $sqli="SELECT * FROM clients WHERE client_id=$id ";

}
?>
