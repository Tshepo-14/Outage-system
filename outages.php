<?php

require_once "connection.php";


//$uCity=$_GET['serviceID'];


$complains=0;

//$sql="select * from outages where serviceID=$city";

    $sql="select * from outages where serviceID='$city'";
    $result= mysqli_query($con, $sql);
    $detail=0;
    $num_record=mysqli_num_rows($result);
    $num_recordzz;
    



?>

<html>
<head>
    <title> Outage system</title>
    <link rel="stylesheet" href="style.css">
   
   
</head>
<body>
    
        <div class="main">
                <h1> 
                    <?php
                    
                     while($row = mysqli_fetch_array($result)) {
                        echo $row['serviceID'];
                        $num_recordzz= $num_recordzz+1;
                    
                    ?> 
                    <br></br>
                    <textarea name="dff" id="dff" style="width:250px;height:150px; resize:none" wrap="virtual"  disabled><?php echo $row['updates']; ?></textarea>
                <?php } 
                    if($num_recordzz>0)
                    {
                        //there is a outage
                    }
                    else{
                        //if there is nothing 
                        if ( strlen( $city ) === 0 )
                        {
                            echo "There is a problem with the location";
                            //have a page to set location
                        }
                            echo"<form name='form1' action='report.php' method='GET'>";
                            echo "There are currently curently no outage in $city";
                            echo "<br></br>";
                            echo "Is this the correct city you are in?";
                            echo "<br></br>";
                            echo "<input type='submit' value='Yes' name='button'>   <input type='submit' value='No' name='button'>";
                            echo "</form>";

                        //create a function to alert admin if more than 5 users in a certain area use system

                    }                
                ?>
                </h1>                 
            <a href="index.html"> Home </a>
        </div>
   

    <script scr="script.js"> </script>
    <script src="verify.js"> </script>
</body>
    
</html>