<?php
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db ="event";
   $conn = mysqli_connect($server,$user,$pass,$db);
    if($conn){     
    }
    else{
        echo "sqlite error";
    }

?>