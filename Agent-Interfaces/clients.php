<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Assigned Clients - Agent Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a', // Green primary theme
            secondary: '#4ade80',
            dark: '#1f2937',
            light: '#f9fafb',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-light text-gray-800">

  <!-- Header -->
  <header class="bg-primary text-white shadow p-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <div class="text-sm">
      <?php include("../Processes/agent-login-process.php"); ?>
      <span><?php echo $_SESSION['agent_email']; ?></span>
    </div>
  </header>

  <!-- Page Layout -->
  <div class="flex min-h-screen">
    
    <!-- Sidebar -->
    <nav class="w-64 bg-green-600 text-white p-5 space-y-3 overflow-y-auto">
      <a href="agentHome.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Home</a>
      <a href="clients-prompt.php" class="block py-2 px-4 bg-green-800 rounded font-semibold">Your Clients</a>
      <a href="make-booking.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded transition">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h2 class="text-2xl font-bold text-gray-700 mb-6">Assigned Clients</h2>

      <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
          <thead class="bg-primary text-white">
            <tr>
              <th class="px-4 py-3">Client Code</th>
              <th class="px-4 py-3">First Name</th>
              <th class="px-4 py-3">Last Name</th>
              <th class="px-4 py-3">ID Number</th>
              <th class="px-4 py-3">Age</th>
              <th class="px-4 py-3">Sex</th>
              <th class="px-4 py-3">Phone Number</th>
              <th class="px-4 py-3">Email</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php
              require('../Processes/DBCONNECT.php');
              $agent_code = $_POST['agent_code'];
              $sql = "SELECT clients.client_code, clients.client_fname, clients.client_lname, clients.national_id, clients.age, clients.sex, clients.phone_number, clients.client_email FROM clients WHERE clients.agent_code = '$agent_code'";
              $result = mysqli_query($conn, $sql);
              $clients = mysqli_fetch_all($result, MYSQLI_ASSOC);
              foreach($clients as $client):
            ?>
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['client_code']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['client_fname']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['client_lname']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['national_id']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['age']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['sex']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['phone_number']); ?></td>
                <td class="px-4 py-2"><?php echo htmlspecialchars($client['client_email']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
