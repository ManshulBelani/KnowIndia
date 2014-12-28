<?php

$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);

//echo $gname;
$result = mysql_query("SELECT g_name FROM groups ORDER BY hits DESC");
$z=0;

while($row = mysql_fetch_array($result))
  {  $z=$z+1;
	  if($z==$i)
	  {
         echo $row['g_name'];
         echo "<br />";
	  }
  }
  
//echo $hits;
mysql_close($con);

?>