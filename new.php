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
    </head>
<body>


    <form name="f1" action = "all.php" method = "POST"> 
        <div class="main">
        
            <h1> Outage System Admin </h1> 
            <b> City: </b> <input type="text" id="city" /> <input type="submit"> </br>
            <hr> </hr>
            <h2> Current outages </h2> 

            <a href="index.html"> Home  </a>
        </div>
    </form>

</body>
</html>