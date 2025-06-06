<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Notification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md text-center">
    <h2 class="text-2xl font-bold text-red-600 mb-4">Verification failed.</h2>
    <p class="text-gray-700 mb-6">
      An error occurred during verification of the code entered.<br>
      Kindly confirm that the code entered is valid and try again.
    </p>
    <a href="itineraries-prompt.php"
       class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors duration-200">
      Try again
    </a>
  </div>

</body>
</html>
