<?php
require_once "connection.php";

?>

<html>
<head>
    <title> Outage system</title>
    <link rel="stylesheet" href="style.css">
   
   
</head>
<body>
    
        <div class="main">
           <?php
                $resul=$_GET['button'];
                $comp=0;
                //echo $resul;
                
                if($resul=='Yes')
                {
                   // echo '<script type=text/javascript> alert("We have alerted admin"); </script>';
                   // sleep(5);
                    //header("Location:index.html");
                    
                    //create if statements to see if city already exits in records and add comp to number
                    $resultz=mysqli_query($con, "select city from complain where city='$city'");
                    $countD=mysqli_num_rows($resultz);
                
                    if($countD>0)
                    {
                        //row found
                         //row found
                       $num=mysqli_query($con, "select numco from complain where city='$city'");
                      
                      $sql="UPDATE complain SET numco=(select numco+1 from complain)";
                      
                   

                      if ($con->query($sql) === TRUE) {
                        echo '<script type=text/javascript> if (window.confirm("We have alerted the admin of the outage in your area if you require urgent assistance you can contact us on 0769251473")) {
                            window.location.assign("index.html")
                            
                            }
                            else{
                            window.location.assign("index.html")
                            }</script>';
                            
                      } else {
                        echo "Error updating record: " . $conn->error;
                      }
                       
                       // $num=$num+1;
                       // mysqli_query($con,"UPDATE complain set numco='$NUM'");

                    //$sql = "INSERT INTO complain (numco, city) VALUES ('$comp', '$city')";
                            
                    }
                    else{
                        $comp=$comp+1;
                        $sql = "INSERT INTO complain (numco, city) VALUES ('$comp', '$city')";
                            if (mysqli_query($con, $sql)) {
                                echo '<script type=text/javascript> if (window.confirm("We have alerted the admin of the outage in your area if you require urgent assistance you can contact us on 0769251473")) {
                                    window.location.assign("index.html")
                                    
                                    }
                                    else{
                                    window.location.assign("index.html")
                                    }</script>';
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                            }
                        
                    }
                   
                }
                else{
                   // echo $city;
                  
                }
           ?>
            <a href="index.html"> Home</a>
        </div>

    <script scr="script.js"> </script>
    <script src="verify.js"> </script>
</body>
    
</html>
