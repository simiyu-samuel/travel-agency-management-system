<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <title>Invoices</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-green-50 text-green-900 min-h-screen flex flex-col">

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

  <div class="flex flex-1 overflow-hidden">
    <!-- Sidebar -->
    <nav class="bg-green-800 text-green-200 w-56 p-6 flex flex-col space-y-4 overflow-y-auto">
      <a href="agentHome.php" class="hover:bg-green-700 rounded px-3 py-2">Home</a>
      <a href="clients-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Your Clients</a>
      <a href="make-booking.php" class="hover:bg-green-700 rounded px-3 py-2">Make Booking</a>
      <a href="booking-requests-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Booking Requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Booking history</a>
      <a href="itinerary.php" class="hover:bg-green-700 rounded px-3 py-2">Itinerary</a>
      <a href="invoice.php" class="hover:bg-green-700 rounded px-3 py-2">Invoice</a>
      <a href="view-invoices-prompt.php" class="bg-green-600 rounded px-3 py-2 font-semibold">View Invoices</a>
      <a href="payments-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">Payments</a>
      <a href="agent-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main content -->
    <main class="flex-1 overflow-auto p-8">
      <h2 class="text-3xl font-bold mb-6">Invoices</h2>

      <div class="overflow-x-auto rounded-lg shadow-md bg-white">
        <table class="min-w-full border-collapse table-auto text-left text-green-900">
          <thead class="bg-green-200 text-green-800 uppercase text-sm font-semibold">
            <tr>
              <th class="px-4 py-3 border border-green-300">Invoice ID</th>
              <th class="px-4 py-3 border border-green-300">Client Code</th>
              <th class="px-4 py-3 border border-green-300">Agent Code</th>
              <th class="px-4 py-3 border border-green-300">Flight Total</th>
              <th class="px-4 py-3 border border-green-300">Accomodation Total</th>
              <th class="px-4 py-3 border border-green-300">Transportation Total</th>
              <th class="px-4 py-3 border border-green-300">Service Total</th>
              <th class="px-4 py-3 border border-green-300">Service Charge</th>
              <th class="px-4 py-3 border border-green-300">Subtotal</th>
              <th class="px-4 py-3 border border-green-300">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require('../Processes/DBCONNECT.php');
              $agent_code = isset($_POST['agent_code']) ? mysqli_real_escape_string($conn, $_POST['agent_code']) : '';

              if ($agent_code) {
                $sql = "SELECT invoices.issued, invoices.invoice_id, invoices.client_code, invoices.agent_code, invoices.flight_total, invoices.accomodation_total, invoices.transportation_total, invoices.service_total, invoices.service_charge, invoices.subtotal 
                        FROM invoices 
                        WHERE invoices.agent_code = '$agent_code' AND invoices.issued = '0'";

                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                  while ($value = mysqli_fetch_assoc($result)) {
                    echo "<tr class='hover:bg-green-100'>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['invoice_id']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['client_code']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['agent_code']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['flight_total']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['accomodation_total']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['transportation_total']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['service_total']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['service_charge']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>" . htmlspecialchars($value['subtotal']) . "</td>
                            <td class='px-4 py-2 border border-green-300'>
                              <form action='invoice-issued.php' method='POST'>
                                <input type='hidden' name='invoice_id' value='" . htmlspecialchars($value['invoice_id']) . "' />
                                <button type='submit' class='bg-green-500 hover:bg-green-600 text-white rounded px-3 py-1 text-sm transition'>Update</button>
                              </form>
                            </td>
                          </tr>";
                  }
                } else {
                  echo "<tr><td colspan='10' class='text-center py-6'>No invoices found for this agent.</td></tr>";
                }
              } else {
                echo "<tr><td colspan='10' class='text-center py-6'>Agent code not provided.</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
