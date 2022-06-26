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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
</head>
<body>

    <form name="f1" action = "authentication.php" method = "POST"> 
    <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
            <h1>        Outage System       </h1>
                <br>
                <div class="input-group" style="width: 50%; align-items: center; align-content: center; margin: auto;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <br>
                <div class="input-group" style="width: 50%; align-items: center; align-content: center; margin: auto;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                <input type =  "submit" class="btn-primary">  
                <br><br>
                <a href="index.html"> User </a>
        </div>
    </form>
   
    <script scr="script.js"> </script>
    <script src="verify.js"> </script>
</body>
    
</html>
