<!--!DOCTYPE html>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <!--html lang="en"-->
    <head>
       
		<meta charset="UTF-8" />
        <meta name="description" content="Rotating Image Slider with jQuery & CSS3" />
        <meta name="keywords" content="jquery, rotation, slider, images, slideshow, autoplay, play, pause, css3"/>
		<meta name="author" content="Codrops" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="igstyle.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
       
        <LINK HREF="color.css" TYPE="text/css" REL="stylesheet">
        
<link rel="stylesheet" href="menustyle.css" type="text/css" media="screen" />
		<script type="text/javascript" src="jquery.min.js"></script>
<script type='text/javascript' src='kwicks.js'></script>
<script type='text/javascript' src='custom.js'></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="effects.js"></script>
<script type="text/javascript" src="side-bar.js"></script>


    </head>
   <body onload="timeMsg();">
<?php include("translator.php"); ?>
 <div class="left" style="padding-top:40px; padding-bottom:20px; padding-left:129px">
        
       <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>				
		</div>
		<div class="right" style="padding-top:40px; padding-right:129px">
         <ul class="kwicks">  
     <li id="kwick1"><a href="index.php">Home</a></li>  
     <li id="kwick2"><a href="about.php">Heritage</a></li>  
     <li id="kwick3"><a href="list/index.php">List</a></li>  
     <li id="kwick4" onmouseover="open_search()"><a href="#">Search</a></li>  

 </ul>  
<?php include("search.php"); ?>
	</div>
<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100%" style="padding-left:129px">
<tr>
<!--    <td width="1000" height="90" valign="top" class="top">
		<div class="left" style="padding-top:20px; padding-bottom:20px">
        
       <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>				
		</div>
		<div class="right" style="padding-top:20px">
<?php include("tabs.php"); ?>
	</div>
	</td>-->
  </tr>
  <tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" class="line_border" valign="top"></td>
  </tr>
<tr>
    <td width="1000" valign="top" height="25"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
		
			<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100">
			  <tr>
				<td width="375" height="100" valign="top">
					<div id="invalid">
					
					
<h2>About Us</h2><br><br>
					
				
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>	
<h2>Admin1</h2>
<div>
<b>Name:</b> <span id="name0"></span><br />
<b>Occupation:</b> <span id="occupation0"></span><br />
<b>Stream:</b> <span id="stream0"></span><br />
<b>Year:</b> <span id="year0"></span><br />
<b>Branch:</b> <span id="branch0"></span><br />
<b>Enrollment no:</b> <span id="rollno0"></span><br />

</div>
<br>
</td>
    <td><h2>Admin2</h2>
<div>
<b>Name:</b> <span id="name1"></span><br />
<b>Occupation:</b> <span id="occupation1"></span><br />
<b>Stream:</b> <span id="stream1"></span><br />
<b>Year:</b> <span id="year1"></span><br />
<b>Branch:</b> <span id="branch1"></span><br />
<b>Enrollment No:</b> <span id="rollno1"></span>
</div>
<br>
</td>
  </tr>
  <tr>
    <td><h2>Admin3</h2>
<div>
<b>Name:</b> <span id="name2"></span><br />
<b>Occupation:</b> <span id="occupation2"></span><br />
<b>Stream:</b> <span id="stream2"></span><br />
<b>Year:</b> <span id="year2"></span><br />
<b>Branch:</b> <span id="branch2"></span><br />
<b>Enrollment No:</b> <span id="rollno2"></span>
</div>
<br>
</td>
    <td><h2>Admin4</h2>
<div>
<b>Name:</b> <span id="name3"></span><br />
<b>Occupation:</b> <span id="occupation3"></span><br />
<b>Stream:</b> <span id="stream3"></span><br />
<b>Year:</b> <span id="year3"></span><br />
<b>Branch:</b> <span id="branch3"></span><br />
<b>Enrollment No:</b> <span id="rollno3"></span>
</div>
</td>
  </tr>
</table>


				</td>
				
				<td width="15" height="100" valign="top">&nbsp;</td>
			  </tr>
			</table>
	
	
	</td>
  </tr>

  
  <tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" class="line_border" valign="top"></td>
  </tr>
<tr>
    <td width="1000" valign="top" height="30"></td>
  </tr>
  <tr>
    <td width="1000" height="120" valign="top" class="bg_brown">
		<div class="left">
			<!--<a href="publication.php">Publications</a>-->
			<a href="donation.php">Participation</a>
			<a href="faq.php">FAQs</a>
			<a href="activities.php">Activities</a>
			<a href="about_us.php">About us</a>
			<a href="feedback.php">Feedback</a>
	  </div>
		<div class="right">
			<div>
					<strong class="big_text">E-mail Us:</strong><a href="#">manshulvbelani@gmail.com</a><br>
			</div>
			<div>
					<strong class="big_text">Free Speech:</strong>8-800-245-4887<br>8-800-300-3159
			</div>
		
		</div>
	</td>
  </tr>
  <tr>
    <td width="1000" height="60" valign="top">
		
	</td>
  </tr>
</table>
<script type="text/javascript">
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","contact.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

for(var i=0;i<4;i++)
{
document.getElementById("name"+i).innerHTML=
xmlDoc.getElementsByTagName("name")[i].childNodes[0].nodeValue;
document.getElementById("occupation"+i).innerHTML=
xmlDoc.getElementsByTagName("occupation")[i].childNodes[0].nodeValue;
document.getElementById("stream"+i).innerHTML=
xmlDoc.getElementsByTagName("stream")[i].childNodes[0].nodeValue;
document.getElementById("year"+i).innerHTML=
xmlDoc.getElementsByTagName("year")[i].childNodes[0].nodeValue;
document.getElementById("branch"+i).innerHTML=
xmlDoc.getElementsByTagName("branch")[i].childNodes[0].nodeValue;
document.getElementById("rollno"+i).innerHTML=
xmlDoc.getElementsByTagName("rollno")[i].childNodes[0].nodeValue;
}
</script>


</body>
</html>
