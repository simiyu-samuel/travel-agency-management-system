<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>M-PESA Verification Failed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16a34a' // Your green theme
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

  <div class="bg-white max-w-md w-full p-8 rounded-xl shadow-md text-center">
    <h2 class="text-xl font-bold text-red-600 mb-4">M-PESA payment verification failed.</h2>
    <p class="text-gray-700 mb-6">
      An error occurred while confirming your M-PESA payment.<br />
      Kindly confirm that you entered the correct confirmation details and try again.
    </p>
    <a href="client-payments.php"
       class="inline-block bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
      Try again
    </a>
  </div>

</body>
</html>
