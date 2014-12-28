<?php

 session_start();

if(!(isset($_SESSION['user'])))
{
$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);

$result = mysql_query("SELECT password FROM login WHERE username='$_POST[user]'");

while($row = mysql_fetch_array($result))
  {
  //echo $row['password'];
  //echo "<br />";

 header('Location: http://localhost/try9/');

 $_SESSION['user']= $_POST[user];
  echo "Hi" . $_SESSION['user'] ;
  }

mysql_close($con);
}
else
 echo "PLEASE LOGOUT";
?>