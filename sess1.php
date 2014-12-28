<?php

session_start();

if(isset($_SESSION['user']))
{  // echo "hi";
	header('Location: http://localhost/try9/publication.php');
}
else
  echo "PLEASE LOGIN";
 
?>