<?php      
    $host = "sql210.epizy.com";  
    $user = "epiz_31225069";  
    $password = "iRpgYziOBtey";  
    $db_name = "epiz_31225069_outage";  
    $id=0;
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
    
    $user_ip=getenv('REMOTE_ADDR');
    $geo= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $idz=(int) fread($handle,20);

    $country=$geo["geoplugin_countryName"];
    $city=$geo["geoplugin_city"];
?>  