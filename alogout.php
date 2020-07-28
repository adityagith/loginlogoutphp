<?php
   session_start();
   if($_SESSION['loggedin'])
   {
       echo "<button onclick='logout()'>Log Out</button>";
   }
   else
   {
       header("location:alogin.php");
       echo "";
   }
?>