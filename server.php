<?php
session_start();
require_once "connection.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	header ("Location: admin.php");
}



if (isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM outages WHERE nmb=$id");
	//$_SESSION['message'] = "Address deleted!"; 
	header('Location: main.php');
}

?>