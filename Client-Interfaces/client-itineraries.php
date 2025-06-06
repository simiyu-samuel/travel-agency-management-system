<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Itineraries</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
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

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-green-700 text-white flex flex-col py-6 px-4 space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 rounded">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="#" class="bg-green-800 p-2 rounded font-semibold">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-auto">
      <h2 class="text-2xl font-bold mb-4 text-green-700">Itineraries</h2>

      <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-lg font-semibold mb-2">Your itineraries:</h3>
        <p class="mb-4 text-gray-700">Right-click on each file to save or print it.</p>

        <div class="overflow-x-auto">
          <table class="min-w-full border border-gray-300 rounded-lg text-sm">
            <thead class="bg-green-100 text-green-900">
              <tr>
                <th class="p-3 text-left border-b">Client code</th>
                <th class="p-3 text-left border-b">E-ticket</th>
                <th class="p-3 text-left border-b">Accommodation voucher</th>
                <th class="p-3 text-left border-b">Transport voucher</th>
                <th class="p-3 text-left border-b">Agent code</th>
              </tr>
            </thead>
            <tbody class="text-gray-700 align-top">
              <?php
              require('../Processes/DBCONNECT.php');
              $inputclientcode = isset($_POST['client_code']) ? $_POST['client_code'] : '';

              $sql = "SELECT * FROM itineraries WHERE client_code = '$inputclientcode'";
              $result = mysqli_query($conn, $sql);
              $itineraries = mysqli_fetch_all($result, MYSQLI_ASSOC);

              foreach ($itineraries as $row) {
                echo "<tr class='hover:bg-gray-50'>";
                echo "<td class='p-3 border-b align-top'>" . htmlspecialchars($row['client_code']) . "</td>";

                // Embed PDFs with a fixed small size box and scroll overflow
                $embedStyle = "width:160px; height:160px; border:1px solid #ccc;";

                echo "<td class='p-3 border-b align-top'>";
                echo "<object style='{$embedStyle}' data='data:application/pdf;base64," . base64_encode($row['e_ticket']) . "' type='application/pdf'>PDF not supported</object>";
                echo "</td>";

                echo "<td class='p-3 border-b align-top'>";
                echo "<object style='{$embedStyle}' data='data:application/pdf;base64," . base64_encode($row['accomodation_voucher']) . "' type='application/pdf'>PDF not supported</object>";
                echo "</td>";

                echo "<td class='p-3 border-b align-top'>";
                echo "<object style='{$embedStyle}' data='data:application/pdf;base64," . base64_encode($row['transport_voucher']) . "' type='application/pdf'>PDF not supported</object>";
                echo "</td>";

                echo "<td class='p-3 border-b align-top'>" . htmlspecialchars($row['agent_code']) . "</td>";
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
