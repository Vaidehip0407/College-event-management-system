<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <div class="container">
        <form  method="POST">
            <h1>College Event Form</h1>
            <h2>Register Here</h2>
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="full_name">Address:</label>
            <input type="text" id="full_name" name="full_name">
            <br>
            
            <br>   <input type="submit" value="Register" name="submit" >
       </form><br>
            <input type="submit" onclick="window.location.href='login.php'" value="Back to Login">
          
    </div>

    <?php
// Include database connection and registration logic here
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["full_name"];
    $age = $_POST["phone_number"];

   $sql = "INSERT INTO `user_master`( `user_name`, `user_email`, `user_password`, `user_address`, `user_age`) VALUES ('$username','$email','$password','$address','$age')";
$res = mysqli_query($conn,$sql);
if($res){
   echo '<script>alert("Registration Successfully");window.location.href="login.php"</script>';
}

}
?>
</body>
</html>
