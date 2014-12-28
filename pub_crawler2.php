<?php
include_once('simple_html_dom.php');
$target_url = "http://asi.nic.in/asi_publications.asp";
$html = new simple_html_dom();
$html->load_file($target_url);
$i=0;$j=0;
function ghi($a,$j)
{
	$target_url1 = "http://asi.nic.in/".$a;
    $html = new simple_html_dom();
    $html->load_file($target_url1);
    foreach($html->find('p') as $p)
    {  /*if($i<41)
       {
	     $i++;
	     continue;   
        }*/
		
		//if($j==8)
		//{
			 if($j==8)
			 { include("pub_img_crawler2.php");
			  echo '<div id="pub2">'.$p.'</div><br />';
			 }
			 /*else if($j==4)
			 { include("pub_img_crawler.php");
			    //echo '<div align="center"><br>Price: Rs.</div>';
			 }*/
			 //else
			//echo '<div align="center" style="float:left">'.$p.'</div><br />';
	    //}
		$j++;
      continue;
	   //break 1;
    }
}

foreach($html->find('a') as $link)
{  if($i<41)
   {
	  $i++;
	  continue;   
   }
//echo $link->href."<br />";
ghi($link->href,$j);
break 1;
}

?>