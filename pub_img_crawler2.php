<?php
//include("Crawler.php");
$mycrawler=new Crawler();
$url='http://asi.nic.in/asi_publ_guide_books.asp';
$image=$mycrawler->crawlImage($url);

//print the result

/*echo "<table width=\"100%\" border=\"1\">
  <tr>
    <td width=\"30%\"><div align=\"center\"><b>Image</b></div></td>
    <td width=\"30%\"><div align=\"center\"><b>Link</b></div></td>
    <td width=\"40%\"><div align=\"center\"><b>Image Link</b> </div></td>
  </tr>";*/
for($i=0;$i<sizeof($image['link']);$i++)
{    if($i<25)
     {
	     continue;	 
	 }
echo "<div align=\"center\"><img src=\"".$image['src'][$i]."\"/></div>";
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
break 1;		
}  
//echo "</table>";
?>