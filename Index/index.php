<!DOCTYPE html>
<html>
  <head>
    <title>Anarchy Adventures - Your Next Adventure Awaits!</title>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- Embedded CSS for Gallery Section - Overrides External -->
    <style>
        /* Define Anarchy Adventure colors here if not already in :root of an external sheet that loads first,
           or redefine them here to ensure they are used for this section.
           For simplicity, I'll hardcode some colors based on our previous palette.
        */
        :root { /* This :root block in an embedded style might not behave as universally as in an external file */
          --gallery-primary-dark: #222831;
          --gallery-accent-color: #FF7F11;
          --gallery-background-light: #FFFFFF;
          --gallery-border-color: #DDDDDD;
          --gallery-shadow-color: rgba(0,0,0,0.07);
          --gallery-hover-shadow-color: rgba(0,0,0,0.1);
        }

        /* Specific targeting for the gallery to override external styles */
        /* You might need to make selectors more specific if external styles are strong */
        body .gallery-container-anarchy { /* Added -anarchy to make it unique */
            max-width: 1200px !important;
            margin: 60px auto !important; /* Adjusted margin */
            background-color: var(--gallery-background-light) !important;
            padding: 0 15px !important; /* Padding for spacing from edges */
            overflow: visible !important; /* Changed from auto for box-shadow visibility */
            font-family: 'Poppins', sans-serif !important; /* Ensure Poppins */
        }

        body .gallery-container-anarchy h1 {
            font-family: 'Poppins', sans-serif !important;
            padding-top: 0 !important;
            padding-bottom: 40px !important; /* Spacing after title */
            text-align: center !important;
            color: var(--gallery-primary-dark) !important;
            font-size: 32px !important; /* Slightly smaller for this context */
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 1px !important;
        }

        body .gallery-grid-anarchy { /* Added -anarchy */
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 20px !important; /* Space between items */
            justify-content: center !important;
        }

        body .gallery-item-anarchy { /* Added -anarchy */
            flex: 1 1 300px !important; /* Grow, shrink, base width */
            max-width: 360px !important; /* Max width of a card */
            border: 1px solid var(--gallery-border-color) !important;
            overflow: hidden !important;
            border-radius: 8px !important; /* More pronounced rounding */
            background-color: var(--gallery-background-light) !important;
            box-shadow: 0 3px 10px var(--gallery-shadow-color) !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
            display: flex !important; /* For vertical alignment if needed */
            flex-direction: column !important; /* Stack image and description */
        }

        body .gallery-item-anarchy:hover {
            transform: translateY(-6px) !important; /* Slightly more lift */
            box-shadow: 0 8px 20px var(--gallery-hover-shadow-color) !important;
        }

        body .gallery-item-anarchy .gallery-image-anarchy { /* Added -anarchy */
            width: 100% !important;
            height: 220px !important; /* Adjusted height */
            overflow: hidden !important; /* Clip image */
        }
        body .gallery-item-anarchy .gallery-image-anarchy img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important; /* Ensure image covers the area well */
            display: block !important; /* Remove any extra space below image */
            border-top-left-radius: 8px !important; /* Match card rounding */
            border-top-right-radius: 8px !important; /* Match card rounding */
        }

        body .gallery-item-anarchy .gallery-description-anarchy { /* Added -anarchy */
            font-size: 17px !important; /* Adjusted size */
            font-family: 'Poppins', sans-serif !important;
            color: var(--gallery-primary-dark) !important;
            font-weight: 600 !important;
            background-color: var(--gallery-background-light) !important;
            padding: 18px 15px !important; /* More padding */
            text-align: center !important;
            flex-grow: 1 !important; /* Allow description to fill space if needed */
            border-bottom-left-radius: 8px !important; /* Match card rounding */
            border-bottom-right-radius: 8px !important; /* Match card rounding */
        }

        /* Responsive adjustments specifically for this gallery */
        @media (max-width: 992px) {
            body .gallery-item-anarchy {
                flex-basis: calc(50% - 10px) !important; /* 2 items per row, accounting for 20px gap */
                max-width: calc(50% - 10px) !important;
            }
             body .gallery-container-anarchy h1 {
                font-size: 28px !important;
            }
        }

        @media (max-width: 600px) { /* Changed breakpoint for single column */
            body .gallery-item-anarchy {
                flex-basis: 100% !important; /* 1 item per row on small screens */
                max-width: 380px !important; /* Control max width even in single column */
                margin-left: auto !important; /* Center if single column */
                margin-right: auto !important; /* Center if single column */
            }
            body .gallery-container-anarchy h1 {
                font-size: 24px !important;
            }
            body .gallery-grid-anarchy {
                gap: 15px !important;
            }
        }
    </style>
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
          <li><a href="#">HOME</a></li>
          <li><a href="../Client-Interfaces\client-login.php">LOGIN</a></li>
          <li><a href="../Client-Interfaces/experiences.php">EXPERIENCES</a></li>
          <li><a href="../Client-Interfaces/contact-us.php">CONTACT US</a></li>
        </ul>
      </nav>

      <div class="description">
        <h1>Experience Kenya's beauty</h1>
        <br>
        <h2>Create an account, make a booking request and leave the rest to us.</h2>
        <br>
        <a href="../Client-Interfaces/client-registration.php">SIGN UP</a>
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

    <div class="attractions-link"><a href="../Client-Interfaces/experiences.php">Explore All Adventures</a></div>
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