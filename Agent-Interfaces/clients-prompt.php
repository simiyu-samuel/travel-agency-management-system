<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Clients - Agent Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a', // Green theme
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
      <a href="make-booking.php" class=" block py-2 px-4 hover:bg-green-500 rounded transition ">Make Booking</a>
      <a href="booking-requests-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking Requests</a>
      <a href="booking-history-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Booking History</a>
      <a href="itinerary.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Itinerary</a>
      <a href="invoice.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Invoice</a>
      <a href="view-invoices-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">View Invoices</a>
      <a href="payments-prompt.php" class="block py-2 px-4 hover:bg-green-500 rounded transition">Payments</a>
      <a href="agent-login.php" class="block py-2 px-4 bg-red-600 hover:bg-red-500 rounded transition">Log Out</a>
    </nav>


    <!-- Main Content -->
    <main class="flex-1 p-10 flex justify-center items-start">
      <div class="bg-white rounded-xl shadow-md w-full max-w-md p-8">
        <h2 class="text-xl font-bold mb-4 text-gray-700 text-center">Enter Your Agent Code</h2>
        <form action="clients.php" method="POST" class="space-y-4">
          <input 
            type="text" 
            name="agent_code" 
            id="input-text" 
            required 
            placeholder="Agent Code"
            class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
          >
          <input 
            type="submit" 
            value="Submit" 
            class="w-full bg-primary text-white font-semibold py-2 rounded-md hover:bg-green-700 cursor-pointer"
          >
        </form>
      </div>
    </main>
  </div>

</body>
</html>
