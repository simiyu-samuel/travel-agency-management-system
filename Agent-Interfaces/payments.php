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
      <a href="view-invoices-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">View Invoices</a>
      <a href="payments-prompt.php" class="bg-green-600 rounded px-3 py-2 font-semibold">Payments</a>
      <a href="agent-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main content -->
    <main class="flex-1 p-8 overflow-auto">
      <h2 class="text-3xl font-semibold text-green-800 mb-8">Payments</h2>

      <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
        <table class="min-w-full divide-y divide-green-200">
          <thead class="bg-green-100">
            <tr>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Payment ID</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Client Code</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Confirmation Code</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Payment Date</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Issued</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-green-700 uppercase">Edit</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-green-100">
            <?php
              require('../Processes/DBCONNECT.php');
              $client_code = $_POST['client_code'] ?? '';

              if ($client_code) {
                $sql = "SELECT * FROM mpesa_payments WHERE client_code = ? AND issued = '0'";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $client_code);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                  while ($value = $result->fetch_assoc()) {
                    ?>
                    <tr class="hover:bg-green-50 transition">
                      <td class="px-6 py-4 whitespace-nowrap text-sm"><?= htmlspecialchars($value['payment_id']) ?></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm"><?= htmlspecialchars($value['client_code']) ?></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm"><?= htmlspecialchars($value['confirmation_code']) ?></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm"><?= htmlspecialchars($value['payment_date']) ?></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm"><?= htmlspecialchars($value['issued']) ?></td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <form action="payment-issued.php" method="POST" class="inline">
                          <input type="hidden" name="payment_id" value="<?= htmlspecialchars($value['payment_id']) ?>" />
                          <button type="submit" 
                            class="bg-green-600 hover:bg-green-700 text-white rounded px-3 py-1 text-sm transition">
                            Update
                          </button>
                        </form>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  echo '<tr><td colspan="6" class="text-center py-6 text-red-600 font-semibold">No pending payments found.</td></tr>';
                }
                $stmt->close();
              } else {
                echo '<tr><td colspan="6" class="text-center py-6 text-red-600 font-semibold">No client code provided.</td></tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
