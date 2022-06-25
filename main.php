<?php
session_start();
require_once "connection.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	header ("Location: admin.php");
}

?>
<?php
     $sql="select * from outages";
    $result= mysqli_query($con, $sql);
    $detail=0
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
        <form name="f4" action = "add.php" method = "POST"> 
            <div class="container p-5 my-5 bg-dark text-white" style="text-align:center; border-radius: 25px;">
                <h2> Current outages </h2> 
                <hr> </hr> 
                    <table  class="table table-hover" style="color:aqua;">
	                    <thead>
                            <tr>
                                <th style="text-align: center; font:white;">City        </th>
                                <th style="text-align: center; font:white;" colspan="2" >Action</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td style="text-align: center; font:white;"><?php echo $row['serviceID']; ?></td>
                                <p>
                                <td>
                                    <a href="edit.php?edit=<?php echo $row['nmb'];?>" class="edit_btn" >Edit</a>
                                </td>
                                <td>
                                    <a href="server.php?del=<?php echo $row['nmb']; ?>" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                <hr> </hr> 
                <p><a href="insert.php"> Add Outages </a></p>
                <p><a href="logout.php"> Logout  </a></p>
            </div>
        </form>


</body>
</html>

