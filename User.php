<?php
  include 'Connection.php';
  $success = 0;
  $unsuccess = 0;
  if ($_SERVER['REQUEST_METHOD']=='POST') {
  	$Username =$_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $PhoneNumber = $_POST['PhoneNumber'];
    //hash user password - password_hash()
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    //check if email is already in the db
    $mysql = "SELECT * FROM pennywise WHERE email='$email'";
    $myresult = mysqli_query($connect, $mysql);
    if ($myresult) {
      // check if there is any record from executing the query
      //mysqli_num_rows()
      if (mysqli_num_rows($myresult)>0) {
        //echo "Email already exists"; //not successful
        $unsuccess = 1;
      } else{
        $sql = "INSERT INTO user(email, password, PhoneNumber) VALUES('$email','$password_hash','$PhoneNumber')";
        $result = mysqli_query($connect, $sql);
       
        if ($result) {
    // Redirect to the login page after successful signup
    header("Location: Login.php");
    exit();
}
      }
    }


    
  }




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign UP</title>
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
	<img src="building.jpg" width="1000" height="700" >
  <div  class="container">
	<h1>Sign Up</h1>

<form id="SignUpForm" method="post" class="container1">
	<div>
	<label>Username:</label>
	<input type="name" name="Username" id="Username" placeholder=" Enter Username" >
</div>
<div>
	<br>
	<label>Email:</label>
	<input type="email" name="email" id="email" placeholder="Enter your email">
</div>
<div>
	<br>
	<label>Password:</label>
	<input type="password" name="password" placeholder="Please enter a Password" id="password">
</div>
<br>
<div>
	<label>Confirm Password:</label>
	<input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Please confirm your Password">
</div>
<div>
	<br>
	<label>Phone Number:</label>
	<input type="number" name="PhoneNumber" id="PhoneNumber" placeholder="Enter your PhoneNumber">
</div>
<?php
    if ($unsuccess) {
      echo "<div class='error'>Email already exists!</div>";
    }
    if ($success) {
      echo "<div class='error'>Signup successful</div>";
    }
  ?>
<button class="button">SignUp</button>
</form>
<div>Already have an account?
	<a href="logIn.php">LogIn</a>
</div>



</body>
</html>

