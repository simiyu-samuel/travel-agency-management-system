<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Booking History</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-[Poppins] min-h-screen">

  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <div class="text-xl font-bold text-green-600">Dashboard</div>
    <div class="text-sm font-medium text-gray-700">
      <?php include("../Processes/login-process.php"); ?>
      <?php echo $_SESSION['client_email']; ?>
    </div>
  </header>

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-800 text-white p-6 flex flex-col space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="#" class="bg-green-900 p-2 rounded font-semibold">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6">Booking History</h2>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-xl font-bold mb-4">Your booking history:</h3>

        <div class="overflow-x-auto">
          <table class="min-w-full border border-gray-300 rounded-md overflow-hidden">
            <thead class="bg-green-600 text-white">
              <tr>
                <th class="py-2 px-4 border border-green-700 text-left">Client code</th>
                <th class="py-2 px-4 border border-green-700 text-left">Origin</th>
                <th class="py-2 px-4 border border-green-700 text-left">Destination</th>
                <th class="py-2 px-4 border border-green-700 text-left">Departure date</th>
                <th class="py-2 px-4 border border-green-700 text-left">Return date</th>
                <th class="py-2 px-4 border border-green-700 text-left">Flight Airline</th>
                <th class="py-2 px-4 border border-green-700 text-left">Accommodation</th>
                <th class="py-2 px-4 border border-green-700 text-left">Transportation</th>
                <th class="py-2 px-4 border border-green-700 text-left">Total cost</th>
                <th class="py-2 px-4 border border-green-700 text-left">Agent code</th>
              </tr>
            </thead>
            <tbody class="bg-white text-gray-800">
              <?php
              require('../Processes/DBCONNECT.php');
              $inputclientcode = $_POST['client_code'];

              $sql = "SELECT client_code, origin, destination, departure_date, return_date, flight_airline, accomodation, transportation, total_cost, agent_code FROM bookings WHERE client_code = '$inputclientcode'";
              $result = mysqli_query($conn, $sql);
              $bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);
              foreach($bookings as $booking) {
              ?>
              <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['client_code']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['origin']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['destination']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['departure_date']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['return_date']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['flight_airline']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['accomodation']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['transportation']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['total_cost']); ?></td>
                <td class="py-2 px-4 border border-gray-300"><?php echo htmlspecialchars($booking['agent_code']); ?></td>
              </tr>
              <?php
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
