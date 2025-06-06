<?php
session_start();
include("../Processes/agent-login-process.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>Booking Requests | Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen font-sans flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center shadow-md">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <div class="flex items-center space-x-4 text-sm">
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
      <a href="booking-requests-prompt.php" class="block py-2 px-4 bg-green-800 rounded font-semibold">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded transition">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto flex justify-center items-start min-h-0">
      <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h3 class="text-xl font-semibold text-green-700 mb-6 text-center">Enter Your Agent Code</h3>
        <form action="booking-requests.php" method="POST" class="space-y-6">
          <div>
            <label for="agent_code" class="block text-sm font-medium text-gray-700 mb-1">Agent Code</label>
            <input
              type="text"
              id="agent_code"
              name="agent_code"
              required
              class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"
            />
          </div>
          <button
            type="submit"
            class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition"
          >
            Submit
          </button>
        </form>
      </div>
    </main>

  </div>

</body>
</html>
