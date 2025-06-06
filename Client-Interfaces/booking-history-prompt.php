<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Booking History Prompt</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
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
      <h2 class="text-2xl font-semibold text-gray-800 mb-6">Booking History Prompt</h2>

      <div class="bg-white rounded-lg shadow p-8 max-w-md mx-auto">
        <h1 class="text-xl font-bold text-green-600 mb-4">Code Verification</h1>
        <p class="mb-6 text-gray-700 font-medium">
          Kindly enter your <strong>client code</strong> to view your booking history:
        </p>

        <form action="booking-history.php" method="post" class="space-y-6">
          <div>
            <label for="clientCode" class="block mb-2 font-semibold text-gray-700">Client code:</label>
            <input
              type="text"
              id="clientCode"
              name="client_code"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600"
              placeholder="Enter your client code"
            />
          </div>

          <button
            type="submit"
            name="verify_code"
            class="w-full bg-green-600 text-white font-semibold py-2 rounded-md hover:bg-green-700 transition"
          >
            View booking history
          </button>
        </form>
      </div>
    </main>
  </div>

</body>
</html>
