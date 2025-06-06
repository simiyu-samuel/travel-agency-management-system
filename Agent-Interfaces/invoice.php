<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Make Invoice</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen font-sans">

  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <div class="text-2xl font-bold text-green-700">Dashboard</div>
    <div class="text-green-800 text-sm">
      <?php 
        include("../Processes/agent-login-process.php");
        echo htmlspecialchars($_SESSION['agent_email']);
      ?>
    </div>
  </header>

  <div class="flex">

    <!-- Sidebar -->
    <nav class="w-60 min-h-screen bg-green-800 text-white p-6 space-y-4">
      <a href="agentHome.php" class="block py-2 px-4 rounded hover:bg-green-600">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Your Clients</a>
      <a href="make-booking.php" class="block py-2 px-4 rounded hover:bg-green-600">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 rounded hover:bg-green-600">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 bg-green-600 rounded">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 rounded bg-red-600 hover:bg-red-700">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-center space-x-4 mb-6">
          <a href="https://www.expedia.com" target="_blank" rel="noopener noreferrer">
            <button class="flex items-center space-x-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded text-lg">
              <span>Book Flight</span>
              <span class="material-icons">flight</span>
            </button>
          </a>

          <a href="https://www.booking.com" target="_blank" rel="noopener noreferrer">
            <button class="flex items-center space-x-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded text-lg">
              <span>Book Hotel</span>
              <span class="material-icons">hotel</span>
            </button>
          </a>

          <a href="https://www.gettransfer.com/en" target="_blank" rel="noopener noreferrer">
            <button class="flex items-center space-x-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded text-lg">
              <span>Transport</span>
              <i class="fa fa-automobile"></i>
            </button>
          </a>
        </div>

        <h3 class="text-2xl font-bold text-green-700 mb-6 text-center">INVOICES</h3>

        <form action="../Processes/invoice-process.php" method="post" class="space-y-5">
          <div>
            <label for="client-code" class="block font-semibold text-green-800 mb-1">Client Code</label>
            <input
              type="text"
              id="client-code"
              name="client-code"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
          </div>

          <div>
            <label for="agent-code" class="block font-semibold text-green-800 mb-1">Agent Code</label>
            <input
              type="text"
              id="agent-code"
              name="agent-code"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
          </div>

          <div>
            <label for="flight-total" class="block font-semibold text-green-800 mb-1">Flight Total</label>
            <input
              type="number"
              id="flight-total"
              name="flight-total"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
          </div>

          <div>
            <label for="accomodation-total" class="block font-semibold text-green-800 mb-1">Accomodation Total</label>
            <input
              type="number"
              id="accomodation-total"
              name="accomodation-total"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
          </div>

          <div>
            <label for="transport-total" class="block font-semibold text-green-800 mb-1">Transportation Total</label>
            <input
              type="number"
              id="transport-total"
              name="transport-total"
              required
              class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
            />
          </div>

          <div class="pt-4">
            <input
              type="submit"
              value="Submit"
              class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded cursor-pointer"
            />
          </div>
        </form>
      </div>
    </main>

  </div>

</body>
</html>
