<!--!DOCTYPE html>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <!--html lang="en"-->
    <head>
        
        
        
        
        
        
<!--        <script type="text/javascript"
        src="http://www.google.com/jsapi"></script> -->
<script type="text/javascript">

 // Initialize version 1.0 of Google AJAX API
 google.load("language", "1");

 function translate(lang) {
   var source = document.getElementById("article").innerHTML;
   var len = source.length;

   // Google Language API accepts 500 characters per request 
   var words = 500;

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

<script type="text/javascript">

function validateform()
{
	var x=document.forms["myform"]["am"].value;
	//var log=<? session_start(); echo $_SESSION['user']?>;
	//alert('log');
//	var y=document.forms["myform"]["curr"].value;
	//var c=document.forms["myform"]["mode"].value;
	
	if(x == "" || x == null)
	{
		document.getElementById("am").style.backgroundColor = "#093";
		alert("You can`t leave the coloured fields blank");
		return false;
	}
	
  
   /*if(y == "" || y == null)
   {
        document.getElementById("curr").style.backgroundColor = "#093";
        alert("You can`t leave the coloured fields blank");
		return false;
   }
   
  if( c == "" || c == null)
  {
   document.getElementById("mode").style.backgroundColor = "#093";
   alert("You can`t leave the coloured fields blank");
		return false;
  }*/
}



function chckamt()
{
	
	var k=document.forms["myform"]["am"].value;
    
	var i=0;
	var flag=1;
		if(k.length>=0)
	{
		for(i=0;i<k.length;i++)
		{
			
			if((k.charCodeAt(i)>=48)&&(k.charCodeAt(i)<=57))
			{

				flag=0;
			}
			else 
			flag=1;
		}
		}
		if(flag==1)
		{ alert("Invalid Amount");
		}
}

 </script>


</head>
<link rel="stylesheet" type="text/css" href="asd.css" />
<body onload="timeMsg();">
<?php include("translator.php"); ?>




<!--
<div id="translation"> <a href="#" onclick="original();">Switch to English</a>
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
</select>
</div>


<div id="article">

-->


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
<div style="background-image:url(images/texture_image.png);"><br/>
<h2>Donation</h2><br/></div><br/>


<form name="myform" action="donation_db.php" onsubmit="validateform()" id="formdiv" style="background-image:url(images/asdf.png);" method="post"><br>
	
	   
	<p>Amount </p>
	<input type="text" id="am" name="amount" style="margin-left:15px" onClick="style.opacity=0.4" onChange="chckamt()" /><br /><br /> 
	
	
	
	
    <p>Currency </p>
	<select name="domain" onFocus="style.opacity=0.4" style="margin-left:15px" />
	<option value="Rupees">Rupees</option>
	<option value="Dollar">Dollar</option>
	<option value="Pound">Pound</option>
	<option value="Euro">Euro</option>
	<option value="Franc">Franc</option>
	</select><br />
	<br /> 
	
   
	
	<p>Mode of Payment </p>
	<select name="sq" onFocus="style.opacity=0.4"style="margin-left:15px">
	<option value="Cash">Cash</option>
	<option value="Cheque">Cheque</option>
	<option value="Draft">Draft</option>
	
	</select><br /><br />
	<input type="submit" name="submit" value="Make Payment"  style="margin-left:15px"/>
	<input type="button" name="cancel" value="cancel" />
    <br /><br /><br />
</form><br />
</div>


				</td>
		
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
</table>
<!--</div>-->
</body>
</html>
