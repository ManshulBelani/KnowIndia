<!--!DOCTYPE html>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <!--html lang="en"-->
    <head>
        
        
        
        
        
        <script type="text/javascript"
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">

 // Initialize version 1.0 of Google AJAX API
 google.load("language", "1");

 function translate(lang) {
   var source = document.getElementById("article").innerHTML;
   var len = source.length;

   // Google Language API accepts 500 characters per request 
   var words = 600;

   // This is for English pages, you can change the
   // sourcelang variable for other languages
   var sourcelang = "en";
   document.getElementById("translation").innerHTML = "";

   for(i=0; i<=(len/words); i++) {
     google.language.translate (source.substr(i*words, words),
                 "en", lang, function (result) {
     if (!result.error) {
     document.getElementById("translation").innerHTML
           = document.getElementById("translation").innerHTML
           + result.translation;
    } }); }  

  // Hide the text written in the original language
  document.getElementById("article").style.display = 'none';
  return false;
 }

 // Switch to the original language

 function original() {
  document.getElementById("translation").style.display='none';
  document.getElementById("article").style.display = 'block';
  return false;
 }
</script>

   
  

      
        
        
        
        
        
        
        
        
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

<title>Feedback Form</title>
<link rel="stylesheet" type="text/css" href="asd.css" />
</head>
<body>
    
    <a href="#" onclick="original();">Switch to English</a>
<select onchange="translate(this.options[this.selectedIndex].value);">
<option value="de">deutsch</option>
<option value="pt">português</option>
<option value="fr">français</option>
<option value="ja">日本語</option>
<option value="ar">عَرَبيْ</option>
<option value="it">italiano</option>
<option value="ru">pусский</option>
<option value="po">polski</option>
<option value="zh-CN">中文</option>
<option value="es">español</option>
<option value="ko">한국어</option>
<option value="nl">nederlands</option>
<option value="hi">हिन्दी </option>
<option value="el">Ελληνική</option>
<option value="ro">română</option>
</select> </div>



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


    <table width="1000" border="0" cellspacing="0" cellpadding="0" height="100%"  style="padding-left:129px">
  <tr>
    <!--<td width="1000" height="90" valign="top" class="top">
	<div class="left" style="padding-top:20px; padding-bottom:20px">
        
        <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>			
		</div>
		<div class="right" style="padding-top:20px">
<?php include("tabs.php"); ?>
</tr>
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
				


  <div id="translation">
	</div> 

<div id="article">  
 

<div style="background-image:url(images/texture_image.png)"><br/>
<h2>Feedback Form</h2><br/></div><br/>



<form action="feed_submit.php" method="POST" style="background-image:url(images/asdf.png)"><br />

<p>Your name: </p>
<input type="text" name="fn"  id="fn" style="margin-left:15px"><br>
<br>

<p>Your email: </p>
<input type="text" name="email" id="email" style="margin-left:15px"><br>
<br>

<p>Your comments: </p>
<textarea name="comments" rows="15" cols="50" style="margin-left:15px"></textarea><br><br>

<input type="submit" value="Submit" style="margin-left:15px">
 <br /><br /><br />
</form>
</div>




				</td>
			  <tr>
    <td width="1000" height="40" valign="top">
		
	</td>
  </tr>
	  </table>
  <tr>
    <td width="1000" class="line_border" valign="top"></td>
  </tr>

  <tr>
      
    <td width="1000" height="120" valign="top" class="bg_brown">
	
  <div id="translation">
	</div> 

<div id="article">  
 
	
		<div class="left">
			<!--<a href="myindex.php">Publications</a>-->
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
</div>		
		
		</td>
	</td>
  </tr>
  <tr>
    <td width="1000" height="60" valign="top">
	
	</td>
  </tr>
</table>
</tr>

               
    </body>
</html>