<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Code Information Prompt</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-green-50 text-gray-800">

  <!-- Header -->
  <header class="bg-green-700 text-white p-4 flex justify-between items-center shadow-md">
    <div class="text-2xl font-bold">Dashboard</div>
    <div class="flex items-center gap-2">
      <i class="fas fa-user-circle text-xl"></i>
      <h4 class="text-sm">
        <?php include("../Processes/login-process.php"); echo htmlspecialchars($_SESSION['client_email']); ?>
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

      <div class="bg-white shadow-md rounded p-8 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold text-green-700 mb-4">Confirm Codes</h1>

        <p class="text-md mb-4 text-gray-700">
          Kindly enter your email address below to check your <b>client code</b> and <b>agent's code</b>.
        </p>

        <form action="code-information.php" method="POST" class="space-y-6">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <input type="email" id="email" name="client_email" required 
              class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>

          <button type="submit" name="confirm-codes"
            class="w-full bg-green-700 hover:bg-green-600 text-white py-2 px-4 rounded-md font-semibold transition duration-150">
            Check Codes
          </button>
        </form>
      </div>
    </main>
  </div>

</body>
</html>
