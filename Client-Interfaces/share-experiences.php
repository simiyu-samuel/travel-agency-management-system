<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Share Experiences - Anarchy Adventures</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-green-700 text-white px-6 py-4 flex justify-between items-center shadow">
    <div class="text-2xl font-bold">Dashboard</div>
    <div>
      <span class="text-sm">
        <?php include("../Processes/login-process.php"); ?>
        Logged in as: <?= $_SESSION['client_email']; ?>
      </span>
    </div>
  </header>

  <div class="flex">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-800 text-white p-6 flex flex-col space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="#" class="bg-green-900 p-2 rounded font-semibold">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 roundedss">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </nav>

    <!-- Main Body -->
    <main class="flex-1 p-8">
      <h2 class="text-3xl font-bold text-green-700 mb-6">Share Your Experience</h2>

      <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
        <h3 class="text-xl font-semibold mb-2">Tell us about a memorable travel experience!</h3>
        <p class="mb-6 text-gray-700">Fill out the form below to share your story with us:</p>

        <form action="../Processes/share-experiences-process.php" method="post" enctype="multipart/form-data" class="space-y-6">

          <!-- Image Upload -->
          <div>
            <label for="image" class="block font-medium mb-1">Upload an Image</label>
            <input type="file" name="image" id="image" required class="w-full border border-gray-300 rounded px-4 py-2" />
          </div>

          <!-- Date -->
          <div>
            <label for="date" class="block font-medium mb-1">Date</label>
            <input type="date" name="date" id="date" required class="w-full border border-gray-300 rounded px-4 py-2" />
          </div>

          <!-- Location -->
          <div>
            <label for="location" class="block font-medium mb-1">Location</label>
            <input type="text" name="location" id="location" required placeholder="e.g., Nairobi, Mombasa..." class="w-full border border-gray-300 rounded px-4 py-2" />
          </div>

          <!-- Comment -->
          <div>
            <label for="comment" class="block font-medium mb-1">Comment</label>
            <input type="text" name="comment" id="comment" required placeholder="Briefly describe what happened..." class="w-full border border-gray-300 rounded px-4 py-2" />
          </div>

          <!-- Submit Button -->
          <div>
            <button type="submit" name="confirm-payment" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition">
              Submit Experience
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
