<?php include "navbar.php";
include "config.php";
?><br><br>
<section class="section featured-car" id="featured-car">
  <div class="container">

    <br>

    <div class="title-wrapper">
      <h2 class="h2 section-title"> Events </h2>

      <a href="#" class="featured-car-link">
        <span>View more</span>

        <ion-icon name="arrow-forward-outline"></ion-icon>
      </a>
    </div>

    <ul class="featured-car-list">
      <?php
      
  




      $sql = "SELECT * FROM event_master";

$sr =1;
$res = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($res)) {


      ?>


        <li>
          <div class="featured-car-card">

            <figure class="card-banner"><img src="admin/<?php echo $row['loc'];?>" alt="" loading="lazy" width="440" height="300" class="w-100"></figure>

            <div class="card-content">

              <div class="card-title-wrapper">
                <h3 class="h3 card-title">
                  <?php echo $row['event_name']; ?>
                </h3>

                <data class="year" value="2021"><?php echo $row['event_date']; ?></data>
              </div>

            
              <ul class="card-list">

                <li class="card-list-item">
                  <ion-icon name="people-outline"></ion-icon>

                  <span class="card-item-text"><?php echo $row['event_location']; ?></span>
                </li>

                <li class="card-list-item">
                  <ion-icon name="flash-outline"></ion-icon>

                  <span class="card-item-text"><?php echo $row['event_time']; ?></span>
                </li>

                <li class="card-list-item">
                  <ion-icon name="speedometer-outline"></ion-icon>

                  <span class="card-item-text"><?php echo $row['event_description']; ?></span>
                </li>

                <li class="card-list-item">
                  <ion-icon name="speedometer-outline"></ion-icon>

                  <span class="card-item-text">First Prize :- <strong><?php echo $row['f_prize']; ?></strong></span>
                </li>
                <li class="card-list-item">
                  <ion-icon name="speedometer-outline"></ion-icon>

                  <span class="card-item-text">Second Prize :- <strong> <?php echo $row['s_prize']; ?></strong></span>
                </li>
                <li class="card-list-item">
                  <ion-icon name="speedometer-outline"></ion-icon>

                  <span class="card-item-text">Third Prize :- <strong><?php echo $row['t_prize']; ?></strong></span>
                </li>
              </ul>

              <div class="card-price-wrapper">

                <p class="card-price">
                  <strong>₹<?php echo $row['event_charges']; ?></strong> / Day
                </p>

               <?php 
               $roww = $row['event_id'];
               $rent = $row['event_charges'];
               ?>
<br>
                <button class="btn" onclick="window.location.href='form.php?id=<?php echo $roww;?>&rent=<?php echo $rent;?>' " >Bookking For Participation</button><br>
             <!-- &nbsp;  <button class="btn btn-small" onclick="window.location.href='form3.php?id=<?php echo $roww;?>&rent=<?php echo $rent;?>' " >Bookking For Audience</button> -->
              </div>

            </div>

          </div>
        </li>

      <?php 
      if($sr===6){
        $sr=1;
      }
      $sr++;
      
      } ?>

    </ul>

  </div>
</section>
</body