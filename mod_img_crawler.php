<?php
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://localhost/try9/list/index.php';
$image=$mycrawler->crawlImage($url);

//print the result

/*echo "<table width=\"100%\" border=\"1\">
  <tr>
    <td width=\"30%\"><div align=\"center\"><b>Image</b></div></td>
    <td width=\"30%\"><div align=\"center\"><b>Link</b></div></td>
    <td width=\"40%\"><div align=\"center\"><b>Image Link</b> </div></td>
  </tr>";*/
for($i=0;$i<sizeof($image['link']);$i++)
{   /*if($i==4)
    {
	   $i++;
	   //continue;	
	   $mansh= "<tr>
    <td><div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div></td>";
	echo $mansh;
	}*/
//continue;
/*if(($image['link'][$i])==null)
{
	echo "<td width=\"30%\"><div align=\"center\">No Link</div></td>
	<td width=\"40%\"><div align=\"center\">No Link</div></td>
  </tr>";
}
else 
{
	echo "<td><div align=\"center\">".$image['link'][$i]."</div></td>
	<td><div align=\"center\"><a href=\"".$image['link'][$i]."\">Go to link.</a></div></td>
	</tr>";		
}*/
	if($i==1)
	{
		$agra_fort= "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
	}	
	if($i==2)
	{
		$ellora= "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
	}	
	if($i==3)
	{
		$taj= "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
	}	
	if($i==4)
	{
		$sun_temple= "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
	}	
	if($i==5)
	{
		$red_fort= "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
	}	
} 
//echo "</table>";
$dt1=date("d");
if($dt1==1 || $dt1==6 || $dt1==11 || $dt1==16 || $dt1==21 || $dt1==26 || $dt1==31 )
{  
     echo '<h3 style="font-size:14px">Agra Fort</h3><br>';
	 echo  $agra_fort;
}
if($dt1==2 || $dt1==7 || $dt1==12 || $dt1==17 || $dt1==22 || $dt1==27)
{  
     echo '<h3 style="font-size:14px">Ellora</h3><br>';
	 echo  $ellora;
}
if($dt1==3 || $dt1==8 || $dt1==13 || $dt1==18 || $dt1==23 || $dt1==28)
{  
     echo '<h3 style="font-size:14px">Taj Mahal</h3><br>';
	 echo  $taj;
}
if($dt1==4 || $dt1==9 || $dt1==14 || $dt1==19 || $dt1==24 || $dt1==29 )
{  
     echo '<h3 style="font-size:14px">Sun Temple</h3><br>';
	 echo  $sun_temple;
}
if($dt1==5 || $dt1==10 || $dt1==15 || $dt1==20 || $dt1==25 || $dt1==30)
{  
     echo '<h3 style="font-size:14px">Red Fort</h3><br>';
	 echo  $red_fort;
}
?>