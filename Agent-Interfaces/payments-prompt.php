<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>Payments</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-green-50 text-green-900 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-green-100 p-4 flex justify-between items-center shadow-md">
    <div class="text-2xl font-bold">Dashboard</div>
    <div class="account text-sm">
      <h4>
        <?php 
          include("../Processes/agent-login-process.php");
          echo htmlspecialchars($_SESSION['agent_email'] ?? '');
        ?>
      </h4>
    </div>
  </header>

  <div class="flex flex-1">

    <!-- Sidebar -->
    <nav class="bg-green-800 text-green-200 w-56 p-6 flex flex-col space-y-4 overflow-y-auto">
      <a href="agentHome.php" class="hover:bg-green-700 rounded px-3 py-2">Home</a>
      <a href="clients-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Your Clients</a>
      <a href="make-booking.php" class="hover:bg-green-700 rounded px-3 py-2">Make Booking</a>
      <a href="booking-requests-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Booking Requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Booking history</a>
      <a href="itinerary.php" class="hover:bg-green-700 rounded px-3 py-2">Itinerary</a>
      <a href="invoice.php" class="hover:bg-green-700 rounded px-3 py-2">Invoice</a>
      <a href="view-invoices-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">View Invoices</a>
      <a href="payments-prompt.php" class="bg-green-600 rounded px-3 py-2 font-semibold">Payments</a>
      <a href="agent-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8 flex items-center justify-center">

      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <form action="payments.php" method="POST" class="flex flex-col">
          <h3 class="text-2xl font-semibold text-green-800 mb-6 text-center">Enter Client Code</h3>
          <input 
            type="text" 
            name="client_code" 
            id="input-text" 
            required 
            class="border border-green-300 rounded px-4 py-2 text-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 mb-6"
            placeholder="Client Code"
          />
          <input 
            type="submit" 
            value="Submit" 
            class="bg-green-600 hover:bg-green-700 text-white rounded px-4 py-2 cursor-pointer transition"
          />
        </form>
      </div>

    </main>

  </div>

</body>
</html>
