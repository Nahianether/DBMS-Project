<?php
   session_unset();
   session_destroy();
   header("Location:userlogin.php");

?>