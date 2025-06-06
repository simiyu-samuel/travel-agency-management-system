<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Payments</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body class="bg-gray-100 text-gray-900 font-poppins">

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
      <a href="#" class="bg-green-800 p-2 rounded font-semibold">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-auto">
      <h2 class="text-3xl font-bold mb-6 text-green-700">Payments</h2>

      <div class="bg-white shadow-md rounded-lg p-6 space-y-6">
        <div>
          <h3 class="text-xl font-semibold mb-3">Kindly follow the instructions below to successfully pay via M-PESA</h3>
          <ol class="list-decimal list-inside space-y-1 text-gray-700">
            <li>Fill in your phone number and the amount due under the Step 1 prompt.</li>
            <li>Confirm the payment on your mobile phone.</li>
            <li>Input your client code and M-PESA confirmation code under the Step 2 prompt.</li>
          </ol>
        </div>

        <!-- Step 1 Form -->
        <section>
          <h3 class="text-2xl font-semibold mb-4 text-green-800">STEP 1: Make M-PESA payment</h3>
          <form action="mpesa-test.php" method="post" class="space-y-4 max-w-md">
            <div>
              <label for="phone_number" class="block mb-1 font-medium text-gray-800">Phone Number</label>
              <input
                type="text"
                id="phone_number"
                name="phone_number"
                placeholder="e.g 254..."
                required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>
            <div>
              <label for="amount" class="block mb-1 font-medium text-gray-800">Amount</label>
              <input
                type="text"
                id="amount"
                name="amount"
                required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>
            <button
              type="submit"
              class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-semibold transition"
            >
              Make Payment
            </button>
          </form>
        </section>

        <!-- Step 2 Form -->
        <section>
          <h3 class="text-2xl font-semibold mb-4 text-green-800">STEP 2: Confirm payment</h3>
          <form action="../Processes/m-pesa-process.php" method="post" class="space-y-4 max-w-md">
            <div>
              <label for="client_code" class="block mb-1 font-medium text-gray-800">Client code</label>
              <input
                type="text"
                id="client_code"
                name="client_code"
                required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>
            <div>
              <label for="confirmation_code" class="block mb-1 font-medium text-gray-800">Confirmation code</label>
              <input
                type="text"
                id="confirmation_code"
                name="confirmation_code"
                required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>
            <button
              type="submit"
              name="confirm-payment"
              class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md font-semibold transition"
            >
              Confirm
            </button>
          </form>
        </section>
      </div>
    </main>
  </div>

</body>
</html>
