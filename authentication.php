<?php
require_once "connection.php";


    $username=$_POST['user'];
    $password=$_POST['pass'];

    $username_err = $password_err = $login_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //username
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        //password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        
       
    }
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $seconds = 5 + time();
       
    

        if($count == 1) {  
            //echo "<h1> Successful </h1>";
            session_start();
            $_SESSION['login'] = "1";
            header("location: main.php");
        }  
        else{  
           //insert javascript code stating wrong information
           echo "<script>  
           alert('Please enter correct login details');
           location.href = 'admin.php';
           </script>"; 
           session_start();
		   $_SESSION['login'] = '';
        }     

?>