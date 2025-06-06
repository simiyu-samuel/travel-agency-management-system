<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login Failed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a' // Tailwind green-600
          },
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white max-w-md w-full p-8 rounded-xl shadow-lg text-center">
    <h2 class="text-2xl font-bold text-red-600 mb-4">Login failed.</h2>
    <p class="text-gray-700 mb-6">
      An error occurred while logging you in. Please try again.
    </p>
    <a href="client-login.php"
       class="inline-block bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
      Try again
    </a>
  </div>

</body>
</html>
