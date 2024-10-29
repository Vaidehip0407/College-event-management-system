<?php include "navbar.php";
include "config.php";

$sql = "SELECT * FROM user_master WHERE user_id = $u_id";

$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {

  ?>


  <section class="section featured-car" id="featured-car">
    <div class="container">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


      <br>
      <div class="title-wrapper">
        <h2 class="h2 section-title">Profile</h2>
      </div>
      <center>
        <ul class="featured-car-list">
          <center>
            <li>
              <div class="featured-car-card">
                Name : <strong>
                  <?php echo $row['user_name']; ?>
                </strong><br><br>

                Address : <strong>
                  <?php echo $row['user_address']; ?>
                </strong><br><br>
                Email : <strong>
                  <?php echo $row['user_email']; ?>
                </strong>
                </div>
                <button class="btn" style="background-color:green;"
                          onclick="window.location.href='changepass.php' "> change password</button> 
            </li>
            </center>
          </ul>
</center>

<center><h1> Participation list</h1></center>
      <div class="row">
        
         
            <table class="table table-responsive">
            <div class="col-md-12">
              <tr>
              <th>Participation Name</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Location</th>
                <th>Time</th>
                <th>Description </th>
                <th>Actions</th>
              </tr>

              <?php
              $sql = "SELECT * FROM participate_master JOIN user_master on  user_master.user_id =   participate_master.user_id  JOIN event_master on  event_master.event_id =   participate_master.event_id WHERE participate_master.user_id = $u_id";

              $res = mysqli_query($conn, $sql);
              if (mysqli_num_rows($res) > 0) {
               
                while ($row = mysqli_fetch_assoc($res)) {
                  $rowwww = $row['participation_id'];
                  $roww = $row["user_id"]; ?>
                <br>
                    <h4>
                      <tr>
                      <td>
                        <?php echo $row['p_name']; ?>
                      </td>
                        <td>
                          <?php echo $row['event_name']; ?>
                        </td>
                    </h4>
                    <p>
                      <td>
                        <?php echo $row['event_date']; ?>
                      </td>
                    </p>
                    <p>
                      <td>
                        <?php echo $row['event_location']; ?>
                      </td>
                    </p>
                    <p>
                      <td>
                        <?php echo $row['event_time']; ?>
                      </td>
                    </p>
                    <p>
                      <td>
                        <?php echo $row['event_description']; ?>
                      </td>
                      <td> <button class="btn btn-sm" style="background-color:orange;"
                          onclick="window.location.href='updatep.php?id=<?php echo $rowwww; ?>' ">Update</button>
                      </td>
                      <td>
                        <button class="btn btn-sm" style="background-color:red;"
                          onclick="window.location.href='deleteparticipate.php?id=<?php echo $rowwww; ?>' ">Delete</button>
                      </td>
                    </p><br>
                    <hr>
                  
                  <?php
                }
                echo "</tr></table>";
              } else { ?>
                <h4>No previous Event Attended</h4>

                <?php
              }
              ?>
          </div>
        
      </div>
   </div>
  <?php } ?>
</section>
<?php
include "footer.php";
?>