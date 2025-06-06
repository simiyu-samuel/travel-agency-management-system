<?php
session_start();
include("../Processes/agent-login-process.php");
require('../Processes/DBCONNECT.php');

// Check for client_code in POST
$client_code = isset($_POST['client_code']) ? trim($_POST['client_code']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Client Info | Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen font-sans">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <div class="flex items-center space-x-4">
      <span class="text-sm">Logged in as:</span>
      <h4 class="font-semibold"><?php echo $_SESSION['agent_email']; ?></h4>
    </div>
  </header>

  <div class="flex">

    <!-- Sidebar Navigation -->
    <nav class="w-64 bg-green-600 text-white min-h-screen p-5 space-y-3">
      <a href="agentHome.php" class="block py-2 px-4 hover:bg-green-500 rounded">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Your Clients</a>
      <a href="make-booking.php?client" class="block py-2 px-4 hover:bg-green-500 rounded">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h2 class="text-2xl font-bold mb-4 text-green-800">Client Information</h2>

      <?php if ($client_code): ?>
        <?php
        $stmt = $conn->prepare("SELECT client_code, client_fname, client_lname, national_id, age, sex, phone_number, client_email FROM clients WHERE client_code = ?");
        $stmt->bind_param("s", $client_code);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0): ?>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-green-300 rounded">
              <thead class="bg-green-600 text-white">
                <tr>
                  <th class="py-2 px-4 border">Client Code</th>
                  <th class="py-2 px-4 border">First Name</th>
                  <th class="py-2 px-4 border">Last Name</th>
                  <th class="py-2 px-4 border">ID Number</th>
                  <th class="py-2 px-4 border">Age</th>
                  <th class="py-2 px-4 border">Sex</th>
                  <th class="py-2 px-4 border">Phone Number</th>
                  <th class="py-2 px-4 border">Email</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                  <tr class="text-center hover:bg-green-100">
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['client_code']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['client_fname']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['client_lname']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['national_id']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['age']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['sex']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['phone_number']); ?></td>
                    <td class="py-2 px-4 border"><?php echo htmlspecialchars($row['client_email']); ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-red-600 mt-4">No client found with code: <strong><?php echo htmlspecialchars($client_code); ?></strong></p>
        <?php endif; ?>
      <?php else: ?>
        <p class="text-yellow-600">Client code was not provided. Please go back and try again.</p>
      <?php endif; ?>

    </main>
  </div>

</body>
</html>
