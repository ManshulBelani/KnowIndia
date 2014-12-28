<?php

session_start();

if(!(isset($_SESSION['user'])))
 include("index.php");
else
 echo "PLEASE LOGOUT";


?>