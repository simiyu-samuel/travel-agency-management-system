<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - Add Agent</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

  <!-- Header -->
  <header class="flex items-center justify-between bg-green-700 text-white px-6 py-4 shadow">
    <div class="text-2xl font-extrabold tracking-wide">Dashboard</div>
    <div class="account text-sm">
      <h4>
        <?php 
          include("../Processes/admin-login-process.php"); 
          echo htmlspecialchars($_SESSION['admin_email']); 
        ?>
      </h4>
    </div>
  </header>

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="bg-green-800 text-green-100 w-56 p-6 flex flex-col space-y-4">
      <a href="Admin_test.php" class="hover:bg-green-600 rounded px-3 py-2">Home</a>
      <a href="#" class="bg-green-600 rounded px-3 py-2 font-semibold shadow">Add Agent</a>
      <a href="view_agent_test.php" class="hover:bg-green-600 rounded px-3 py-2">View Agent</a>
      <a href="new_clients.php" class="hover:bg-green-600 rounded px-3 py-2">View New Clients</a>
      <a href="view_client_test.php" class="hover:bg-green-600 rounded px-3 py-2">View Client</a>
      <a href="admin-login.php" class="mt-auto bg-red-600 hover:bg-red-700 rounded px-3 py-2 text-center">Log out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <h2 class="text-3xl font-bold text-green-800 mb-8">Add New Agent</h2>
      <?php

if (isset($_SESSION['error'])) {
    echo '<div class="mb-6 p-4 bg-red-100 text-red-700 rounded">' . htmlspecialchars($_SESSION['error']) . '</div>';
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo '<div class="mb-6 p-4 bg-green-100 text-green-700 rounded">' . htmlspecialchars($_SESSION['success']) . '</div>';
    unset($_SESSION['success']);
}
?>


      <form action="add_agent_process.php" method="POST" autocomplete="off" class="max-w-lg bg-white p-8 rounded-lg shadow-md space-y-6">

        <div>
          <label for="agent_code" class="block mb-2 font-semibold text-green-700">Agent Code (6 chars)</label>
          <input 
            type="text" 
            id="agent_code" 
            name="agent_code" 
            maxlength="6" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <div>
          <label for="agent_fname" class="block mb-2 font-semibold text-green-700">First Name</label>
          <input 
            type="text" 
            id="agent_fname" 
            name="agent_fname" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <div>
          <label for="agent_lname" class="block mb-2 font-semibold text-green-700">Last Name</label>
          <input 
            type="text" 
            id="agent_lname" 
            name="agent_lname" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <div>
          <label for="agent_phonenumber" class="block mb-2 font-semibold text-green-700">Phone Number</label>
          <input 
            type="tel" 
            id="agent_phonenumber" 
            name="agent_phonenumber" 
            maxlength="12" 
            pattern="[0-9]{10,12}" 
            placeholder="Digits only, e.g. 0712345678" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <div>
          <label for="agent_email" class="block mb-2 font-semibold text-green-700">Email</label>
          <input 
            type="email" 
            id="agent_email" 
            name="agent_email" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <div>
          <label for="agent_password" class="block mb-2 font-semibold text-green-700">Password</label>
          <input 
            type="password" 
            id="agent_password" 
            name="agent_password" 
            minlength="6" 
            required 
            class="w-full border border-green-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
          />
        </div>

        <button type="submit" class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-3 rounded-md transition">
          Add Agent
        </button>
      </form>
    </main>
  </div>
</body>
</html>
