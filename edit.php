<?php
session_start();
require_once "connection.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	header ("Location: admin.php");
}


?>
<?php

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $record=mysqli_query($con,"select * from outages where nmb=$id");
    $countD=mysqli_num_rows($record);
    
   if($countD==1){
        $n=mysqli_fetch_array($record);
        $city=$n['serviceID'];
        $outage=$n['updates'];
    }
}

?>

<html>
<head>
    <title> Outage system</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
      
        <form name="f4" action = "update.php" method = "POST"> 
            <div class="main">
                    <h1> Edit outages </h1> 
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <b>  </b> <input type="text" name="city" id="city" value="<?php echo $city; ?>" required/> 
                        <br></br>
                        <textarea name="dff" id="dff" style="width:250px;height:150px; resize:none" wrap="virtual" required><?php echo $outage; ?></textarea>
                        <br></br>
                        <?php if ($update == true): ?>
	                        <button class="btn" type="submit" name="update" >update</button>
                        <?php else: ?>
	                        <button class="btn" type="submit" name="save" >Save</button>
                        <?php endif ?>
                        <br><a href= "main.php"> Admin Home </a></br>
                        <br><a href="logout.php"> Logout </a></br>

            </div>
        </form>
</body>
</html>