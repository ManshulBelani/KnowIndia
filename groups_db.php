<?php

session_start();

if(isset($_SESSION['user']) && $_SESSION['user']=='admin100')
{
$con = mysql_connect("localhost","root","sonal");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cultural heritage", $con);

$hits=getWordCount($_POST['group_name']);

$sql="INSERT INTO groups (g_name, agenda, hits)
VALUES
('$_POST[group_name]','$_POST[group_agenda]','$hits')";

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
*/echo "ONLY ADMIN CAN CREATE A GROUP";

}




 function getWordCount($word) { 
	//echo $word;
    // echo (($h = fsockopen('www.google.com', 80))!== false);
    // Connect and send request. If can't connect, return false 
    if (($h = fsockopen('www.google.com', 80))!== false) 
	{ 
	//echo "hello";
    fwrite($h,"GET /search?hl=en&q=%22".urlencode($word)."%22 

HTTP/1.1\r\n"); 
    fwrite($h,"Connection: close\r\n"); 
    fwrite($h,"Host: www.google.com\r\n\r\n"); 

    // Read response 
    $response = ''; 
	//echo "dfvlkdb";
	//echo (!feof($h)) ;
    
	while (!feof($h)) 
	$response .= fread($h, 8096); 
    
	fclose($h); 

    $needle = 'about'; 
     
	$pos = strpos($response, $needle); 

    if ($pos !== false) { 
      $response = strip_tags(substr($response, $pos)); 
      $response = substr($response, (strlen($needle)), (strlen

($needle)+30)); 
       
       
      $expl = explode('for', $response); 
       
      $response = preg_replace ('/[^\d\s]/', '', $expl[0]); 
    } 
    else { 
      $needle." was not found"; 
    } 

    return $response; 
    } 
  }  
  


?>