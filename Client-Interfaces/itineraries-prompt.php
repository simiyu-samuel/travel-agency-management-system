<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Itineraries Prompt</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          },
          colors: {
            primary: '#16a34a', // Custom green
          }
        }
      }
    }
  </script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-primary text-white px-6 py-4 shadow flex justify-between items-center">
    <div class="text-xl font-semibold">Dashboard</div>
    <div class="text-sm">
      <h4 class="font-medium">
        <?php include("../Processes/login-process.php"); ?>
        <?php echo htmlspecialchars($_SESSION['client_email']); ?>
      </h4>
    </div>
  </header>

  <div class="flex flex-1">

  
    
    <!-- Sidebar -->
    <nav class="w-64 min-h-screen bg-green-700 text-white flex flex-col py-6 px-4 space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="booking-request.php" class="hover:bg-green-600 p-2 rounded">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 rounded">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="#" class="bg-green-800 p-2 rounded font-semibold">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h2 class="text-2xl font-bold text-primary mb-6">Itineraries Prompt</h2>

      <div class="bg-white p-8 rounded-xl shadow-md max-w-xl">
        <h1 class="text-xl font-semibold text-gray-800 mb-4">Code Verification</h1>
        <p class="text-gray-600 mb-6">
          Kindly enter your <strong>client code</strong> to view your itineraries:
        </p>

        <form action="client-itineraries.php" method="post" class="space-y-6">
          <div>
            <label for="clientCode" class="block text-sm font-medium text-gray-700 mb-1">Client Code:</label>
            <input type="text" id="clientCode" name="client_code" required
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" />
          </div>

          <button type="submit" name="verify code"
                  class="bg-primary hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-lg transition-colors">
            View Itineraries
          </button>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
