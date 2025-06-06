<?php

    require('DBCONNECT.php');

    $client_code = $_POST['client-code'];
    $agent_code = $_POST['agent-code'];
    $flight_total = $_POST['flight-total'];
    $flight_total=   $flight_total*120;
    $accomodation_total = $_POST['accomodation-total'];
    $accomodation_total=$accomodation_total*120;
    $transport_total = $_POST['transport-total'];
    $transport_total=$transport_total*120;
    $service_total = $flight_total + $accomodation_total + $transport_total;
    $service_charge = $service_total * 0.1;
    $subtotal = $service_total + $service_charge;
    

    $sql = "INSERT INTO invoices(client_code, agent_code, flight_total, accomodation_total, transportation_total, service_total, service_charge, subtotal)
            VALUES('$client_code','$agent_code', '$flight_total', '$accomodation_total', '$transport_total', '$service_total', '$service_charge', '$subtotal')";


    if (mysqli_query($conn,$sql)) {

    header("location: ../Agent-Interfaces/invoice-popup.php");
   
   }else{echo "Error: Record not added".mysqli_error($conn);}





?>
