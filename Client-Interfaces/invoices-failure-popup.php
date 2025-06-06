<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Notification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white rounded-lg shadow-lg max-w-md p-8 text-center">
    <h1 class="text-2xl font-bold text-red-600 mb-6">Verification failed.</h1>
    <p class="mb-8 text-gray-700 leading-relaxed">
      An error occurred during verification of the code entered. Kindly confirm that
      the code entered is valid and try again.
    </p>
    <a href="invoice-prompt.php"
       class="inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded hover:bg-green-700 transition">
       Try again.
    </a>
  </div>

</body>
</html>
