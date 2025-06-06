<?php
session_start();

// Database connection (adjust with your actual credentials)
$host = "localhost";
$dbname = "travel_agency";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Set error mode to exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize inputs
    $agent_code = strtoupper(trim($_POST['agent_code'] ?? ''));
    $agent_fname = trim($_POST['agent_fname'] ?? '');
    $agent_lname = trim($_POST['agent_lname'] ?? '');
    $agent_phonenumber = trim($_POST['agent_phonenumber'] ?? '');
    $agent_email = filter_var(trim($_POST['agent_email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $agent_password = $_POST['agent_password'] ?? '';

    // Validate required fields
    if (!$agent_code || strlen($agent_code) !== 6) {
        $_SESSION['error'] = "Agent Code must be exactly 6 characters.";
        header("Location: add_agent_test.php");
        exit;
    }
    if (!$agent_fname || !$agent_lname) {
        $_SESSION['error'] = "First and Last name are required.";
        header("Location: add_agent_test.php");
        exit;
    }
    if (!$agent_phonenumber || !preg_match('/^\d{10,12}$/', $agent_phonenumber)) {
        $_SESSION['error'] = "Phone number must be 10 to 12 digits.";
        header("Location: add_agent_test.php");
        exit;
    }
    if (!$agent_email) {
        $_SESSION['error'] = "A valid email is required.";
        header("Location: add_agent_test.php");
        exit;
    }
    if (!$agent_password || strlen($agent_password) < 6) {
        $_SESSION['error'] = "Password must be at least 6 characters.";
        header("Location: add_agent_test.php");
        exit;
    }

    // Check if agent_code or email already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM agents WHERE agent_code = :code OR agent_email = :email");
    $stmt->execute(['code' => $agent_code, 'email' => $agent_email]);
    if ($stmt->fetchColumn() > 0) {
        $_SESSION['error'] = "Agent code or email already exists.";
        header("Location: add_agent_test.php");
        exit;
    }

    // Hash password
    $password_hash = password_hash($agent_password, PASSWORD_DEFAULT);

    // Insert into database
    $insertSql = "INSERT INTO agents (agent_code, agent_fname, agent_lname, agent_phonenumber, agent_email, agent_password) 
                  VALUES (:agent_code, :agent_fname, :agent_lname, :agent_phonenumber, :agent_email, :agent_password)";

    $stmt = $pdo->prepare($insertSql);
    $result = $stmt->execute([
        ':agent_code' => $agent_code,
        ':agent_fname' => $agent_fname,
        ':agent_lname' => $agent_lname,
        ':agent_phonenumber' => $agent_phonenumber,
        ':agent_email' => $agent_email,
        ':agent_password' => $password_hash
    ]);

    if ($result) {
        $_SESSION['success'] = "Agent successfully added.";
        header("Location: view_agent_test.php");
        exit;
    } else {
        $_SESSION['error'] = "Failed to add agent. Please try again.";
        header("Location: add_agent_test.php");
        exit;
    }
} else {
    // If accessed directly without POST
    header("Location: add_agent_test.php");
    exit;
}
?>
