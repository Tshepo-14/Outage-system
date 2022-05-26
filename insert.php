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

</head>
<body>
        <form name="f4" action = "add.php" method = "POST"> 
            <div class="main">
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