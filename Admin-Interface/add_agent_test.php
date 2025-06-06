<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-green-50 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-white py-4 px-6 flex justify-between items-center shadow-md">
    <h1 class="text-3xl font-extrabold tracking-wide">Dashboard</h1>
    <div class="text-sm font-medium uppercase tracking-wider">
      <h4>
        <?php include("../Processes/admin-login-process.php"); ?>
        <?php echo htmlspecialchars($_SESSION['admin_email']); ?>
      </h4>
    </div>
  </header>

  <!-- Container -->
  <div class="flex flex-1">
    <!-- Sidebar -->
    <nav class="w-64 bg-white shadow-md py-6 px-4 space-y-4">
      <a href="#" class="block py-3 px-5 rounded-md bg-green-600 text-white font-semibold hover:bg-green-700 transition">Home</a>
      <a href="add_agent.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">Add Agent</a>
      <a href="view_agent_test.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">View Agent</a>
      <a href="new_clients.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">View New Clients</a>
      <a href="view_client_test.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">View Client</a>
      <a href="admin-login.php" class="block py-3 px-5 rounded-md bg-red-600 text-white hover:bg-red-700 transition font-semibold">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h2 class="text-4xl font-extrabold text-green-800 mb-8 tracking-wide">Welcome to your Dashboard</h2>
      <div class="bg-white rounded-xl shadow-lg p-8 max-w-3xl mx-auto">
        <h3 class="text-2xl font-bold text-green-700 mb-4">Quick Tips to Get You Started</h3>
        <p class="text-green-900 mb-6 text-lg">
          Here are a few important tips to help you navigate your admin panel:
        </p>
        <ul class="list-disc list-inside space-y-3 text-green-800 text-lg">
          <li>You have been provided with the Admin Email address: <span class="font-semibold">admin@discoverykenya.co.ke</span> and the necessary access password.</li>
          <li>This email account will contain all client feedback and important notifications.</li>
        </ul>
        <p class="mt-8 text-green-900 font-semibold text-lg">
          Use the sidebar options to manage agents, clients, and other resources.
        </p>
      </div>
    </main>
  </div>

</body>
</html>
