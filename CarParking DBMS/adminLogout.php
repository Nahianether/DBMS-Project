<?php
   session_unset();
   session_destroy();
   header("Location:adminlogin.php");

?>