<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Invoices</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Header -->
  <header class="bg-green-600 text-white shadow-md p-4 flex justify-between items-center">
    <div class="text-xl font-semibold">Dashboard</div>
    <div class="text-sm">
      <?php include("../Processes/login-process.php"); ?>
      <span><?php echo $_SESSION['client_email']; ?></span>
    </div>
  </header>

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 min-h-screen bg-green-700 text-white flex flex-col py-6 px-4 space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 rounded">Booking history</a>
      <a href="#" class="bg-green-800 p-2 rounded font-semibold">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-2xl font-bold mb-4 text-green-700">Invoices</h2>

      <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-lg font-semibold mb-2">Your invoices:</h3>

        <div class="overflow-x-auto">
          <table class="min-w-full border border-gray-300 rounded-lg text-sm">
            <thead class="bg-green-100 text-green-900">
              <tr>
                <th class="p-3 text-left border-b">Client Code</th>
                <th class="p-3 text-left border-b">Flight Total</th>
                <th class="p-3 text-left border-b">Accommodation Total</th>
                <th class="p-3 text-left border-b">Transportation Total</th>
                <th class="p-3 text-left border-b">Service Total</th>
                <th class="p-3 text-left border-b">Service Charge</th>
                <th class="p-3 text-left border-b">Subtotal</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php
              require('../Processes/DBCONNECT.php');
              $inputclientcode = isset($_POST['client_code']) ? $_POST['client_code'] : '';

              $sql = "SELECT * FROM invoices WHERE client_code = '$inputclientcode'";
              $result = mysqli_query($conn, $sql);
              $invoices = mysqli_fetch_all($result, MYSQLI_ASSOC);

              foreach ($invoices as $invoice) {
                echo "<tr class='hover:bg-gray-50'>";
                echo "<td class='p-3 border-b'>" . htmlspecialchars($invoice['client_code']) . "</td>";
                echo "<td class='p-3 border-b'>Ksh " . number_format($invoice['flight_total'], 2) . "</td>";
                echo "<td class='p-3 border-b'>Ksh " . number_format($invoice['accomodation_total'], 2) . "</td>";
                echo "<td class='p-3 border-b'>Ksh " . number_format($invoice['transportation_total'], 2) . "</td>";
                echo "<td class='p-3 border-b'>Ksh " . number_format($invoice['service_total'], 2) . "</td>";
                echo "<td class='p-3 border-b'>Ksh " . number_format($invoice['service_charge'], 2) . "</td>";
                echo "<td class='p-3 border-b font-semibold text-green-600'>Ksh " . number_format($invoice['subtotal'], 2) . "</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
