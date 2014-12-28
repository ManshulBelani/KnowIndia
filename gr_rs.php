<?php

$gname=$_GET['pid'];

session_start();

if(isset($_SESSION['user']) && $_SESSION['user']!='admin100')
{
$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);
$xx=filter_var($gname, FILTER_SANITIZE_STRIPPED);
//echo "SELECT * FROM groups WHERE g_name='$xx'";
$result = mysql_query("SELECT * FROM groups WHERE g_name='$xx'");

//echo $row;
while($row = mysql_fetch_array($result))
  { //echo "hi";
  $hits=$row['hits'];
 // echo "<br />";
  }
//echo $hits;
$hits= $hits +1000;

mysql_query("UPDATE groups SET hits = '$hits' WHERE g_name= '$xx' ");

echo "WELCOME TO ".$gname;

mysql_close($con);
}
else
{
	echo "PLEASE LOGIN";
}

?>