<?php
require_once "connection.php";

    $cityz=$_POST['city'];
    $details=$_POST['dff'];

    $sql = "INSERT INTO outages (serviceID, updates) VALUES ('$cityz', '$details')";

    if (mysqli_query($con, $sql)) {
        header("location: main.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
?>