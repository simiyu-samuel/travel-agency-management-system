<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Arnachy Adventures | Administrator Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .bg-overlay {
      background: rgba(0, 0, 0, 0.6);
    }
  </style>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('../Index/Images/admin.jpg')">
  <div class="flex items-center justify-center min-h-screen bg-overlay px-4">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-8 md:p-10">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Administrator Login</h2>
      <form action="../Processes/admin-login-process.php" method="post" class="space-y-5">
        <div>
          <label for="email" class="block mb-1 font-semibold text-gray-700">Email Address</label>
          <input type="text" id="email" name="admin_email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none"/>
        </div>
        <div>
          <label for="password" class="block mb-1 font-semibold text-gray-700">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none"/>
        </div>
        <div class="flex items-center justify-between text-sm text-gray-600">
          <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox mr-2"> Remember me
          </label>
        </div>
        <button type="submit" name="login" class="w-full bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition duration-300">Log In</button>
        <div class="text-center text-sm mt-4">
          <a href="../Index/index.php" class="text-gray-600 hover:underline">← Back to Home</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
