<?php
if(!isset($_COOKIE['loggedin'])){

    
}
else{
    //create page for not logged in to home
    header('index.html');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style10.css"> 
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      
    </head>
<body>


    <form name="f1" action = "all.php" method = "POST"> 
        <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
        
            <h1> Outage System Admin </h1> 
            <b> City: </b> <input type="text" id="city" /> <input type="submit"> </br>
            <hr> </hr>
            <h2> Current outages </h2> 

            <a href="index.html"> Home  </a>
        </div>
    </form>

</body>
</html>