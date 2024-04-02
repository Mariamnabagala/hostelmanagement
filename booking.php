<?php
// Process booking
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["number"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Insert booking details into the database
    $sql = "INSERT INTO booking (booking_email, booking_number, check_in_date, check_out_date) 
            VALUES ('$email', '$phoneNumber', '$checkin', '$checkout')";
    
    if (mysqli_query($conn, $sql)) {
        // Booking inserted successfully
        echo "Booking confirmed for $name from $checkin to $checkout";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="booking.css">

</head>
<body>
    <div class="navbar-container">
    <ul class="navbar">
        <li><a href="home.php">Home</a></li>       
        <li><a href="User.php">Register</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="booking.php">Booking</a></li>
    </ul>
</div>
    <div class="container1">

    <img src="room1.jpg" >
    <p>premium room</p>
    <img src="twinroom.jpg" width="780">
    <p>twinroom</p>
    <img src="Premium.jpg" width="750">
    <p>premium room</p>
    <img src="cluster.jpg">
    <p>Cluster</p>

    <h3>Select Your desired room:</h3>
<select name="room"> <!-- Add name attribute -->
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