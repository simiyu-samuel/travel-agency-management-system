<?php

    require('DBCONNECT.php');

    $client_code = $_POST['client_code'];
    $e_ticket = $_FILES['e_ticket'];
    $acc_voucher = $_FILES['accomodation_voucher'];
    $transport_voucher = $_FILES['transport_voucher'];
    $agent_code = $_POST['agent_code'];


    
    $blob1 = addslashes(file_get_contents($e_ticket["tmp_name"]));
    $blob2 = addslashes(file_get_contents($acc_voucher["tmp_name"]));
    $blob3 = addslashes(file_get_contents($transport_voucher["tmp_name"]));
    

    $sql = "INSERT INTO itineraries(client_code, e_ticket, accomodation_voucher, transport_voucher, agent_code)
            VALUES('$client_code', '$blob1', '$blob2', '$blob3', '$agent_code')";


    if (mysqli_query($conn,$sql)) {

    header("location: ../Agent-Interfaces/itinerary-popup.php");
   
   }else{echo "Error: Record not added".mysqli_error($conn);}
