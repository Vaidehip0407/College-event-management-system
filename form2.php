<?php include "navbar.php";
include "config.php";
$eventid = $_GET['id'];
$sql =  "SELECT * FROM `participate_master` JOIN user_master on user_master.user_id = participate_master.user_id WHERE event_id = '$eventid'";

?>

<style>
  .table-primary{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  .table-primary th,
  .table-primary td {
    border: 1px  solid ;
    padding: 8px;
    text-align: left;
  }

  .table-primary th {
    background-color: hotpink;
  }
 </style>

 
   <!DOCTYPE html>
<html>
<head>
    <title> Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>    <br><br><br><br>
    <div class="container">
    <center><h1> Result List</h1></center><br>
  
        </div>

</body>
</html>

<table class="table-primary">
    <tr><th>
        Participation name 
    </th>


    <th>
    User Email 
    </th>
    

    <th>  
    Rank 
    </th>
</tr>

<?php

if ($res = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($res)) {
  ?>
  <tr>
    <td>
<?php  echo $row['p_name']; ?>
    </td>
    <td>
<?php  echo $row['user_email']; ?>
    </td>
<td>
    
<?php if($row['status']==0)
{
    echo "Participation" ;
}elseif($row["status"]== 1){
    echo "First Rank";
}elseif($row["status"]== 2){
    echo "Second Rank";
}elseif($row["status"]  ==3){
    echo "Third Rank";
}}


?>
</td>  
</tr>
</table>
  
  <?php
}else {
    echo "Records not found ";
}

    // Calculate days and total amount
   


?>

