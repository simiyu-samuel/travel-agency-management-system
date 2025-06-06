<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Experiences | Arnachy Adventures</title>
  <link rel="stylesheet" href="experiences.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
  <style>
    .signature-font {
      font-family: 'Homemade Apple', cursive;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Navbar -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="logo" style="font-family: 'Poppins', sans-serif; font-size: 24px; color: #000; text-decoration: none;">Anarchy Adventures</a>
      <nav>
        <ul class="flex space-x-6 font-semibold text-sm md:text-base">
          <li><a href="../Index/index.php" class="hover:text-green-700 transition">HOME</a></li>
          <li><a href="client-login.php" class="hover:text-green-700 transition">LOGIN</a></li>
          <li><a href="#" class="text-green-700 border-b-2 border-green-700">EXPERIENCES</a></li>
          <li><a href="contact-us.php" class="hover:text-green-700 transition">CONTACT US</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Heading -->
  <section class="text-center px-6 py-12 bg-gradient-to-br from-green-50 to-green-100">
    <h1 class="text-3xl md:text-4xl font-bold text-green-700 mb-4">Share your experiences with the rest of Kenya</h1>
    <p class="text-gray-700 max-w-2xl mx-auto text-sm md:text-base">Here are some moments captured by our satisfied customers. Login to share your own moments.</p>
  </section>

  <!-- Gallery -->
  <section class="px-4 py-12 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Card template repeated -->
      <!-- Example Card -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/maasai-mara-balloons.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">13/04/2020</div>
          <div class="font-semibold text-green-700">Maasai Mara</div>
          <p class="text-gray-700 text-sm mt-1">We flew on balloons</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/kilimanjaro.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">02/03/2019</div>
          <div class="font-semibold text-green-700">Migori</div>
          <p class="text-gray-700 text-sm mt-1">Wow, I've never been so close!</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/maasai-tourists.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">20/10/2022</div>
          <div class="font-semibold text-green-700">Narok</div>
          <p class="text-gray-700 text-sm mt-1">Made some new friends</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/mara-lion.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">03/06/2021</div>
          <div class="font-semibold text-green-700">Maasai Mara</div>
          <p class="text-gray-700 text-sm mt-1">The king of the jungle</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/fort-jesus.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">05/06/2020</div>
          <div class="font-semibold text-green-700">Mombasa</div>
          <p class="text-gray-700 text-sm mt-1">Fort Jesus, so beautiful.</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/mombasa-camel.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">22/12/2022</div>
          <div class="font-semibold text-green-700">Lamu</div>
          <p class="text-gray-700 text-sm mt-1">A surprisingly smooth ride</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/mountain-bongo-laikipia.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">26/04/2022</div>
          <div class="font-semibold text-green-700">Laikipia</div>
          <p class="text-gray-700 text-sm mt-1">A mountain bongo: rare sighting</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/maasai.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">11/11/2021</div>
          <div class="font-semibold text-green-700">Maasai Mara</div>
          <p class="text-gray-700 text-sm mt-1">A happy maasai man</p>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
        <img src="Images/mombasa-art.jpg" alt="Experience" class="w-full h-48 object-cover">
        <div class="p-4">
          <div class="text-sm text-gray-500 mb-1">13/04/2020</div>
          <div class="font-semibold text-green-700">Diani</div>
          <p class="text-gray-700 text-sm mt-1">We bought a couple of these beauties</p>
        </div>
      </div>
    </div>
  </section>

       <!-------------------------------Footer-------------------------------------------->
    <footer class="footer">
      <div class="container">
        <div class="row"> 
          <div class="footer-col">
              <h4>Useful links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="../Client-Interfaces/client-registration.php">Sign up</a></li>
                <li><a href="../Client-Interfaces/client-login.php">Login</a></li>
                <li><a href="../Agent-Interfaces/agent-login.php">Management system</a></li>
              </ul>
          </div> 

          <div class="footer-col">
              <h4>Support</h4>
              <ul>
                <li><a href="../Client-Interfaces/FAQ.php">FAQs</a></li>
                <li><a href="../Client-Interfaces/contact-us.php"> Contact us</a></li>
                <li><a href="../Client-Interfaces/client-login.php">Booking requests</a></li>
                <li><a href="../Client-Interfaces/experiences.php">Experiences</a></li>
              </ul>
          </div> 
      
          <div class="footer-col">
              <h4>Affiliate links</h4>
              <ul>
                <li><a href="https://www.serenahotels.com/" target="_blank">Serena hotels</a></li>
                <li><a href="https://kenyatoursandsafaris.com/" target="_blank">Kenya tours</a></li>
                <li><a href="https://www.viator.com/Kenya-tours/Transfers-and-Ground-Transport/d801-g15" target="_blank">Viator</a></li>
                <li><a href="https://www.kenya-airways.com/ke/en/?gclid=EAIaIQobChMIpcfmvvXE-gIVk_t3Ch0oTw1EEAAYASAAEgL8qvD_BwE" target="_blank">Kenya Airways</a></li>
              </ul>
          </div> 
      
          <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>  
        </div>
      </div> 
    </footer>
</body>
</html>
