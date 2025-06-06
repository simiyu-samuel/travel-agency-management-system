<!DOCTYPE html>
<html>
  <head>
    <title>Discover Kenya</title>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
  </head>
  <body>
    <!--------------------------------HEADER HTML---------------------------------------------->
    <div class="header-container">
      <video autoplay loop muted plays-inline class="background-video">
        <source src="Images/background-video.mp4" type="video/mp4">
      </video>

      <nav>
        <!--Inline css styled for the Arnachy Adventures logo-->
        <a href="#" class="logo" style="font-family: 'Poppins', sans-serif; font-size: 24px; color: #fff; text-decoration: none;">Anarchy Adventures</a>
          
        <ul>
          <li><a href="../Client-Interfaces/experiences2.php">EXPERIENCES</a></li>
          <li><a href="../Client-Interfaces/contact-us2.php">CONTACT US</a></li>
          <li><a href="../Index/index.php">LOG OUT</a></li>
          <li style="color:white;">  
            <?php  include("../Processes/login-process.php"); ?><?php  echo $_SESSION['client_email']; ?>
          </li>
        </ul>
      </nav>

      <div class="description">
        <h1>Experience Kenya's beauty</h1>
        <br>
        <h2>Access your dashboard to make a booking request</h2>
        <br>
        <a href="../Client-Interfaces/client-dashboard-home.php">DASHBOARD</a>
      </div>
    </div>
    <!----------------------------------------------------------------------------------->

    <!------------------------------------BENEFITS LIST------------------------------------------->
    <div class="benefits-list">
      <div class="benefit">
        <img class="benefit-icon" src="Images\destination-icon.png" alt="Destinaton icon">
        <h3>Spectacular Destinations</h3>
        <p class="benefit-1">
          From the sandy beaches to the diverse wildlife, Kenya's attractions are sure to amaze.
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\discount-icon.png" alt="Destinaton icon">
        <h3>Offers & Discounts</h3>
        <p class="benefit-2">
          We offer various seasonal offers and discounts to ease travel costs.
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\support-icon.png" alt="Destinaton icon">
        <h3>Amazing Customer Support</h3>
        <p class="benefit-3">
          Our highly trained team of travel agents are always ready to assist you with your booking related issues. 
        </p>
      </div>
      <div class="benefit">
        <img class="benefit-icon" src="Images\booking-logo.png" alt="Destinaton icon">
        <h3>Easy bookings</h3>
        <p class="benefit-4">
          All you need to do is tell us where you want to go and stay and we'll handle the rest.
        </p>
      </div>
    </div>
    <!----------------------------------------------------------------------------------->
   
 <!----------------------Attractions gallery (Anarchy Adventures Themed)-------------------------------------------->
    <div class="gallery-container-anarchy"> <!-- Added -anarchy to class name -->
      <h1>Glimpses of Your Next Adventure</h1> <!-- Updated Title -->
      <div class="gallery-grid-anarchy"> <!-- Added -anarchy and a grid wrapper -->

        <div class="gallery-item-anarchy"> <!-- Added -anarchy -->
          <div class="gallery-image-anarchy"> <!-- Added -anarchy -->
            <img src="images/maasai-mara-balloons.jpg" alt="Sky-High Safaris"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Sky-High Safaris</div> <!-- Added -anarchy -->
        </div>

        <div class="gallery-item-anarchy">
          <div class="gallery-image-anarchy">
            <img src="images/maasai-tourist.jpg" alt="Cultural Encounters"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Cultural Encounters</div>
        </div>

        <div class="gallery-item-anarchy">
          <div class="gallery-image-anarchy">
            <img src="images/fort-jesus.jpg" alt="Historical Journeys"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Historical Journeys</div>
        </div>

        <div class="gallery-item-anarchy">
          <div class="gallery-image-anarchy">
            <img src="images/mombasa-serena.jpg" alt="Scenic Retreats"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Scenic Retreats</div>
        </div>

        <div class="gallery-item-anarchy">
          <div class="gallery-image-anarchy">
            <img src="images/mombasa-camel.jpg" alt="Coastal Escapes"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Coastal Escapes</div>
        </div>

        <div class="gallery-item-anarchy">
          <div class="gallery-image-anarchy">
            <img src="images/mountain-bongo-laikipia.jpg" alt="Wildlife Discoveries"> <!-- Standardized image path -->
          </div>
          <div class="gallery-description-anarchy">Wildlife Discoveries</div>
        </div>
      </div>
    </div>

    <div class="attractions-link"><a href="../Client-Interfaces/experiences.php">Explore</a></div>
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
