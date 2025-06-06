<?php
session_start();
include("../Processes/agent-login-process.php");
require('../Processes/DBCONNECT.php');
$agent_code = $_POST['agent_code'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Requests | Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen text-sm font-sans">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <div class="flex items-center space-x-4">
      <span>Logged in as:</span>
      <h4 class="font-semibold"><?php echo $_SESSION['agent_email']; ?></h4>
    </div>
  </header>

  <div class="flex">

    <!-- Sidebar Navigation -->
    <nav class="w-64 bg-green-600 text-white min-h-screen p-5 space-y-3">
      <a href="agentHome.php" class="block py-2 px-4 hover:bg-green-500 rounded">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Clients</a>
      <a href="make-booking.php" class="block py-2 px-4 hover:bg-green-500 rounded">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 bg-green-800 rounded">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded">Invoice</a>
      <a href="view-invoice-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h2 class="text-2xl font-bold text-green-700 mb-6">Booking Requests</h2>

      <div class="overflow-x-auto bg-white shadow-md rounded">
        <table class="min-w-full divide-y divide-green-200 text-sm">
          <thead class="bg-green-600 text-white">
            <tr>
              <th class="px-4 py-2">ID</th>
              <th class="px-4 py-2">Client Code</th>
              <th class="px-4 py-2">Origin</th>
              <th class="px-4 py-2">Destination</th>
              <th class="px-4 py-2">Traveller Info</th>
              <th class="px-4 py-2">Flight Class</th>
              <th class="px-4 py-2">Departure</th>
              <th class="px-4 py-2">Return</th>
              <th class="px-4 py-2">Accommodation</th>
              <th class="px-4 py-2">Accommodation Desc</th>
              <th class="px-4 py-2">Transport</th>
              <th class="px-4 py-2">Transport Desc</th>
              <th class="px-4 py-2">Agent Code</th>
              <th class="px-4 py-2">Handled</th>
              <th class="px-4 py-2">Edit</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-green-100 text-gray-800">
            <?php
              $sql = "SELECT * FROM booking_requests WHERE agent_code ='$agent_code' AND is_handled = '0'";
              $result = mysqli_query($conn, $sql);
              $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
              foreach ($requests as $value):
            ?>
            <tr>
              <td class="px-4 py-2"><?php echo $value['booking_request_id']; ?></td>
              <td class="px-4 py-2"><?php echo $value['client_code']; ?></td>
              <td class="px-4 py-2"><?php echo $value['origin']; ?></td>
              <td class="px-4 py-2"><?php echo $value['destination']; ?></td>
              <td class="px-4 py-2"><?php echo $value['traveller_information']; ?></td>
              <td class="px-4 py-2"><?php echo $value['preferred_flight_class']; ?></td>
              <td class="px-4 py-2"><?php echo $value['departure_date']; ?></td>
              <td class="px-4 py-2"><?php echo $value['return_date']; ?></td>
              <td class="px-4 py-2"><?php echo $value['book_accomodation']; ?></td>
              <td class="px-4 py-2"><?php echo $value['accomodation_description']; ?></td>
              <td class="px-4 py-2"><?php echo $value['book_transportation']; ?></td>
              <td class="px-4 py-2"><?php echo $value['transportation_description']; ?></td>
              <td class="px-4 py-2"><?php echo $value['agent_code']; ?></td>
              <td class="px-4 py-2"><?php echo $value['is_handled']; ?></td>
              <td class="px-4 py-2">
                <form action="ishandled.php" method="POST">
                  <input type="hidden" name="booking_request_id" value="<?php echo $value['booking_request_id']; ?>" />
                  <button type="submit" class="bg-green-100 text-green-800 border border-green-300 px-3 py-1 rounded hover:bg-green-200 transition">
                    Update
                  </button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
