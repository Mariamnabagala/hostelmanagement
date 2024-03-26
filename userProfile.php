<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="booking.php">
</head>
<body>
    <div class="navbar-container">
    <ul class="navbar">
        <li><a href="home.php">Home</a></li>       
        <li><a href="User.php">Register</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="userProfile.php">Profile</a></li>
    </ul>
        </ul>
    </div>
    <div class="container">
        <h1>User Profile</h1>
        <?php
        // Check if username is set in the URL
        include 'Connection.php';

        if(isset($_GET['username'])) {
            $username = $_GET['username'];
            // Fetch user data from the database
            $sql = "SELECT * FROM profile WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
                echo "<p><strong>Phone Number:</strong> " . $row['phone_number'] . "</p>";
                echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
            } else {
                echo "User not found.";
            }
        } else {
            echo "Username not provided.";
        }
        ?>
    </div>
</body>
</html>
