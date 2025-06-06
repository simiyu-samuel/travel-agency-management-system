<?php 
require("DBCONNECT.php");

$client_code = $_POST['client_code'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$traveller_information = $_POST['traveller_information'];
$preferred_flight_class = $_POST['preferred_flight_class'];
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$book_accomodation = $_POST['book_accomodation'];
$accomodation_description = $_POST['accomodation_description'];
$book_transportation = $_POST['book_transportation'];
$transportation_description = $_POST['transportation_description'];
$agent_code = $_POST['agent_code'];

$sql= "INSERT INTO booking_requests (`client_code`, `origin`, `destination`, `traveller_information`, `preferred_flight_class`, `departure_date`, `return_date`, `book_accomodation`, `accomodation_description`, `book_transportation`, `transportation_description`, `agent_code`) VALUES ('$client_code', '$origin', '$destination', '$traveller_information', '$preferred_flight_class', '$departure_date', '$return_date', '$book_accomodation', '$accomodation_description', '$book_transportation', '$transportation_description', '$agent_code')";

if (mysqli_query($conn,$sql)) {
 header("location: ../Client-Interfaces/booking-request-popup.php");
}else{header("location: ../Client-Interfaces/booking-request-failure-popup.php");}

?>
