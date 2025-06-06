<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Arnachy Adventures | Client Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .bg-overlay {
      background: rgba(0, 0, 0, 0.6);
    }
  </style>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('Images/safari.jpg')">
  <div class="flex items-center justify-center min-h-screen bg-overlay px-4">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl p-8 md:p-10">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Create Your Account</h2>
      <form action="../Processes/clientregistration-process.php" method="post" class="space-y-5">
        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label for="first_name" class="block mb-1 font-semibold text-gray-700">First Name</label>
            <input type="text" id="first_name" name="client_fname" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
          </div>
          <div>
            <label for="last_name" class="block mb-1 font-semibold text-gray-700">Last Name</label>
            <input type="text" id="last_name" name="client_lname" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label for="age" class="block mb-1 font-semibold text-gray-700">Age</label>
            <input type="number" id="age" name="age" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
          </div>
          <div>
            <label class="block mb-1 font-semibold text-gray-700">Gender</label>
            <div class="flex gap-6 mt-2">
              <label class="inline-flex items-center">
                <input type="radio" name="sex" value="Male" class="form-radio text-green-700" required>
                <span class="ml-2 text-gray-700">Male</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="sex" value="Female" class="form-radio text-green-700" required>
                <span class="ml-2 text-gray-700">Female</span>
              </label>
            </div>
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label for="national_id" class="block mb-1 font-semibold text-gray-700">National ID Number</label>
            <input type="text" id="national_id" name="national_id" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
          </div>
          <div>
            <label for="phone_number" class="block mb-1 font-semibold text-gray-700">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
          </div>
        </div>

        <div>
          <label for="email" class="block mb-1 font-semibold text-gray-700">Email</label>
          <input type="email" id="email" name="client_email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
        </div>

        <div>
          <label for="password" class="block mb-1 font-semibold text-gray-700">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-600 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-green-700 text-white py-2 px-4 rounded-lg hover:bg-green-800 transition duration-300">Register</button>

        <div class="text-center text-sm mt-4">
          <p>Already have an account? <a href="client-login.php" class="text-green-700 hover:underline">Log in</a></p>
          <p class="mt-2"><a href="../Index/index.php" class="text-gray-600 hover:underline">← Back to Home</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
