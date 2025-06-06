<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Itinerary</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
      <a href="itinerary.php" class="bg-green-600 rounded px-3 py-2 font-semibold">Itinerary</a>
      <a href="invoice.php" class="hover:bg-green-700 rounded px-3 py-2">Invoice</a>
      <a href="view-invoices-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">View Invoices</a>
      <a href="payments-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Payments</a>
      <a href="agent-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8 flex justify-center items-start">

      <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <h3 class="text-2xl font-bold mb-6 border-b border-green-300 pb-2">ITINERARIES</h3>

        <form action="../Processes/itinerary-process.php" method="post" enctype="multipart/form-data" class="space-y-6">

          <div>
            <label for="client_code" class="block font-semibold mb-1">Client Code</label>
            <input
              type="text"
              id="client_code"
              name="client_code"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
            />
          </div>

          <div>
            <label for="e_ticket" class="block font-semibold mb-1">E_Ticket</label>
            <input
              type="file"
              id="e_ticket"
              name="e_ticket"
              required
              class="w-full"
            />
          </div>

          <div>
            <label for="accomodation_voucher" class="block font-semibold mb-1">Accommodation Voucher</label>
            <input
              type="file"
              id="accomodation_voucher"
              name="accomodation_voucher"
              required
              class="w-full"
            />
          </div>

          <div>
            <label for="transport_voucher" class="block font-semibold mb-1">Transport Voucher</label>
            <input
              type="file"
              id="transport_voucher"
              name="transport_voucher"
              required
              class="w-full"
            />
          </div>

          <div>
            <label for="agent_code" class="block font-semibold mb-1">Agent Code</label>
            <input
              type="text"
              id="agent_code"
              name="agent_code"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
            />
          </div>

          <button
            type="submit"
            class="bg-green-600 hover:bg-green-700 text-white rounded px-6 py-2 font-semibold transition"
          >
            Submit
          </button>

        </form>
      </div>

    </main>

  </div>

</body>
</html>
