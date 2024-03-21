<?php 
//insert data from the user to the database
//connect to DB

     include 'Connection.php';

        if($_SERVER['REQUEST_METHOD']== 'POST') {
            //Pick data user has entered
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $Room_no = $_POST['Room_No'];
           //query to insert user data
            $sql = "INSERT INTO resident(FirstName,Other_Name,Room_No) VALUES('$FirstName', '$Other_Name','$Room_No',)";
            //execute query
            $result = mysqli_query($connect,$sql);
    if($result){
    echo"<br>Registered successfully";
}else{
    //mysqli_error()
    die(mysqli_error($connect));
}


}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
</head>
<body>
      <form>
        <div>
        <label> First Name: </label>
        <input type="text" name="firstname">
    </div>
    <div>

       <label> Last Name: </label>
      <input type="text" name="lastname">
</div>
<div>
       <label>Room Number </label>
       <input type="Nummber" name="Room_No">
</div>
      

<input type="submit" name="register" value="Register">

 </form>
</body>
</html>
