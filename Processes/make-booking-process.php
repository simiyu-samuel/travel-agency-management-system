<?php

    require('DBCONNECT.php');

    $client_code = $_POST['client_code'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $depart_date = $_POST['dDate'];
    $return_date = $_POST['rDate'];
    $airline = $_POST['airline'];
    $transport = $_POST['transport'];
    $accomodation = $_POST['accomodation'];
    $agent_code = $_POST['agent_code'];
    $total_cost = $_POST['total_cost'];

    $sql = "INSERT INTO bookings(client_code, origin, destination, departure_date, return_date, flight_airline, accomodation, transportation, total_cost, agent_code)
            VALUES('$client_code', '$origin', '$destination', '$depart_date', '$return_date', '$airline', '$accomodation', '$transport', '$total_cost', '$agent_code')";


    if (mysqli_query($conn,$sql)) {

    header("location: ../Agent-Interfaces/make-booking-popup.php");
   
   }else{echo "Error: Record not added".mysqli_error($conn);}





?>
