<?php
  session_start();
  session_destroy();

   header('Refresh: 1; URL = admin.php');
?>