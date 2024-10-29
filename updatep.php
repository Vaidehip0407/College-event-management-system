<?php include "navbar.php";
include "config.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM participate_master join event_master on event_master.event_id = participate_master.event_id WHERE participation_id ='$id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){

?>
   <!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Update Participate</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="from_date">Name</label>
                        <input type="text" id="from_date" value="<?php echo $row['event_name'];?>" name="model" class="form-control" required readonly >
                    </div>
                    <div class="form-group">
                        <label for="to_date">Description</label>
                        <input type="text" id="to_date" name="type" value = "<?php echo $row['event_description'];?>" class="form-control" required readonly >
                    </div>
                    <div class="form-group">
                        <label for="rate_per_day">Date</label>
                        <input type="date" id="rate_per_day" name="year" value = "<?php echo $row['event_date'];?>" class="form-control" required readonly >
                    </div>
                    
            </div>
            <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="rate_per_day">Location :</label>
                        <input type="text" id="rate_per_day" value = "<?php echo $row['event_location'];?>" name="color" class="form-control" required readonly >
                    </div>
                    <div class="form-group">
                        <label for="rate_per_day">Time</label>
                        <input type="time" id="rate_per_day" value = "<?php echo $row['event_time'];?>" name="rate_per_day" class="form-control"  required readonly >
                    </div>

                    <div class="form-group">
                        <label for="rate_per_day">Participation name </label>
                        <input type="text" id="rate_per_day" name="p_name" value = "<?php echo $row['p_name'];?>" class="form-control" required >
                    </div>
                   
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['model'];
    $desc = $_POST['type'];
    $date = $_POST['year'];
    $loc = $_POST['color'];
    $charge = $_POST['mileage'];
   $p_name =$_POST['p_name'];
    $time = $_POST["rate_per_day"];
 
    // Calculate days and total amount
 
   
    if (isset($_FILES['note'])) {
        $t = time();
        $target = "images/" .date('d,m,y'.$t). $_FILES["note"]["name"];
        move_uploaded_file($_FILES["note"]["tmp_name"], $target);
    }
   

    $sql = "UPDATE `participate_master` SET `p_name`='$p_name'
     WHERE  `participation_id`='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Added  Succesfully'); 
        window.location.href='dashboard.php'</script>";     
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php }} ?>
