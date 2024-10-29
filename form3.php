<?php include "navbar.php";
include "config.php";
$eventid = $_GET['id'];

$rent = $_GET['rent'];



?>
   <!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>    <br><br><br><br>
    <div class="container">
    <h1>Bookking Form for Audience</h1><br>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="from_date">Viewer Name:</label>
                        <input type="text" id="from_date" name="a_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="from_date">Members:</label>
                        <input type="text" id="from_date" name="members" class="form-control" required>
                    </div>

                    
                    <div class="form-group">
                        <label for="pickup_address">Address:</label>
                        <input type="text" id="pickup_address" name="addrress" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="pickup_address">Phone number:</label>
                        <input type="text" id="pickup_address" name="number" class="form-control" required>
                    </div>
            </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
   
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a_name = $_POST['a_name'];
$members=$_POST['members'];
$address=$_POST['addrress'];
$Phone_num=$_POST['number'];

    // Calculate days and total amount
   


   
$sql = "INSERT INTO `audience`( `event_id`, `name`,`members`, `address`, `phone`) VALUES ('$eventid','$a_name ','$members','$address','$Phone_num')";  


    if (($conn->query($sql) === TRUE)) {
      
       echo "<script>alert('insert sucessfully');
       window.location.href='services.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

