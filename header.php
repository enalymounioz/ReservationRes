<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>EV Sushi Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="C:\xampp\htdocs\ReservationRes\css\w3.css">
<body>
    
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>EV</b> Sushi Restaurant</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php#reservation" class="w3-bar-item w3-button">Reservation</a>
      <a href="index.php#menu" class="w3-bar-item w3-button">Menu</a>     
    </div>
  </div>
</div>
    
    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/firstimage.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>EV</b></span> <span class="w3-hide-small w3-text-light-grey">Shushi Restaurant</span></h1>
  </div>
</header>