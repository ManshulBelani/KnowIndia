<?php
session_start();

if(isset($_SESSION['user']) && $_SESSION['user']!='admin100')
{
$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);

$sql="INSERT INTO donation (username, amount, currency, date, mop)
VALUES
('$_SESSION[user]','$_POST[amount]','$_POST[domain]',CURDATE(),'$_POST[sq]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
}
else
{
/*	  header('Location: http://localhost/try9/');
 echo '<script type="text/javascript">
		alert("please login");
		</script>';
 // header('Location: http://localhost/try9/');
*/echo "PLEASE LOGIN";

}

?>