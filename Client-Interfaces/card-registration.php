<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.card.registration</title>
  <link rel="stylesheet" href="card-registration.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <h4><?php  include("../Processes/login-process.php"); ?><?php  echo $_SESSION['client_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
  <nav>
      <div class="side_navbar">
        <a href="client-dashboard-home.php">Home</a>
        <a href="share-experiences.php">Share experiences</a>
        <a class="active" href="#">Card registration</a>
        <a href="booking-request.php">Booking requests</a>
        <a href="booking-history-prompt.php">Booking history</a>
        <a href="invoice-prompt.php">Invoices</a>
        <a href="client-payments.php">Payment</a>
        <a href="itineraries-prompt.php">Itineraries</a>
        <a href="code-information-prompt.php">Code information</a>
        <a class="log-out-button" href="client-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Card registration</h2>
      <div class="payment-container">
        <h1>Enter your card details below:</h1>
        <br>
        <form action="../Processes/cardregistration-process.php" method="post">
          <div class="first-row">
              <div class="owner">
                  <h3>Client code</h3>
                  <div class="input-field">
                      <input type="text" id="clientCode" name="client_code" required>
                  </div>
              </div>
              <div class="owner">
                  <h3>Card Owner</h3>
                  <div class="input-field">
                      <input type="text" id="cardOwner" name="card_owner" required>
                  </div>
              </div>
              <div class="cvv">
                  <h3>CVV</h3>
                  <div class="input-field">
                      <input type="password" id="cvv" name="cvv" required>
                  </div>
              </div>
          </div>
          <div class="second-row">
              <div class="card-number">
                  <h3>Card Number</h3>
                  <div class="input-field">
                      <input type="text" id="cardNumber" name="card_number" required>
                  </div>
              </div>
          </div>
          <div class="third-row">
              <h3>Expiry date</h3>
              <div class="selection">
                  <div class="date">
                      <select name="expiry_month" id="month">
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select>
                        <select name="expiry_year" id="year">
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                        </select>
                  </div>
                  <div class="cards">
                      <img src="Images/mc.png" alt="mastercard">
                      <img src="Images/vi.png" alt="visa">
                      <img src="Images/pp.png" alt="paypal">
                  </div>
              </div>    
          </div>
          <button type="submit" name="register">Register</button>
        </form>
    </div> 
    </div>
  </div>
</body>
</html>
