<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arnachy Adventures Contact us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-800">

  <section class="max-w-6xl mx-auto py-12 px-4">
    
    <!-- Logged-in header -->
    <div class="flex justify-end items-center space-x-4 text-sm text-gray-700 mb-4">
      <span class="text-green-700 font-medium">
        <?php include("../Processes/login-process.php"); ?>
        Logged in as: <?= $_SESSION['client_email']; ?>
      </span>
    </div>

    <!-- Title and intro -->
    <div class="text-center mb-10">
      <h2 class="text-4xl font-bold text-green-800 mb-4">CONTACT US</h2>
      <p class="text-gray-600 leading-relaxed">
        We would love to hear from you!<br>
        Have any comments, complaints, or suggestions?<br>
        Find our Email, contacts and location below.
      </p>
    </div>

    <!-- Contact section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white shadow-lg rounded-lg p-6">
      
      <!-- Contact Info -->
      <div class="space-y-6">
        <div class="flex items-start space-x-4">
          <i class="fa-solid fa-location-dot text-green-700 text-xl mt-1"></i>
          <div>
            <h3 class="text-lg font-semibold">Address</h3>
            <p>Nairobi, Kenya<br></p>
          </div>
        </div>

        <div class="flex items-start space-x-4">
          <i class="fa-solid fa-phone text-green-700 text-xl mt-1"></i>
          <div>
            <h3 class="text-lg font-semibold">Phone</h3>
            <p>(+254) 772 332 952<br>(+254) 772 332 952</p>
          </div>
        </div>

        <div class="flex items-start space-x-4">
          <i class="fa-solid fa-envelope text-green-700 text-xl mt-1"></i>
          <div>
            <h3 class="text-lg font-semibold">Email</h3>
            <p>info@arnachyadventures.co.ke</p>
          </div>
        </div>

        <div>
          <a href="../Index/index2.php" class="inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800 transition">
            HOME
          </a>
        </div>
      </div>

      <!-- Contact Form -->
      <div>
        <form action="#" method="post" class="space-y-6">
          <h2 class="text-2xl font-bold text-green-700 mb-4">Send Message</h2>

          <div>
            <label class="block text-sm font-medium mb-1">Full Name</label>
            <input type="text" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Message</label>
            <textarea rows="5" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
          </div>

          <div>
            <input type="submit" value="Send" class="bg-green-700 text-white px-6 py-2 rounded cursor-pointer hover:bg-green-800 transition" />
          </div>
        </form>
      </div>

    </div>
  </section>

</body>
</html>
