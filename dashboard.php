<?php
include "navbar.php";
include "config.php";

$sql = "SELECT * FROM user_master WHERE user_id = $u_id";

$res = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($res)) {

?>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id = "head">
        <div class="container">

          <div class="hero-content">
            <h3 class="h1 hero-title"> Welcome,<br><?php echo $row['user_name']; } ?> </h3>

            <p class="hero-text">
            College Event
            </p>
          </div>

          <div class="hero-banner">
            <img src="assets/imG/MKICS.jpg" alt="" height=80%>
          </div>
   </div>
      </section>
      <section  id = "get-" class="section get-start">
        <div class="container">

          <h2 class="h2 section-title">Get started with us</h2>


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
<?php 
include "footer.php";
?>

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