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
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
    

</head>
<body>
      
        <form name="f4" action = "update.php" method = "POST"> 
            <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
                    <h1> Edit outages </h1> 
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <b>  </b> <input type="text" name="city" id="city" value="<?php echo $city; ?>" required/> 
                        <br></br>
                        <textarea name="dff" id="dff" style="width:250px;height:150px; resize:none" wrap="virtual" required><?php echo $outage; ?></textarea>
                        <br></br>
                        <?php if ($update == true): ?>
	                        <button class="btn-primary" type="submit" name="update" >update</button>
                        <?php else: ?>
	                        <button class="btn-primary" type="submit" name="save" >Save</button>
                        <?php endif ?>
                        <br>
                        <br><a href= "main.php"> Admin Home </a></br>
                        <br><a href="logout.php"> Logout </a></br>

            </div>
        </form>
</body>
</html>