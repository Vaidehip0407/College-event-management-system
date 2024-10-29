<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_id']) || $_SESSION['loggedin'] !== true) {
  echo "<script>window.location.href='login.php'</script>";
    exit();
}else{
    $u_id = $_SESSION['user_id'];
  }
$sql = "SELECT * FROM user_master WHERE user_id = $u_id";


?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College Events</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
      <a href="#" class="header-link">SolomonIT-2K24</a>
      </a>

      

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="dashboard.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="services.php" class="navbar-link" data-nav-link>Events</a>
          </li>

         
          <li>
            <a href="profile.php" class="navbar-link" data-nav-link>Your account</a>
          </li>

          <li>
            <a href="participation.php" class="navbar-link" data-nav-link>Participation</a>
          </li>

          <!-- <li>
            <a href="service2.php" class="navbar-link" data-nav-link>Result</a>
          </li> -->
          
          <li>
            <a href="feedback_master.php" class="navbar-link" data-nav-link>Feed back</a>
          </li>

          <li>
            <a href="logout.php" class="navbar-link" data-nav-link>Logout</a>
          </li>

          <!-- <li>
          <a href="upcoming.php" class="navbar-link" data-nav-link>Upcoming Event</a>
          <li> -->
          
        </ul>
      </nav>

      
  <?php

        $res = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($res)) {
        echo $row['user_name'];
        }
?>

</div>
  </header>