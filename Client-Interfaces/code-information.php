<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Code Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-green-50 font-sans">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center shadow-md">
    <div class="text-2xl font-bold">Dashboard</div>
    <div class="flex items-center gap-2">
      <i class="fas fa-user-circle text-white text-xl"></i>
      <h4 class="text-white text-sm">
        <?php  
          include("../Processes/login-process.php"); 
          echo htmlspecialchars($_SESSION['client_email']);
        ?>
      </h4>
    </div>
  </header>

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-800 text-white p-6 flex flex-col space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 rounded">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="#" class="bg-green-600 p-2 rounded font-semibold">Code information</a>
      <a href="client-login.php" class="mt-4 bg-red-600 hover:bg-red-500 text-center p-2 rounded">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-3xl font-semibold text-green-700 mb-6">Code Information</h2>

      <div class="bg-white p-6 rounded shadow-md">
        <h3 class="text-xl font-medium mb-4 text-green-700">Your code information:</h3>

        <?php
        require('../Processes/DBCONNECT.php');

        if (isset($_POST['client_email']) && !empty($_POST['client_email'])) {
          $inputclientemail = $_POST['client_email'];

          $stmt = $conn->prepare("SELECT client_fname, client_lname, client_code, agent_code FROM clients WHERE client_email = ?");
          $stmt->bind_param("s", $inputclientemail);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result->num_rows > 0) {
            echo '<div class="overflow-x-auto">
                    <table class="min-w-full table-auto text-sm text-left border border-green-200">
                      <thead class="bg-green-600 text-white">
                        <tr>
                          <th class="px-4 py-2 border border-green-300">First Name</th>
                          <th class="px-4 py-2 border border-green-300">Last Name</th>
                          <th class="px-4 py-2 border border-green-300">Client Code</th>
                          <th class="px-4 py-2 border border-green-300">Agent Code</th>
                        </tr>
                      </thead>
                      <tbody>';

            while ($row = $result->fetch_assoc()) {
              echo '<tr class="border-t border-green-200 hover:bg-green-50">
                      <td class="px-4 py-2">' . htmlspecialchars($row['client_fname']) . '</td>
                      <td class="px-4 py-2">' . htmlspecialchars($row['client_lname']) . '</td>
                      <td class="px-4 py-2 font-mono text-green-700">' . htmlspecialchars($row['client_code']) . '</td>
                      <td class="px-4 py-2 font-mono text-green-700">' . htmlspecialchars($row['agent_code']) . '</td>
                    </tr>';
            }

            echo '</tbody></table></div>';
          } else {
            echo '<p class="text-red-600 font-medium">No code information found for the provided email.</p>';
          }

          $stmt->close();
        } else {
          echo '<p class="text-yellow-600 font-medium">Please submit your client email to view your code information.</p>';
        }

        $conn->close();
        ?>
      </div>
    </main>
  </div>
</body>
</html>
