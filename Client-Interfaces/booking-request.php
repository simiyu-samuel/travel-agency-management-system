<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - Booking Requests</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-[Poppins] min-h-screen">

  <!-- Header -->
  <header class="bg-green-700 shadow-md p-4 flex justify-between items-center text-white">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <div class="text-sm font-medium">
      <?php include("../Processes/login-process.php"); ?>
      Logged in as: <?php echo $_SESSION['client_email']; ?>
    </div>
  </header>

  <div class="flex">

    <!-- Sidebar -->
    <nav class="w-64 bg-green-800 text-white p-6 flex flex-col space-y-4">
      <a href="client-dashboard-home.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="share-experiences.php" class="hover:bg-green-600 p-2 rounded">Share experiences</a>
      <a href="#" class="bg-green-900 p-2 rounded font-semibold">Booking requests</a>
      <a href="booking-history-prompt.php" class="hover:bg-green-600 p-2 rounded">Booking history</a>
      <a href="invoice-prompt.php" class="hover:bg-green-600 p-2 rounded">Invoices</a>
      <a href="client-payments.php" class="hover:bg-green-600 p-2 rounded">Payment</a>
      <a href="itineraries-prompt.php" class="hover:bg-green-600 p-2 rounded">Itineraries</a>
      <a href="code-information-prompt.php" class="hover:bg-green-600 p-2 rounded" target="_blank">Code information</a>
      <a href="client-login.php" class="mt-10 bg-red-600 hover:bg-red-700 text-white p-2 text-center rounded">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-2xl font-semibold text-green-700 mb-4">Booking Requests</h2>

      <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-xl font-bold mb-2">Booking Request Form</h3>
        <p class="text-sm text-gray-500 mb-6">Fill the form below to make a booking request. Be as thorough as possible.</p>

        <form action="../Processes/booking-request-form-process.php" method="POST" class="space-y-6">

          <!-- Client Code -->
          <div>
            <label for="clientCode" class="block font-medium mb-1">Client Code</label>
            <input type="text" id="clientCode" name="client_code" class="w-full border p-2 rounded" required>
          </div>

          <!-- Origin -->
          <div>
            <label for="origin" class="block font-medium mb-1">Origin</label>
            <input type="text" id="origin" name="origin" placeholder="Where are you coming from?" class="w-full border p-2 rounded" required>
          </div>

          <!-- Destination -->
          <div>
            <label for="destination" class="block font-medium mb-1">Destination</label>
            <input type="text" id="destination" name="destination" placeholder="Where would you like to go?" class="w-full border p-2 rounded" required>
          </div>

          <!-- Traveller Information -->
          <div>
            <label for="travellerInformation" class="block font-medium mb-1">Traveller Information</label>
            <textarea id="travellerInformation" name="traveller_information" rows="3" class="w-full border p-2 rounded" placeholder="e.g. Adults=2, Children=1" required></textarea>
          </div>

          <!-- Flight Class -->
          <div>
            <label for="preferredFlightClass" class="block font-medium mb-1">Preferred Flight Class</label>
            <input type="text" id="preferredFlightClass" name="preferred_flight_class" placeholder="e.g. Economy, Business" class="w-full border p-2 rounded" required>
          </div>

          <!-- Departure and Return -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="departureDate" class="block font-medium mb-1">Departure Date</label>
              <input type="date" id="departureDate" name="departure_date" class="w-full border p-2 rounded" required>
            </div>
            <div>
              <label for="returnDate" class="block font-medium mb-1">Return Date</label>
              <input type="date" id="returnDate" name="return_date" class="w-full border p-2 rounded" required>
            </div>
          </div>

          <!-- Accommodation -->
          <div>
            <label class="block font-medium mb-1">Should we book your accommodation?</label>
            <div class="flex gap-4">
              <label class="flex items-center gap-2">
                <input type="radio" name="book_accomodation" value="1" class="accent-green-700"> Yes
              </label>
              <label class="flex items-center gap-2">
                <input type="radio" name="book_accomodation" value="0" class="accent-green-700"> No
              </label>
            </div>
          </div>

          <div>
            <label for="accomodationDescription" class="block font-medium mb-1">Accommodation Description</label>
            <textarea id="accomodationDescription" name="accomodation_description" rows="3" class="w-full border p-2 rounded" placeholder="Tell us more about your preferred stay..."></textarea>
          </div>

          <!-- Transportation -->
          <div>
            <label class="block font-medium mb-1">Should we book your transportation?</label>
            <div class="flex gap-4">
              <label class="flex items-center gap-2">
                <input type="radio" name="book_transportation" value="1" class="accent-green-700"> Yes
              </label>
              <label class="flex items-center gap-2">
                <input type="radio" name="book_transportation" value="0" class="accent-green-700"> No
              </label>
            </div>
          </div>

          <div>
            <label for="transportationDescription" class="block font-medium mb-1">Transportation Description</label>
            <textarea id="transportationDescription" name="transportation_description" rows="3" class="w-full border p-2 rounded" placeholder="How would you like to be transported?"></textarea>
          </div>

          <!-- Agent Code -->
          <div>
            <label for="agentCode" class="block font-medium mb-1">Agent Code</label>
            <input type="text" id="agentCode" name="agent_code" placeholder="Enter agent's code" class="w-full border p-2 rounded" required>
          </div>

          <div>
            <button type="submit" name="confirm-request" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2 rounded shadow">
              Submit Booking Request
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>

</body>
</html>
