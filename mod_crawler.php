<?php
include_once('simple_html_dom.php');
$target_url = "http://localhost/try9/list/index.php";
$html = new simple_html_dom();
$html->load_file($target_url);
/*foreach($html->find('a') as $link)
{
echo $link->href."<br />";
}*/$i=0;$j=0;$k=0;$l=0;$m=0;
$dt=date("d");
//echo $dt;
if($dt==1 || $dt==6 || $dt==11 || $dt==16 || $dt==21 || $dt==26 || $dt==31 )
{
	foreach($html->find('p') as $p)
{ if($i==0)
  {
     $i++;
	 continue;
  }
echo $p."<br />";
echo '<a href="http://localhost/try9/list/index.php" target="_self">Read More...</a>';
break 1;
}
}

else if($dt==2 || $dt==7 || $dt==12 || $dt==14 || $dt==22 || $dt==27)
{   
    foreach($html->find('p') as $p)
	{  if($j<6)
	   {
	      $j++;
		  continue;
	   }
	   echo $p."<br />";
echo '<a href="http://localhost/try9/list/index.php" target="_self">Read More...</a>';
break 1;
	}
}

else if($dt==3 || $dt==8 || $dt==13 || $dt==18 || $dt==23 || $dt==28)
{   
    foreach($html->find('p') as $p)
	{  if($k<12)
	   {
	      $k++;
		  continue;
	   }
	   echo $p."<br />";
echo '<a href="http://localhost/try9/list/index.php" target="_self">Read More...</a>';
break 1;
	}
}

else if($dt==4 || $dt==9 || $dt==14 || $dt==19 || $dt==24 || $dt==29)
{   
    foreach($html->find('p') as $p)
	{  if($l<18)
	   {
	      $l++;
		  continue;
	   }
	   echo $p."<br />";
echo '<a href="http://localhost/try9/list/index.php" target="_self">Read More...</a>';
break 1;
	}
}

//else if($dt==5 || $dt==10 || $dt==15 || $dt==20 || $dt==25 || $dt==30)
else
{   
    foreach($html->find('p') as $p)
	{  if($m<25)
	   {
	      $m++;
		  continue;
	   }
	   echo $p."<br />";
echo '<a href="http://localhost/try9/list/index.php" target="_self">Read More...</a>';
break 1;
	}
}

?>