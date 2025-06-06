<?php
session_start();
require("../Processes/DBCONNECT.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hidden_id = intval($_POST['hiddenagent_id']);
    $agent_code = trim($_POST['agent_code']);
    $agent_fname = trim($_POST['agent_fname']);
    $agent_lname = trim($_POST['agent_lname']);
    $agent_phonenumber = trim($_POST['agent_phonenumber']);
    $agent_email = trim($_POST['agent_email']);

    // Basic validation
    if (
        empty($agent_code) || empty($agent_fname) || empty($agent_lname) ||
        empty($agent_phonenumber) || empty($agent_email)
    ) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: view_agent_test.php");
        exit;
    }

    // Optional: Email and phone validation
    if (!filter_var($agent_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: view_agent_test.php");
        exit;
    }

    if (!preg_match('/^\d{10,12}$/', $agent_phonenumber)) {
        $_SESSION['error'] = "Phone number must be 10 to 12 digits.";
        header("Location: view_agent_test.php");
        exit;
    }

    // Update query with prepared statement
    $sql = "UPDATE agents 
            SET agent_code = ?, 
                agent_fname = ?, 
                agent_lname = ?, 
                agent_phonenumber = ?, 
                agent_email = ?
            WHERE agent_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssi",
        $agent_code,
        $agent_fname,
        $agent_lname,
        $agent_phonenumber,
        $agent_email,
        $hidden_id
    );

    if ($stmt->execute()) {
        $_SESSION['success'] = "Agent details updated successfully.";
    } else {
        $_SESSION['error'] = "Failed to update agent. Please try again.";
    }

    $stmt->close();
    $conn->close();
    header("Location: view_agent_test.php");
    exit;
} else {
    $_SESSION['error'] = "Invalid request.";
    header("Location: view_agent_test.php");
    exit;
}
