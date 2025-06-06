<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - View Clients</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a', // Green primary
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
    <h1 class="text-2xl font-semibold">Dashboard</h1>
    <div class="text-sm">
      <?php include("../Processes/admin-login-process.php"); ?>
      <span><?php echo $_SESSION['admin_email']; ?></span>
    </div>
  </header>

  <div class="flex min-h-screen">
    
    <!-- Sidebar -->
 
    <nav class="w-64 bg-green shadow-md py-6 px-4 space-y-4">
      <a href="#" class="block py-2 px-4 rounded-md bg-green-100 text-green-700 font-semibold">Home</a>
      <a href="add_agent.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">Add Agent</a>
      <a href="view_agent_test.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View Agent</a>
      <a href="new_clients.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View New Clients</a>
      <a href="view_client_test.php" class="block py-2 px-4 rounded-md hover:bg-green-50 text-gray-700">View Client</a>
      <a href="admin-login.php" class="block py-2 px-4 rounded-md bg-red-100 text-red-600 hover:bg-red-200 font-semibold">Log Out</a>
    </nav>
 

    <!-- Main Content -->
    <main class="flex-1 p-8">
      <h2 class="text-xl font-semibold text-dark mb-6">All Clients Assigned to Agents</h2>
      
      <div class="overflow-x-auto shadow rounded-lg">
        <table class="w-full table-auto text-sm text-left bg-white rounded-lg">
          <thead class="bg-primary text-white">
            <tr>
              <th class="px-4 py-3">First Name</th>
              <th class="px-4 py-3">Last Name</th>
              <th class="px-4 py-3">Age</th>
              <th class="px-4 py-3">Sex</th>
              <th class="px-4 py-3">National ID</th>
              <th class="px-4 py-3">Phone Number</th>
              <th class="px-4 py-3">Email</th>
              <th class="px-4 py-3">Code</th>
              <th class="px-4 py-3">Agent Assigned</th>
              <th class="px-4 py-3">Agent Code</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <?php
              require('../Processes/DBCONNECT.php');
              $sqli = "SELECT * FROM clients WHERE agent_assigned = '1'";
              $result = mysqli_query($conn, $sqli);
              $test = mysqli_fetch_all($result, MYSQLI_ASSOC);

              foreach ($test as $value) {
            ?>
              <tr class="border-b hover:bg-gray-100">
                <td class="px-4 py-2"><?php echo $value["client_fname"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["client_lname"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["age"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["sex"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["national_id"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["phone_number"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["client_email"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["client_code"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["agent_assigned"]; ?></td>
                <td class="px-4 py-2"><?php echo $value["agent_code"]; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>

  </div>
</body>
</html>
