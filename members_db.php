<?php
$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);

$sql="INSERT INTO members (m_name, gender, street, city, state, country, postal_code, email, volunteer)
VALUES
('$_POST[fn]','$_POST[Gender]','$_POST[strt]','$_POST[ctry]','$_POST[state]','$_POST[cotry]','$_POST[pcode]','$_POST[email]','$_POST[op]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";



//$result = mysql_query("SELECT m_id FROM members WHERE email='$_POST[email]' ");

$sql="INSERT INTO login (username, password, security, ans)
VALUES
('$_POST[ln]','$_POST[passwd]','$_POST[sq]','$_POST[ans]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>