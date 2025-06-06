<?php
session_start();
require("../Processes/DBCONNECT.php");

if (!isset($_POST['agent_id'])) {
    header('Location: Admin_test.php'); // redirect if no agent id posted
    exit;
}

$agent_id = intval($_POST['agent_id']);

$sql = "SELECT * FROM agents WHERE agent_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $agent_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    $_SESSION['error'] = "Agent not found.";
    header('Location: view_agent_test.php');
    exit;
}

$data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Agent</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body class="bg-green-50 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-green-700 text-white flex justify-between items-center px-6 py-4 shadow">
    <div class="text-2xl font-bold">Dashboard</div>
    <div class="account">
      <h4><?php echo htmlspecialchars($_SESSION['admin_email'] ?? ''); ?></h4>
    </div>
  </header>

  <div class="flex flex-1">
    <!-- Sidebar -->
    <nav class="w-56 bg-green-900 text-green-200 min-h-screen p-4">
      <a href="Admin_test.php" class="block py-2 px-4 rounded hover:bg-green-700">Home</a>
      <a href="add_agent_test.php" class="block py-2 px-4 rounded hover:bg-green-700">Add Agent</a>
      <a href="view_agent_test.php" class="block py-2 px-4 rounded bg-green-700 font-semibold">View Agent</a>
      <a href="new_clients.php" class="block py-2 px-4 rounded hover:bg-green-700">View New Clients</a>
      <a href="view_client_test.php" class="block py-2 px-4 rounded hover:bg-green-700">View Client</a>
      <a href="admin-login.php" class="block py-2 px-4 mt-10 rounded bg-red-700 hover:bg-red-600 text-white font-semibold">Log out</a>
    </nav>
    

    <!-- Main content -->
    <main class="flex-1 p-10">
      <h2 class="text-3xl font-bold text-green-900 mb-8">Edit Agent</h2>

      <?php if (isset($_SESSION['error'])): ?>
        <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
          <?php
            echo htmlspecialchars($_SESSION['error']);
            unset($_SESSION['error']);
          ?>
        </div>
      <?php endif; ?>

      <form action="editagentprocess.php" method="POST" class="max-w-lg bg-white p-8 rounded-lg shadow-md space-y-6">

        <input type="hidden" name="hiddenagent_id" value="<?php echo $agent_id; ?>" />

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_id">Agent ID</label>
          <input
            type="text"
            id="agent_id"
            name="agent_id"
            value="<?php echo htmlspecialchars($data['agent_id']); ?>"
            readonly
            class="w-full px-4 py-2 border border-green-300 rounded bg-green-100 cursor-not-allowed"
          />
        </div>

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_code">Code</label>
          <input
            type="text"
            id="agent_code"
            name="agent_code"
            value="<?php echo htmlspecialchars($data['agent_code']); ?>"
            required
            maxlength="6"
            class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
          />
        </div>

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_fname">First Name</label>
          <input
            type="text"
            id="agent_fname"
            name="agent_fname"
            value="<?php echo htmlspecialchars($data['agent_fname']); ?>"
            required
            class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
          />
        </div>

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_lname">Last Name</label>
          <input
            type="text"
            id="agent_lname"
            name="agent_lname"
            value="<?php echo htmlspecialchars($data['agent_lname']); ?>"
            required
            class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
          />
        </div>

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_phonenumber">Phone Number</label>
          <input
            type="text"
            id="agent_phonenumber"
            name="agent_phonenumber"
            value="<?php echo htmlspecialchars($data['agent_phonenumber']); ?>"
            required
            pattern="\d{10,12}"
            title="Phone number must be 10 to 12 digits"
            class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
          />
        </div>

        <div>
          <label class="block text-green-800 font-semibold mb-1" for="agent_email">Email</label>
          <input
            type="email"
            id="agent_email"
            name="agent_email"
            value="<?php echo htmlspecialchars($data['agent_email']); ?>"
            required
            class="w-full px-4 py-2 border border-green-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600"
          />
        </div>

        <button
          type="submit"
          class="w-full bg-green-700 text-white py-3 rounded-lg font-semibold hover:bg-green-800 transition"
        >
          Save Changes
        </button>
      </form>
    </main>
  </div>
</body>
</html>
