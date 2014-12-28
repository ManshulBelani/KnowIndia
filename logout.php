<?php

session_start();
//echo "$_SESSION[user]";
//unset($_SESSION['user']);
//if(isset($_SESSION['user']))
//{  echo "hi";
  session_destroy();
  header('Location: http://localhost/try9/');
//}
?>
