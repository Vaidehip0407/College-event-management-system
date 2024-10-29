<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/style2.css ">
</head>
<body>
    <div class="container">
        <form  method="POST">
        <h1>College Event </h1>
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login" name="submit">
        </form><br>

 <input type="submit" value="Back to Home" onclick ="window.location.href='index.php'">  <input type="submit" onclick="window.location.href='registration.php'" value="Sign up">
    </div>

    <?php 
    session_start();
    include "config.php";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password=$_POST['password'];
    
    $uname = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn, $password);
   
    $sql = "SELECT * FROM user_master WHERE user_email ='$username' AND user_password = '$password'";
    $result = mysqli_query($conn, $sql); 
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
     // Check if a row is returned
    if (mysqli_num_rows($result) == 1) {
        // Start session
     while($row = mysqli_fetch_assoc($result)){
        $_SESSION['user_id'] = $row['user_id'];
        

     }
           // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
       
        
        // Free result set
        mysqli_free_result($result);
        
        // Close connection
        mysqli_close($conn);
        
        // Redirect to a welcome page or any desired page after successful login
       echo "<script>window.location.href='dashboard.php'</script>";
        exit();
    } else {
        // Close connection
        mysqli_close($conn);
        
        echo "<script>alert('Invalid username or password. Please try again.')
        window.location.href='login.php'
        </script>";
        exit();
    }}
?>


</body>
</html>
