<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arnachy Adventures Contact us</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800">

  <section class="py-12 px-4 sm:px-10 max-w-7xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-green-700 mb-4">CONTACT US</h2>
      <p class="text-lg text-gray-600">We would love to hear from you!<br>
        Do you have any comments, complaints, or suggestions? <br>
        Find our Email, contacts, and locations below.
      </p>
    </div>

    <div class="flex flex-col lg:flex-row gap-12">
      <!-- Contact Info -->
      <div class="flex-1 space-y-6">
        <div class="flex items-start gap-4">
          <div class="text-green-600 text-3xl"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <h3 class="text-xl font-semibold">Address</h3>
            <p>Nairobi, Kenya<br></p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="text-green-600 text-3xl"><i class="fas fa-phone"></i></div>
          <div>
            <h3 class="text-xl font-semibold">Phone</h3>
            <p>(+254) 772 332 952<br>(+254) 772 332 952</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="text-green-600 text-3xl"><i class="fas fa-envelope"></i></div>
          <div>
            <h3 class="text-xl font-semibold">Email</h3>
            <p>info@arnachyadventures.co.ke</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="flex-1 bg-white shadow-lg p-8 rounded-lg">
        <form>
          <h2 class="text-2xl font-bold mb-6 text-green-700">Send Message</h2>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Full Name</label>
            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" />
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Email</label>
            <input type="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" />
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Message</label>
            <textarea rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
          </div>

          <div>
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition-all">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>

</body>
</html>
