<?php
// Process booking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Save booking details to database or perform other actions
    // Here, we're just echoing a message
    echo "Booking confirmed for $name from $checkin to $checkout";
}
?>




<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rooms</title>
    <link rel="stylesheet" type="text/css" href="booking.css">
    <a href="Login.php">LogIn</a>
  <a href="booking.php">Booking</a>
  <a href="User.php">Sign Up</a>
</head>
<body>
     <h1>Welcome to our hostel website</h1>
     <p>Whether you are after a home away from home experience, luxury living, or simply getting down to the books, here, you will find everything you are looking for and more. The rooms are full furnished and ready for you to move in! So why not browse our features and book your accommodation now.</p>
     

     <h2>These are the key features at our residence</h2>
     <ol>
    <li>3 types of rooms</li>
    <li>Residents' Louge </li>
    <li>Free WIFI </li>
    <li>Study Area</li>
    <li>CCTV & 24/7 security</li>
    <li>Constant water supply</li>
 </ol>
 <div class="container">
    <img src="room1.jpg" width="250"><img src="twinroom.jpg" width="270"><img src="Premium.jpg" width="290">

 <h3>Select Your desired room:</h3>
 <select>
 <option>Premium Room</option>
 <option>Cluster Room</option>
 <option>Twin Room</option>
</select>
<form action="book.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter your Fullname">
            <label>Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email address">
            <label>Phone number:</label>
            <input type="number" name="number" id="number" required placeholder="Enter your PhoneNumber">
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required>
            <button type="submit">Book Now</button>
        </form>
        <div id="message"></div>
    </div>

</body>
</html>