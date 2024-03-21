<?php
  include"Connection.php";
  $unsuccess = 0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $UserName = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM resident WHERE email='$email'";
    $result = mysqli_query($connect,$sql);
    if($result){
      if (mysqli_num_rows($result)>0) {
        //check if passwords match
        //fetch the password hash from db
        $account = mysqli_fetch_assoc($result);
        $password_hash = $resident['Password'];
        //password_verify()- compares the hash password with the password the user has inputed 
        if(password_verify($password,$password_hash)){
          //echo "Login successful";
          //sessions - to store user data in varibles accross multiple pages 
          session_start();//start user session
          $_SESSION['email']= $email;
          $_SESSION['id'] = $resident['ID'];
          header("location:home.php");
        }else{
          $unsuccess = 1;
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
	<title>Register</title>
</head>
<body>
<h1>SignUp</h1>
        <form method="post">
          <div class="mb-3">
            <label>Username</label>
            <input type="name" name="UserName">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
      <button type="submit" class="btn btn-primary">SigUp</button>
</form>
  

 </form>
</body>
</html>
