<?php
session_start();
require_once "connection.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	header ("Location: admin.php");
}
?>

<html>
<head>
    <title> Outage system</title>
    <link rel="stylesheet" href="style10.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
        <form name="f4" action = "add.php" method = "POST"> 
            <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
                    <h1> Add Outages  </h1> 
                    <b>  </b> <input type="text" name="city" id="city" placeholder="City" required/> 
                    <br></br>
                    <textarea name="dff" id="dff" style="width:250px;height:150px;" placeholder="Details of Outage" required> 
                    </textarea>
                    <br></br>
                    <br><input type =  "submit"></br>
                    <br><a href= "main.php"> Admin Home </a></br>
                    <br><a href="logout.php"> Logout </a></br>
            </div>
        </form>
</body>
</html>