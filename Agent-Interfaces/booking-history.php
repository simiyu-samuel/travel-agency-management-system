<?php
session_start();
include("../Processes/agent-login-process.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>Booking History | Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen font-sans flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center shadow-md">
    <div class="text-xl font-bold">Dashboard</div>
    <div class="text-sm flex items-center space-x-2">
      <span>Logged in as:</span>
      <h4 class="font-semibold"><?php echo htmlspecialchars($_SESSION['agent_email'] ?? ''); ?></h4>
    </div>
  </header>

  <div class="flex flex-1 min-h-0">

    <!-- Sidebar Navigation -->
    <nav class="w-64 bg-green-600 text-white p-5 space-y-3 overflow-y-auto">
      <a href="agentHome.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Your Clients</a>
      <a href="make-booking.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 bg-green-800 rounded font-semibold">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded transition">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-auto min-h-0">
      <h2 class="text-2xl font-bold text-green-700 mb-8">Booking History</h2>

      <div class="overflow-x-auto bg-white rounded shadow p-4">
        <table class="min-w-full table-auto border-collapse border border-green-300">
          <thead>
            <tr class="bg-green-200 text-green-900">
              <th class="border border-green-300 px-4 py-2 text-left">Booking ID</th>
              <th class="border border-green-300 px-4 py-2 text-left">Client Code</th>
              <th class="border border-green-300 px-4 py-2 text-left">Origin</th>
              <th class="border border-green-300 px-4 py-2 text-left">Destination</th>
              <th class="border border-green-300 px-4 py-2 text-left">Departure Date</th>
              <th class="border border-green-300 px-4 py-2 text-left">Return Date</th>
              <th class="border border-green-300 px-4 py-2 text-left">Flight Airline</th>
              <th class="border border-green-300 px-4 py-2 text-left">Accommodation</th>
              <th class="border border-green-300 px-4 py-2 text-left">Transportation</th>
              <th class="border border-green-300 px-4 py-2 text-left">Total Cost</th>
              <th class="border border-green-300 px-4 py-2 text-left">Agent Code</th>
              <th class="border border-green-300 px-4 py-2 text-left">Generated At</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require('../Processes/DBCONNECT.php');

              // Sanitize and check agent_code from POST
              $agent_code = $_POST['agent_code'] ?? '';
              $agent_code = mysqli_real_escape_string($conn, $agent_code);

              $sql = "SELECT booking_id, client_code, origin, destination, departure_date, return_date, flight_airline, accomodation, transportation, total_cost, agent_code, `generated at` FROM bookings WHERE agent_code='$agent_code' ORDER BY `generated at` DESC";
              $result = mysqli_query($conn, $sql);

              if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr class="hover:bg-green-100">';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['booking_id']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['client_code']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['origin']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['destination']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['departure_date']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['return_date']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['flight_airline']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['accomodation']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['transportation']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['total_cost']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['agent_code']) . '</td>';
                  echo '<td class="border border-green-300 px-4 py-2">' . htmlspecialchars($row['generated at']) . '</td>';
                  echo '</tr>';
                }
              } else {
                echo '<tr><td colspan="12" class="text-center p-4 text-gray-600">No booking history found for this agent code.</td></tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>

  </div>

</body>
</html>
