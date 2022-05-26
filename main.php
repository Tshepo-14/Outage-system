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
</head>
<body>
        <form name="f4" action = "add.php" method = "POST"> 
            <div class="main">
                <h2> Current outages </h2> 
                <hr> </hr> 
                    <table>
	                    <thead>
                            <tr>
                                <th>City        </th>
                                <th colspan="2" >Action</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['serviceID']; ?></td>
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

