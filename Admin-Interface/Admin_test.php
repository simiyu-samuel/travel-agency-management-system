<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-white py-4 px-6 flex justify-between items-center shadow-md">
    <h1 class="text-2xl font-semibold">Dashboard</h1>
    <div class="text-sm">
      <h4>
        <?php include("../Processes/admin-login-process.php"); ?>
        <?php echo $_SESSION['admin_email']; ?>
      </h4>
    </div>
  </header>

  <!-- Container -->
  <div class="flex flex-1">
    <!-- Sidebar -->
    <nav class="w-64 bg-white shadow-md py-6 px-4 space-y-4">
      <a href="#" class="block py-2 px-4 rounded-md bg-green-100 text-green-700 font-semibold">Home</a>
      <a href="add_agent.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">Add Agent</a>
      <a href="view_agent_test.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View Agent</a>
      <a href="new_clients.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View New Clients</a>
      <a href="view_client_test.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View Client</a>
      <a href="admin-login.php" class="block py-2 px-4 rounded-md bg-red-100 text-red-600 hover:bg-red-200 font-semibold">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Home</h2>
      <div class="bg-white p-6 rounded-xl shadow-lg space-y-4">
        <h1 class="text-xl font-semibold text-green-700">Welcome:</h1>
        <p class="text-gray-700">Here are a few tips to get you going:</p>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
          <li>You are provided with an Admin Email address: <b>admin@discoverykenya.co.ke</b> and the access password.</li>
          <li>The email account contains all client feedback.</li>
        </ul>
        <p class="text-gray-700">Click an option on the sidebar to get started.</p>
      </div>
    </main>
  </div>

</body>
</html>
