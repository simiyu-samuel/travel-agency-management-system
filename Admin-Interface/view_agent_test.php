<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | View Agent</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Font Awesome CDN -->
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

  <div class="flex flex-1">
    <!-- Sidebar -->
    <nav class="w-64 bg-white shadow-md py-6 px-4 space-y-4">
      <a href="Admin_test.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">Home</a>
      <a href="add_agent.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">Add Agent</a>
      <a href="#" class="block py-3 px-5 rounded-md bg-green-600 text-white font-semibold" aria-current="page">View Agent</a>
      <a href="new_clients.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">View New Clients</a>
      <a href="view_client_test.php" class="block py-3 px-5 rounded-md text-green-700 hover:bg-green-100 transition">View Client</a>
      <a href="admin-login.php" class="block py-3 px-5 rounded-md bg-red-600 text-white hover:bg-red-700 transition font-semibold">Log Out</a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-8 overflow-x-auto">
      <h2 class="text-4xl font-extrabold text-green-800 mb-8 tracking-wide">View Agents</h2>
      <?php if (isset($_SESSION['success'])): ?>
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>


      <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
          <thead class="bg-green-600 text-white">
            <tr>
              <th class="py-3 px-6 text-left uppercase font-semibold text-sm">Code</th>
              <th class="py-3 px-6 text-left uppercase font-semibold text-sm">First Name</th>
              <th class="py-3 px-6 text-left uppercase font-semibold text-sm">Last Name</th>
              <th class="py-3 px-6 text-left uppercase font-semibold text-sm">Phone Number</th>
              <th class="py-3 px-6 text-left uppercase font-semibold text-sm">Email</th>
              <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Update</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require_once("agentdb.php");
              foreach ($test as $key => $value){
            ?>
            <tr class="border-b hover:bg-green-50 transition">
              <td class="py-4 px-6 text-green-900"><?php echo htmlspecialchars($value["agent_code"]); ?></td>
              <td class="py-4 px-6 text-green-900"><?php echo htmlspecialchars($value["agent_fname"]); ?></td>
              <td class="py-4 px-6 text-green-900"><?php echo htmlspecialchars($value["agent_lname"]); ?></td>
              <td class="py-4 px-6 text-green-900"><?php echo htmlspecialchars($value["agent_phonenumber"]); ?></td>
              <td class="py-4 px-6 text-green-900"><?php echo htmlspecialchars($value["agent_email"]); ?></td>
              <td class="py-4 px-6 text-center">
                <form action="editagent.php" method="POST" class="inline">
                  <input type="hidden" name="agent_id" value="<?php echo htmlspecialchars($value['agent_id']); ?>" />
                  <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition">
                    Update
                  </button>
                </form>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>
