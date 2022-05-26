<?php
session_start();
require_once "connection.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	header ("Location: admin.php");
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $cityf=$_POST['city'];
    $outagesf=$_POST['dff'];
    mysqli_query($con, "UPDATE outages SET serviceID='$cityf', updates='$outagesf' WHERE nmb=$id");
    echo '<script> alert("Updated"); </script>';
    header('location: main.php');

}



?>


