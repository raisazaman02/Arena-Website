<!DOCTYPE html>
<html lang="en-us">

<!--==================================================================
//
// Page: Crisler Arena Tickets Page
// Description:
//   This web page enables a customer to order tickets for upcoming 
// events at Crisler Arena.
// 
//=================================================================-->

<head>
  
  <title>Ticket Confirmation Page, v4</title>
  <meta charset="UTF-8">
  <meta name="author" content="Dan Ouellette"/>
  <meta name="description" content="Crisler Arena"/>
  <meta name="keywords" content="arena, events">
  
  <!-- External CSS link -->
  <link rel="stylesheet" type="text/css" 
    href="CrislerArena-ExternalStyles.css">
  
  <!-- jQuery link -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  
  
</head>

<body>

 <!-- Header section -->
  <div class="headerPanel">
    <h1>
      Ticket Confirmation Page
    </h1>
  </div>

  <!-- Menu section -->
  <div class="menuPanel">
    <h2>
      <a href="CrislerArena-Arena.html">Arena Page</a>
      <a href="CrislerArena-Events.html">Events Page</a>
      <a href="CrislerArena-Tickets.html">Tickets Page</a>
    </h2>
  </div>
  <hr>
See you soon at our arena! Here are your ticket details: 
<br><br>
Customer name: <?php echo $_GET["txtCustomerName"]; ?><br>
Customer e-mail: <?php echo $_GET["txtCustomerEmail"]; ?><br>
Event: <?php echo $_GET["cmbEvent"]; ?><br>
Date: <?php echo $_GET["txtDate"]; ?><br>
Seat type: <?php echo $_GET["cmbSeatType"]; ?><br>
Ticket count: <?php echo $_GET["txtTickets"]; ?><br>
Seat cost ($): <?php echo $_GET["txtSeatCost"]; ?><br>
Subtotal ($): <?php echo $_GET["txtSubtotal"]; ?><br>
Tax ($): <?php echo $_GET["txtTax"]; ?><br>
Total ($): <?php echo $_GET["txtTotal"]; ?><br>
Payment type: <?php echo $_GET["rbTimeSlot"]; ?><br>
<br>
Administrative Use Only <br>

<?php
	 $name = $_GET["txtCustomerName"];
     $file_name = $name . '.sale';
	// Open the text file
	$f = fopen($file_name, "w");
?> 
File <?php echo $file_name ?> written to server. <br>
	<?php fwrite($f, $_GET["txtCustomerName"] . PHP_EOL );  
	fwrite($f, $_GET["txtCustomerEmail"] . PHP_EOL); 
	fwrite($f, $_GET["cmbEvent"] . PHP_EOL);
	fwrite($f, $_GET["txtDate"]. PHP_EOL);
	fwrite($f, $_GET["cmbSeatType"] . PHP_EOL); 
	fwrite($f, $_GET["txtTickets"] . PHP_EOL);
	fwrite($f, $_GET["txtSeatCost"] . PHP_EOL);
	fwrite($f, $_GET["txtSubtotal"] . PHP_EOL); 
	fwrite($f, $_GET["txtTax"] . PHP_EOL); 
	fwrite($f, $_GET["txtTotal"] . PHP_EOL); 
	fwrite($f, $_GET["rbTimeSlot"]);

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen($file_name, "r");
	fclose($f);

	?>

  <!-- Footer section -->
  <div class="footerPanel">
    <h3>
      Crisler Arena
      &nbsp;&nbsp;333 East Stadium Blvd, Ann Arbor, MI 48109, MI
      &nbsp;&nbsp;734-761-3355
      &nbsp;&nbsp;<a href="mailto:info@crislerarena-annarbor.com">Email Us!</a>
      &nbsp;&nbsp;Copyright &#169; 2021
    </h3>
  </div>
  
</body>
 
</html>
