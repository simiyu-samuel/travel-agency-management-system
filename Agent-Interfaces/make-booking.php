<?php
session_start();
include("../Processes/agent-login-process.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>Make Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a',
            secondary: '#4ade80',
            light: '#f3f4f6',
            dark: '#1f2937',
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="bg-light text-gray-800 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-primary text-white p-4 flex justify-between items-center shadow-md">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <div>
      <span><?php echo htmlspecialchars($_SESSION['agent_email'] ?? ''); ?></span>
    </div>
  </header>

  <div class="flex flex-1 min-h-0">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-600 text-white p-5 space-y-3 overflow-y-auto">
      <a href="agentHome.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Your Clients</a>
      <a href="make-booking.php" class="block py-2 px-4 bg-green-800 rounded font-semibold">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded transition">Log Out</a>
    </nav>
  
    <!-- Main Content -->
    <main class="flex-1 p-10 space-y-10 overflow-auto min-h-0">

      <!-- Booking Buttons -->
      <div class="flex flex-wrap gap-4">
        <a href="https://www.expedia.com" target="_blank" rel="noopener noreferrer">
          <button class="bg-primary text-white px-4 py-2 rounded flex items-center gap-2 shadow hover:bg-green-800 transition">
            <span>Book Flight</span>
            <i class="material-icons">flight</i>
          </button>
        </a>
        <a href="https://www.booking.com" target="_blank" rel="noopener noreferrer">
          <button class="bg-primary text-white px-4 py-2 rounded flex items-center gap-2 shadow hover:bg-green-800 transition">
            <span>Book Hotel</span>
            <i class="material-icons">hotel</i>
          </button>
        </a>
        <a href="https://www.gettransfer.com/en" target="_blank" rel="noopener noreferrer">
          <button class="bg-primary text-white px-4 py-2 rounded flex items-center gap-2 shadow hover:bg-green-800 transition">
            <span>Transport</span>
            <i class="fa fa-automobile"></i>
          </button>
        </a>
      </div>

      <!-- Booking Form and Client Search -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Make Booking Form -->
        <section class="bg-white shadow-md rounded-lg p-6">
          <h2 class="text-xl font-bold mb-4 text-green-700">Make Booking</h2>
          <form action="../Processes/make-booking-process.php" method="post" class="space-y-4">
            <input type="text" name="client_code" placeholder="Client Code" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="text" name="origin" placeholder="Origin" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="text" name="destination" placeholder="Destination" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>

            <div class="flex gap-4">
              <div class="flex-1">
                <label for="dDate" class="block text-gray-600 mb-1">Depart Date</label>
                <input type="date" id="dDate" name="dDate" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
              </div>
              <div class="flex-1">
                <label for="rDate" class="block text-gray-600 mb-1">Return Date</label>
                <input type="date" id="rDate" name="rDate" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
              </div>
            </div>

            <input type="text" name="airline" placeholder="Flight Airline" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="text" name="transport" placeholder="Transportation" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="text" name="accomodation" placeholder="Accommodation" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="text" name="agent_code" placeholder="Agent Code" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="number" name="total_cost" placeholder="Total Cost" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>

            <input type="submit" name="make-booking" value="Make Booking" class="bg-primary text-white px-4 py-2 rounded hover:bg-green-800 cursor-pointer transition">
          </form>
        </section>

        <!-- Search Client -->
        <section class="bg-white shadow-md rounded-lg p-6">
          <h3 class="text-xl font-semibold mb-4 text-green-700">Search Client Information</h3>
          <form action="view-one-client.php" method="POST" class="space-y-4">
            <input type="text" name="client_code" placeholder="Enter Client Code" class="w-full border border-green-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            <input type="submit" value="Submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-green-800 cursor-pointer transition">
          </form>
        </section>

      </div>

    </main>

  </div>

</body>
</html>
