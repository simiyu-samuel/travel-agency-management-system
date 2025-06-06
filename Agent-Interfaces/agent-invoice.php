<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itenarary</title>
   
    <link rel="stylesheet" href="make-booking.css">

</head>
<body>
<header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
        <h4></h4><?php  include("../Processes/agent-login-process.php"); ?><?php  echo $_SESSION['agent_email']; ?><h4></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="agentHome.php">Home</a>
        <a href="clients.php">Your Clients</a>
        <a  href="make-booking.php">Make Booking</a> 
        <a href="booking-requests.php">Booking Requests</a>
        <a href="booking-history.php">Booking history</a>
        <a  href="itinerary.php">Itinerary</a>
        <a class="active" href="agent-invoice.php">Invoice</a>
        <a class="log-out-button" href="../Index/index.php">Log out</a>
      </div>
    </nav>
    
    <div class="main-body">
     
      
<div class="top">
<div class="invoice" id="invoice-form">
            <h3>INVOICES</h3><br>
  <form action="">

    <label for="itenary id">Invoice Id</label>
    <input type="text" id="input_text" name="invoice id" style="width: 100%;"> <br>

    <label for="itenary id">Client Code</label>
    <input type="text" id="input_text" name="client code"style="width: 100%;"><br>
    <label for="itenary id">Flight Total</label>
    <input type="text" id="input_text" name="flight total" style="width: 100%;"><br>
    <label for="itenary id">Accomodation Total</label>
    <input type="text" id="input_text" name="accomodation total" style="width: 100%;"><br>
    <label for="itenary id">Transportation Total</label>
    <input type="text" id="input_text" name="transport total" style="width: 100%;"><br>
    <label for="itenary id">Service Total</label>
    <input type="text" id="input_text" name="service total" style="width: 100%;"><br>
    <label for="itenary id">Service Charge</label>
    <input type="text" id="input_text" name="service charge"  style="width: 100%;"><br>
    <label for="itenary id">SubtTotal</label>
    <input type="text" id="input_text" name="subtotal"  style="width: 100%;"><br><br>
    <input type="submit" value="Submit" id="button">

  </form>
</div>
</div>
</div>

</body>
</html>
