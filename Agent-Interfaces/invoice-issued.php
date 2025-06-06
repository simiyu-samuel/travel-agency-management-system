<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit</title>
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
    <main class="flex-1 p-8 overflow-auto">
      <div class="bg-white rounded-lg shadow-lg p-8 max-w-xl mx-auto">

        <h3 class="text-3xl font-semibold text-green-800 mb-6 text-center">INVOICES</h3>

        <?php
        $invoice_id = $_POST['invoice_id'] ?? '';

        require("../Processes/DBCONNECT.php");

        if ($invoice_id) {
          $sql = "SELECT * FROM invoices WHERE invoice_id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s", $invoice_id);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result && $result->num_rows === 1) {
            $data = $result->fetch_assoc();
            ?>

            <form action="invoice-issued-process.php" method="POST" class="flex flex-col space-y-5">

              <label for="invoice_id" class="font-semibold text-green-700">Invoice ID</label>
              <input type="text" name="invoice_id" id="invoice_id" value="<?= htmlspecialchars($data['invoice_id']) ?>" readonly
                class="border border-green-300 rounded px-4 py-2 bg-green-100 cursor-not-allowed" />

              <label for="client_code" class="font-semibold text-green-700">Client Code</label>
              <input type="text" name="client_code" id="client_code" value="<?= htmlspecialchars($data['client_code']) ?>" readonly
                class="border border-green-300 rounded px-4 py-2 bg-green-100 cursor-not-allowed" />

              <label for="agent_code" class="font-semibold text-green-700">Agent Code</label>
              <input type="text" name="agent_code" id="agent_code" value="<?= htmlspecialchars($data['agent_code']) ?>" readonly
                class="border border-green-300 rounded px-4 py-2 bg-green-100 cursor-not-allowed" />

              <label for="subtotal" class="font-semibold text-green-700">Subtotal</label>
              <input type="text" name="subtotal" id="subtotal" value="<?= htmlspecialchars($data['subtotal']) ?>" readonly
                class="border border-green-300 rounded px-4 py-2 bg-green-100 cursor-not-allowed" />

              <label for="issued" class="font-semibold text-green-700">Issued</label>
              <input type="text" name="issued" id="issued" value="<?= htmlspecialchars($data['issued']) ?>"
                class="border border-green-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-400 transition" />

              <button type="submit" 
                class="bg-green-600 hover:bg-green-700 text-white rounded px-6 py-3 font-semibold w-32 mx-auto mt-6 transition">
                Save
              </button>

            </form>

            <?php
          } else {
            echo '<p class="text-red-600 font-semibold text-center">Invoice not found.</p>';
          }

          $stmt->close();
        } else {
          echo '<p class="text-red-600 font-semibold text-center">No invoice selected.</p>';
        }
        ?>
      </div>
    </main>
  </div>
</body>
</html>
