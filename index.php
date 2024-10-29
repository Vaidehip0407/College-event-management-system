<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMS</title>
  <script src="assets/jquery-3.5.1.js"></script>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>


<script>
  // $(document).ready(function(){
	// 		$(".card").hide();  
	// 			$("#viewPlansBtn").click(function(){
	// 			$(".card").toggle(500);
	// 		});
  //       });
     
        $(document).ready(function()
        {
            setInterval(function()
            {
                $("#h2").fadeOut(500).fadeIn(500)
            },1000);
        });
</script>



<body>
 

<header class="header"  data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
      <a href="#home" class="header-link"><h1> College Event Management System</h1></a>
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

         
          <li>
            <a href="registration.php" class="navbar-link" data-nav-link>New User</a>
          </li>
          <li>
            <a href="login.php" class="navbar-link" data-nav-link>Login</a>
          </li>

        </ul>
      </nav>
        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>
     </div>
  </header>

 <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id = "head">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title" id="h2">Life is an event. Make it memorable.</h2>

            <p class="hero-text"> 
        SolomonIT-2K25
            </p>
            
          </div>

          <div class="hero-banner">
          <img src=".\assets\img\img2.jpg" alt="" height=80% width=100% weight=50%>
          </div>
       </div>
      </section>

     <!-- 
        - #FEATURED CAR
      -->

      <section  id = "get-" class="section get-start">
        <div class="container">
       </div>
      </section>
      <!-- 
        - #BLOG
      -->
    </article>
  </main>
 <!-- 
    - #FOOTER
  -->
 <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>