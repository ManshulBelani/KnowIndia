<?php

session_start();

if(!(isset($_SESSION['user'])))
 include("signup.php");
else
 echo "PLEASE LOGOUT";


?>