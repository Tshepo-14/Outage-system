<?php
   ob_start();
   session_start();
?>


<html>
<head>
    <title> Outage system</title>
    <link rel="stylesheet" href="style10.css">
   
</head>
<body>

    <form name="f1" action = "authentication.php" method = "POST"> 
        <div class="main">
            <h1>        Outage System       </h1>
                <label> UserName: </label>
                <input type="text" id="user" name="user" required><br><br>
                <label> Password : </label>
                <input type="password" id="pass" name="pass" required><br><br>
                <input type =  "submit">  
                <br>
                <a href="index.html"> User </a>
        </div>
    </form>
   
    <script scr="script.js"> </script>
    <script src="verify.js"> </script>
</body>
    
</html>
