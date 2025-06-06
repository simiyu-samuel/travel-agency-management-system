<?php
include("../Processes/admin-login-process.php");
require_once("clientdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard - View New Clients</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-green-700 text-white flex flex-col px-6 py-8 space-y-4 shadow-lg">
    <div class="text-2xl font-bold mb-6">Dashboard</div>
    <nav class="flex flex-col space-y-2">
      <a href="Admin_test.php" class="hover:bg-green-600 p-2 rounded">Home</a>
      <a href="add_agent.php" class="hover:bg-green-600 p-2 rounded">Add Agent</a>
      <a href="view_agent_test.php" class="hover:bg-green-600 p-2 rounded">View Agent</a>
      <a href="#" class="bg-green-600 p-2 rounded font-semibold">View New Clients</a>
      <a href="view_client_test.php" class="hover:bg-green-600 p-2 rounded">View Client</a>
      <a href="admin-login.php" class="mt-auto bg-red-600 hover:bg-red-700 text-white text-center py-2 rounded">Log Out</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow px-8 py-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold text-green-700">View New Clients</h1>
      <div class="text-gray-600 font-medium">
        <?php echo $_SESSION['admin_email']; ?>
      </div>
    </header>

    <!-- Table -->
    <main class="p-8 overflow-x-auto">
      <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full table-auto text-sm text-left text-gray-600">
          <thead class="bg-green-600 text-white">
            <tr>
              <th class="px-4 py-2">First Name</th>
              <th class="px-4 py-2">Last Name</th>
              <th class="px-4 py-2">Age</th>
              <th class="px-4 py-2">Sex</th>
              <th class="px-4 py-2">National ID</th>
              <th class="px-4 py-2">Phone</th>
              <th class="px-4 py-2">Email</th>
              <th class="px-4 py-2">Code</th>
              <th class="px-4 py-2">Agent Assigned</th>
              <th class="px-4 py-2">Agent Code</th>
              <th class="px-4 py-2">Update</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <?php foreach ($test as $value): ?>
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-2"><?php echo $value["client_fname"] ?></td>
                <td class="px-4 py-2"><?php echo $value["client_lname"] ?></td>
                <td class="px-4 py-2"><?php echo $value["age"] ?></td>
                <td class="px-4 py-2"><?php echo $value["sex"] ?></td>
                <td class="px-4 py-2"><?php echo $value["national_id"] ?></td>
                <td class="px-4 py-2"><?php echo $value["phone_number"] ?></td>
                <td class="px-4 py-2"><?php echo $value["client_email"] ?></td>
                <td class="px-4 py-2"><?php echo $value["client_code"] ?></td>
                <td class="px-4 py-2"><?php echo $value["agent_assigned"] ?></td>
                <td class="px-4 py-2"><?php echo $value["agent_code"] ?></td>
                <td class="px-4 py-2">
                  <form action="editclient.php" method="POST">
                    <input type="hidden" name="client_id" value="<?php echo $value['client_id'] ?>" />
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-xs px-3 py-1 rounded">
                      Update
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

</body>
</html>
