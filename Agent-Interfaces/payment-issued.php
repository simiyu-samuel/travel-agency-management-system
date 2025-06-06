<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Payment</title>
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
      <a href="itinerary.php" class="hover:bg-green-700 rounded px-3 py-2">Itinerary</a>
      <a href="invoice.php" class="hover:bg-green-700 rounded px-3 py-2">Invoice</a>
      <a href="view-invoices-prompt.php" class="hover:bg-green-700 rounded px-3 py-2">View Invoices</a>
      <a href="payments-prompt.php" class="bg-green-600 rounded px-3 py-2 font-semibold">Payments</a>
      <a href="agent-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8 flex items-center justify-center">

      <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
        <?php 
          $paymentID = $_POST['payment_id'] ?? '';

          require("../Processes/DBCONNECT.php");

          $sql = "SELECT * FROM mpesa_payments WHERE payment_id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s", $paymentID);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result && $result->num_rows === 1) {
              $data = $result->fetch_assoc();
          ?>
          
          <form action="payment-issued-process.php" method="POST" class="space-y-6">

            <div>
              <label for="payment_id" class="block font-semibold mb-1">Payment ID:</label>
              <input 
                type="text" 
                id="payment_id" 
                name="payment_id" 
                value="<?= htmlspecialchars($data['payment_id']) ?>" 
                readonly 
                class="w-full border border-green-300 rounded px-4 py-2 bg-green-100 text-green-700"
              />
            </div>

            <div>
              <label for="client_code" class="block font-semibold mb-1">Client Code:</label>
              <input 
                type="text" 
                id="client_code" 
                name="client_code" 
                value="<?= htmlspecialchars($data['client_code']) ?>" 
                readonly 
                class="w-full border border-green-300 rounded px-4 py-2 bg-green-100 text-green-700"
              />
            </div>

            <div>
              <label for="confirmation_code" class="block font-semibold mb-1">Confirmation Code:</label>
              <input 
                type="text" 
                id="confirmation_code" 
                name="confirmation_code" 
                value="<?= htmlspecialchars($data['confirmation_code']) ?>" 
                readonly 
                class="w-full border border-green-300 rounded px-4 py-2 bg-green-100 text-green-700"
              />
            </div>

            <div>
              <label for="payment_date" class="block font-semibold mb-1">Payment Date:</label>
              <input 
                type="text" 
                id="payment_date" 
                name="payment_date" 
                value="<?= htmlspecialchars($data['payment_date']) ?>" 
                readonly 
                class="w-full border border-green-300 rounded px-4 py-2 bg-green-100 text-green-700"
              />
            </div>

            <div>
              <label for="issued" class="block font-semibold mb-1">Issued:</label>
              <input 
                type="text" 
                id="issued" 
                name="issued" 
                value="<?= htmlspecialchars($data['issued']) ?>" 
                class="w-full border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>

            <button 
              type="submit" 
              class="bg-green-600 hover:bg-green-700 text-white rounded px-6 py-2 font-semibold transition"
            >
              Save
            </button>

          </form>

          <?php 
          } else {
              echo "<p class='text-red-600 font-semibold'>Payment not found.</p>";
          }
          ?>
      </div>

    </main>

  </div>

</body>
</html>
