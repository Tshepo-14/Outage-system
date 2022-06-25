<?php
   ob_start();
   session_start();
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

    <form name="f1" action = "authentication.php" method = "POST"> 
    <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
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
