<?php
session_start();

if(isset($_SESSION['user']) && $_SESSION['user']!='admin100')
{
 echo "QUESTION SUBMITTED";
}
else if($_SESSION['user']=='admin100')
 echo "PLEASE LOGIN AS A MEMBER";
else
 echo "PLEASE LOGIN"; 
 
?> 