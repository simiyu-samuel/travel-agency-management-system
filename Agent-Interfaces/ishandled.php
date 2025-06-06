<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Booking Request</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen font-sans">

  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-green-700">Dashboard</h1>
    <div class="text-sm text-green-800">
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
      <a href="booking-requests-prompt.php" class="block py-2 px-4 bg-green-600 rounded">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 rounded hover:bg-green-600">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 rounded hover:bg-green-600">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 rounded hover:bg-green-600">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 rounded bg-red-600 hover:bg-red-700">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-green-700">Edit Booking Request</h2>

        <?php
          require("../Processes/DBCONNECT.php");

          if (isset($_POST['booking_request_id'])) {
            $bookingreqID = mysqli_real_escape_string($conn, $_POST['booking_request_id']);
            $sql = "SELECT * FROM booking_requests WHERE booking_request_id='$bookingreqID'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
              $data = mysqli_fetch_assoc($result);
        ?>

        <form action="ishandled-process.php" method="POST" class="space-y-4">
          <input type="hidden" name="original_booking_request_id" value="<?php echo htmlspecialchars($bookingreqID); ?>" />

          <div>
            <label class="block font-semibold text-green-800">Booking Request ID:</label>
            <input type="text" name="booking_request_id" value="<?php echo htmlspecialchars($data['booking_request_id']); ?>" class="w-full border border-green-300 rounded px-4 py-2" readonly />
          </div>

          <div>
            <label class="block font-semibold text-green-800">Client Code:</label>
            <input type="text" name="client_code" value="<?php echo htmlspecialchars($data['client_code']); ?>" class="w-full border border-green-300 rounded px-4 py-2" readonly />
          </div>

          <div>
            <label class="block font-semibold text-green-800">Agent Code:</label>
            <input type="text" name="agent_code" value="<?php echo htmlspecialchars($data['agent_code']); ?>" class="w-full border border-green-300 rounded px-4 py-2" readonly />
          </div>

          <div>
            <label class="block font-semibold text-green-800">Is Handled:</label>
            <input type="text" name="is_handled" value="<?php echo htmlspecialchars($data['is_handled']); ?>" class="w-full border border-green-300 rounded px-4 py-2" />
          </div>

          <div class="pt-4">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded">
              Save
            </button>
          </div>
        </form>

        <?php
            } else {
              echo "<p class='text-red-600 font-semibold'>Booking Request not found.</p>";
            }
          } else {
            echo "<p class='text-red-600 font-semibold'>Invalid request. Booking Request ID not set.</p>";
          }
        ?>
      </div>
    </main>

  </div>
</body>
</html>
