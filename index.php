<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="menustyle.css" type="text/css" media="screen" />
<LINK HREF="color.css" TYPE="text/css" REL="stylesheet">
<script type="text/javascript" src="jquery.min.js"></script>
<script type='text/javascript' src='jquery-1.2.6.min.js'></script>
<script type='text/javascript' src='kwicks.js'></script>
<script type='text/javascript' src='custom.js'></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="effects.js"></script>
<script type="text/javascript" src="side-bar.js"></script>
<script type="text/javascript" src="meri_gallery.js"></script>
<script type="text/javascript" src="sign.js"></script>
<script type="text/javascript" src="cookie.js"></script>
<script type="text/javascript" src="photoshuffler.js"></script>

<script type="text/javascript">

function validateform1()
{
	var x=document.forms["asd"]["user"].value;
	var y=document.forms["asd"]["password"].value;
	
	if(x == "" || x == null)
	{
		document.getElementById("user").style.backgroundColor = "#093";
		alert("You can`t leave the coloured fields blank");
		return false;
	}
	
  
   if(y == "" || y == null)
   {
        document.getElementById("password").style.backgroundColor = "#093";
        alert("You can`t leave the coloured fields blank");
		return false;
   }
}
</script>

</head>

<body onload="timeMsg();">
<?php include("translator.php"); ?>
 <div class="left" style="padding-top:40px; padding-bottom:20px; padding-left:129px">
        
       <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>				
</div>
		<div class="right" style="padding-top:40px; padding-right:129px">
         <!--<?php include("tabs.php"); ?>-->
         <?php include("counter2.php"); ?>
         <?php include("session.php"); ?>

         <h3 align="right"> <a href="logout.php"> logout </a> </h3>
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
			<ul class="kwicks">  
     <li id="kwick1"><a href="home.html">Home</a></li>  
     <li id="kwick2"><a href="about.html">Heritage</a></li>  
     <li id="kwick3"><a href="image gallary/index.html">Downloads</a></li>  
     <li id="kwick4"><a href="#">Search</a></li>  
 </ul>  
	</div>
	</td>-->
  </tr>
  <tr>
    
    <td width="1000" height="295" valign="top">	
    
    <div style="width:35%; float:left;">
      <img src="images/tag.jpg" width="350" height="304" /></div>
	<div style="width:65%; height:auto; float:right; background-color:#0F0F0F;">
       <!--<div style="width:7%;">csadcs</div>
       <div style="width:86%; float:right; position:relative;"><img src="images/lotus.jpg" width="450" height="300" /></div>
       <div style="width:7%;  position:relative;">sxmkajk</div>-->
       <table border="0">
  <script type="text/javascript" src="meri_gallery.js"></script>
  <tr>
   <!-- <td style="padding-left:20px;"><img src="images/previous.jpg" width="50" height="50" onclick="prev_img();"/></td>
    <td style="padding-left:10px; padding-right:10px;"><img src="images/lotus.jpg" name="myImage" width="488" height="300" id="myImage" /></td>
    <td style="padding-right:20px;"><img src="images/next.jpg" width="50" height="50" onclick="next_img();"/></td>-->
    <?php include("img_gallery.php"); ?> 
  </tr>
</table>

    </div>	
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
    <td width="1000" height="100" valign="top">
		<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100">
  <tr>
  
    <td width="375" height="100" valign="top">
			<div style="width:100%; height:30%">
            
            
            <div class="panel" style="border:solid; width:300px"><br />
        <div class="panel1">
        <div align="center"><img src="images/login copy.jpg" width="200" height="30"/></div>
        <!--<div class="block1">        
</div>-->
        <div class="panel2" >
        <br /> 
        <form name="asd" action="login_db.php"  method="post">
        <table width="300px" border="0" align="center">
  <tr>
    <td><label>Sign in as:</label></td>
    <td><select name="as" style="margin-left:15px">
	<option value="Member">Member</option>
	<option value="Administrator">Administrator</option>
	</select><br /><br />
	</td>
  </tr>
  <tr>
    <td><label>Username:</label></td>
    <td><input name="user" id="user" type="text" /></td>
  </tr>
  <tr><td><label>Password:</label></td>
  <td><input type="password" name="password" id="password" /></td>
  <td>&nbsp;</td>
  <tr>
  <td>&nbsp </td>
  
  <td>
  <input type="submit" name="sign in" value="Sign In" onclick="validateform1()" onclick="checkcookie()" />
  </td>
  </tr>
 <!-- <tr>
  <td> Sign Up:</td>
  <td><input type="button" name="sign Up" value="sign Up" onclick="func();"/></td>
  </tr>-->
	

</table>
</form>
<table width="300" border="0">
  <tr>
    <td>Not a Member</td>
    <td><input name="signup" type="button" value="Sign Up Now" onclick="func();"/></td>
  </tr>
</table>

<br />
   </div>
        </div>
        </div>
            
            
            
            </div>
            <div style="width:100%; height:70%">
            <br /><br /><br /><br />
            <a href="maplink.php"><img src="images/map.gif" width="300" height="300" /> </a></div>
	</td>
    <td width="10" height="100" valign="top">&nbsp;</td>
    <td width="260" height="100" valign="top" class="list">
		<h2 align="center" style="color:#000;">Monument Of The Day</h2>
        
        <!--<h3 style="font-size:14px">Taj Mahal</h3>-->
        
		<div style="text-align:center">
        <!--<img src="images/taj mahal1.jpg" width="280" height="221" /></div><br>-->
        <?php include("mod_img_crawler.php") ?>
        <div align="center" style="font-size:14px"><!--An immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal emperor Shah Jahan in memory of his favourite wife, the Taj Mahal is the jewel of Muslim art in India and one of the universally admired masterpieces of the India's heritage.--><?php include("mod_crawler.php") ?></div>
        </div>
	</td>
	</td>
    <td width="35" height="100" valign="top">&nbsp;</td>
    <td width="" height="100" valign="top">
    <!--<div style=" height:500px; overflow:scroll">
		<h2 style="color:#000;">Our news</h2>
			
			<br />
			<div class="block" style="font-size:14px">
<strong>Vault B of Sree Padmanabhaswamy Temple not to be opened now</strong><br>The Supreme Court on Thursday said the vault 'B' of the Sree Padmanabhaswamy Temple will be opened only after substantial work ...
<a href="#" class="read">Read more</a> 
			</div>
			<div class="block" style="font-size:14px">
<strong>Heritage whitewashed in Fatehgarh Churian</strong><br>Precious frescos of Panj Temple in Fategharh Churian, which have immense heritage value and date back 180 years, are blissfully being whitewashed out of ignorance...
<a href="#" class="read">Read more</a> 
			</div>
            <div class="block" style="font-size:14px">
<strong>Minutes of the First Meeting of the Finance Committee of  
National Mission on Monuments and Antiquities </strong><br>The first meeting of the Finance Committee of National Mission on 
Monuments and Antiquities was convened under the Chairmanship of A.S. & F.A., 
Ministry of Culture in his chamber in Shastri Bhawan, New Delhi, on 20
th December... 
<a href="#" class="read">Read more</a> 
			</div>
            </div>-->
            <div id="IframeScroller" style="position:absolute; visibility:show; z-index:3">
<table cellpadding="2" cellspacing="0" border="0" style="border: #000000 1px solid; background-color:#000;COLOR: #FFFFFF; FONT: 15px arial, sans-serif; font-weight: bold;"><tr><td align="center">
Current News<br>
</td></tr><tr><td>
<iframe id="NewsWindow" src="news_win.php" width="230" height="500" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" style="border: #000000 1px solid;"></iframe>
</td></tr></table>
</div>
	</td>
    <td width="35" height="100" valign="top">
    <?php include("smpl_sidebar.php"); ?> 
    <!--<div id="sideBar">
	
	<a href="#" id="sideBarTab"><img src="sidebar/slide-button copy.jpg" alt="sideBar" title="sideBar" /></a>
	
	<div id="sideBarContents" style="display:none;">
		<div id="sideBarContentsInner">
			<h2>side<span>bar</span></h2>
			
			<ul>
				<li><a href="#">Link One</a></li>
				<li><a href="#">Link Two</a></li>
				<li><a href="#">Link Three</a></li>
				<li><a href="#">Link Four</a></li>
				<li><a href="#">Link Five</a></li>
			</ul>
			
		</div>
  </div>
	
</div>-->
    
    </td>
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

    
</body>
</html>