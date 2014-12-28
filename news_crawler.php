<?php
include_once('simple_html_dom.php');
$target_url = "http://timesofindia.indiatimes.com/topic/archaeological-survey-of-india";
$html = new simple_html_dom();
$html->load_file($target_url);
/*foreach($html->find('a') as $link)
{
echo $link->href."<br />";
}*/$i=0;$j=0;$k=0;
foreach($html->find('strong') as $strong)
{   if($i==0)
    {
	    $i++;
		continue;	
    }
	echo $strong."<br />";
	//$p=$html->find('p');
	//echo$p."<br />";
	foreach($html->find('p')as $p)
	{ if($j==0)
	  { echo $p."<br />";
	    echo '<a href="http://timesofindia.indiatimes.com/topic/archaeological-survey-of-india" target="_blank">Read more...</a>';
		echo "<br>";
	    $j++;
		break 1;
	  }
	  
	  else if($j==1)
	  {
		  foreach($html->find('p') as $p1)
		  {
			  if($k==0)
			  {
				 $k++;
				 continue;  
			  }
			  else
			  { echo $p1."<br />";
			  echo '<a href="http://timesofindia.indiatimes.com/topic/archaeological-survey-of-india" target="_blank">Read more...</a>';
		echo "<br>";
			    $j++;
			    break 2;
			  }
		  }  
	  }
	  
	  else if($j==2)
	  {
		   foreach($html->find('p') as $p2)
		   {
			   if($k==1)
		       {
			      $k++;
			      continue;   
		       }  
			   else if($k==2)
		       {
			      $k++;
			      continue;   
		       } 
			    else
			  { echo $p2."<br />";
			  echo '<a href="http://timesofindia.indiatimes.com/topic/archaeological-survey-of-india" target="_blank">Read more...</a>';
		echo "<br>";
			    $j++;
			    break 2;
			  }
		   }
	  }
	}
	$i++;
	if($i==4)
	break 1;
}
 /*$strong=$html->find('strong');
for($i=1;$i<4;$i++)
{
	$strong=$html->find('strong');
	echo $strong."<br />";
}*/
?>