<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Anarchy Adventures</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-green-700 text-white flex justify-between items-center px-6 py-4 shadow">
    <div class="text-2xl font-bold">Dashboard</div>
    <div>
      <span class="text-sm font-medium">
        <?php include("../Processes/login-process.php"); ?>
        Logged in as: <?= $_SESSION['client_email']; ?>
      </span>
    </div>
  </header>

  <!-- Main container -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-800 text-white p-6 flex flex-col space-y-4">
      <a href="#" class="bg-green-900 p-2 rounded font-semibold">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 roundedss">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </nav>

    <!-- Main body -->
    <main class="flex-1 p-8">
      <h2 class="text-3xl font-bold text-green-700 mb-6">Home</h2>

      <div class="bg-white p-6 rounded-lg shadow space-y-6">
        <h1 class="text-2xl font-semibold">Welcome</h1>
        <p>Here are a few tips to get you going:</p>

        <ol class="list-decimal list-inside space-y-1 text-gray-700">
          <li>You are provided with a <strong>client code</strong> and your agent's <strong>agent code</strong>.</li>
          <li>You will be prompted to enter your <strong>client code</strong> when accessing some dashboard features.</li>
          <li>If you don’t remember your <strong>client code</strong>, use the <strong>Code Information</strong> option in the sidebar.</li>
        </ol>

        <p class="font-medium">Click an option on the sidebar to get started.</p>

        <hr class="my-4" />

        <p class="font-semibold">Need help? Contact us:</p>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li>Email us at: <strong>info@anarchyadventures.com</strong></li>
        </ul>
      </div>
    </main>

  </div>
</body>
</html>
