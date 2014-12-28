<?php 
         session_start();
		 if(isset($_SESSION['user']))
		 {
			//echo '<H3 ALIGN="RIGHT">';
           echo "Hi " . $_SESSION['user'] ;
		 }
		 else
		   echo "";
         ?>
		 
         