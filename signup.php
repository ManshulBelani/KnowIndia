
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


<script type="text/javascript">

function validateform()
{
	var x=document.forms["myform"]["fn"].value;
	var y=document.forms["myform"]["ln"].value;
	var a=document.forms["myform"]["state"].value;
    var b=document.forms["myform"]["cotry"].value;
	var c=document.forms["myform"]["ctry"].value;
	var d=document.forms["myform"]["pcode"].value;
	var e=document.forms["myform"]["email"].value;
	var f=document.forms["myform"]["passwd"].value;
	var g=document.forms["myform"]["rpasswd"].value;
	var i=document.forms["myform"]["ans"].value;
	
	if(x == "" || x == null)
	{
		document.getElementById("fname").style.backgroundColor = "#093";
		alert("You can`t leave the coloured fields blank");
		return false;
	}
	
  
   if(y == "" || y == null)
   {
        document.getElementById("lname").style.backgroundColor = "#093";
        alert("You can`t leave the coloured fields blank");
		return false;
   }
   if(a == "" || a == null)
   {
  document.getElementById("state").style.backgroundColor = "#093";
  alert("You can`t leave the coloured fields blank");
		return false;
  }
  if( b == "" || b == null)
  {
   document.getElementById("cotry").style.backgroundColor = "#093";
   alert("You can`t leave the coloured fields blank");
		return false;
  }
  if( c == "" || c == null)
  {
   document.getElementById("ctry").style.backgroundColor = "#093";
   alert("You can`t leave the coloured fields blank");
		return false;
  }
 if( d == "" || d == null)
 {
 document.getElementById("pcode").style.backgroundColor = "#093";
 alert("You can`t leave the coloured fields blank");
		return false;
  }
 if( e == "" || e == null)
 {
 document.getElementById("email").style.backgroundColor = "#093";
 alert("You can`t leave the coloured fields blank");
		return false;
 }
 if( f == "" || f == null)
 {
 document.getElementById("passwd").style.backgroundColor = "#093";
 alert("You can`t leave the coloured fields blank");
		return false;
 }
if( g == "" || g == null)
{
 document.getElementById("rpasswd").style.backgroundColor = "#093";
 alert("You can`t leave the coloured fields blank");
		return false;
}

if( i == "" || i == null)
{
 document.getElementById("ans").style.backgroundColor = "#093";
 alert("You can`t leave the coloured fields blank");
		return false;
}

}



/*function checkday()
{
var j=document.forms["myform"]["day"].value;
  if(j>31 || j<1)
     {
	 document.getElementById("day").style.backgroundColor = "#990000";
	 alert("write correct date");
	 return false;
	 }
}



function checkyr()
{
var k=document.forms["myform"]["year"].value;
  if(year>2010 || year<1911)
     {
	 document.getElementById("year").style.backgroundColor = "#990000";
	 alert("write correct date");
	 return false;
	 }
}*/


function chkmail()
{
	var n=document.forms["myform"]["email"].value;
    var i=0;
	var flag=1;
	 
	 if(n.length>=0)
	{
//			alert("hi");
			if(((n.charCodeAt(0)>=65)&&(n.charCodeAt(0)<=90))||((n.charCodeAt(0)>=97)&&(n.charCodeAt(0)<=122)))
						{
         							//alert("hi");
										flag=0;

			            }
		//	else 
			   
			    if(flag==0)
				{
				for(i=1;i<n.length;i++)
		            {
						if(((n.charCodeAt(i)>=48)&&(n.charCodeAt(i)<=57))||((n.charCodeAt(i)>=65)&&(n.charCodeAt(i)<=90))||((n.charCodeAt(i)>=97)&&(n.charCodeAt(i)<=122))||(n.charCodeAt(i)==46)||(n.charCodeAt(i)==95))
							{
							flag=0;
							}
						else {
							flag=1;
							break;
							}
					}
			   }
		//document.write(flag);
	}
//	document.write(flag);
	if(flag==1)
		{ alert("Invalid Id");
		}
}	










function chckpcode()
{
	
	var k=document.forms["myform"]["pcode"].value;
    
	var i=0;
	var flag=1;
	//document.write(k.charCodeAt(0));
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
		//document.write(flag);
	}
	//document.write(flag);
	if(flag==1)
		{ alert("Invalid Pincode");
		}
}


function chckpasswd()
{
var l=document.forms["myform"]["passwd"].value;
var m=document.forms["myform"]["rpasswd"].value;
if(l!=m)
  {
  //  document.getElementById("rpasswd").style.backgroundColor = "#990000";
//	alert("Both Passwords should be same");
  //  return false;
  document.getElementById("asd").innerHTML = 'Password Mismatch !!';
  }
  else
  document.getElementById("asd").innerHTML='Password match';
} 

function validatepasswd()
{
	var a= document.forms["myform"]["passwd"].value;
    //var i=0;
	var flag=1;
	if(a.length>=0)
	{  
		if((a.charCodeAt(0)==75)||(a.charCodeAt(0)==107))
		{
		
			if((a.charCodeAt(1)==78)||(a.charCodeAt(1)==110))
			{
		
			if((a.charCodeAt(2)==79)||(a.charCodeAt(2)==111))
				{
		
					if((a.charCodeAt(3)==87)||(a.charCodeAt(3)==119))
					{
		
					flag=0;
					}
				}
			}
		}
		else
		{flag=1;}
	}
	else 
	flag=1;

	
if(flag==1)
	{ alert("Invalid password");
		}
}


function strength()
{  
var a=document.myform.passwd.value;
if (a.length<6)
{
document.getElementById("notice").innerHTML="Strength:Poor";
}
else if ( a.length>=6 && a.length<=9)
{
document.getElementById("notice").innerHTML="Strength:Normal";
}
else
{
document.getElementById("notice").innerHTML="Strength:Excellent";
}
}




function validateuname()
{
	var a= document.forms["myform"]["lname"].value;
    //var i=0;
	var flag=1;
	if(a.length>=0)
	{  
		if((a.charCodeAt(0)==75)||(a.charCodeAt(0)==107))
		{
		
			if((a.charCodeAt(1)==78)||(a.charCodeAt(1)==110))
			{
		
			if((a.charCodeAt(2)==79)||(a.charCodeAt(2)==111))
				{
		
					if((a.charCodeAt(3)==87)||(a.charCodeAt(3)==119))
					{
		
					flag=0;
					}
				}
			}
		}
		else
		{flag=1;}
	}
	else 
	flag=1;

	
if(flag==1)
	{ alert("Invalid username");
		}
}
</script>



</head>
<link rel="stylesheet" type="text/css" href="asd.css" />
<body>


 <div class="left" style="padding-top:40px; padding-bottom:20px; padding-left:129px">
        
       <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>				
		</div>
		<div class="right" style="padding-top:40px; padding-right:129px">
         <ul class="kwicks">  
     <li id="kwick1"><a href="index.php">Home</a></li>  
     <li id="kwick2"><a href="about.php">Heritage</a></li>  
     <li id="kwick3"><a href="list/index.php">List</a></li>  
     <li id="kwick4"><a href="#">Search</a></li>  

 </ul>  

	</div>    
    
    <table width="1000" border="0" cellspacing="0" cellpadding="0" height="100%"  style="padding-left:129px">
  <tr>
    <!--<td width="1000" height="90" valign="top" class="top">
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
<div style="background-image:url(images/texture_image.png)"><br/>
<h2>Sign Up</h2><br/></div><br/>

<form name="myform" action="members_db.php" onsubmit="validateform()" id="formdiv" style="background-image:url(images/asdf.png)" method="post"><br>
<table width="1000" border="0" height="100">
  <tr>
    <td width="500" height="100" valign="top">	<h2 align="left"> Personal Information:</h2><br/>
	 
	<p>Name </p><input type="text"  id="fname" name="fn"  onClick="style.opacity=0.4" style="margin-left:15px" /><br /><br />
	<p>User name</p> <input type="text"  id="lname" name="ln"    onClick="style.opacity=0.4" style="margin-left:15px"/><br /><br />
	<p>Gender </p><select name="Gender" style="margin-left:15px">
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select><br /><br />
	
     <p> Are you a volunteer?</p>	
<input type="radio" name="op" value="Yes" style="margin-left:15px" /> Yes
<input type="radio" name="op" value="No" checked="checked"/>No<br/>
<br/>
 

	   
	<p>Street </p>
	<input type="text" name="strt" id="strt" onClick="style.opacity=0.4" style="margin-left:15px"/><br /><br /> 
	
    <p>City </p>
	<input type="text" name="ctry" id="ctry" onClick="style.opacity=0.4"style="margin-left:15px" /><br /><br /> 
	
    <p>State </p>
	<input type="text" name="state" id="state" onClick="style.opacity=0.4" style="margin-left:15px"/><br /><br /> 
	  
    <p>Country </p>
	<input type="text" name="cotry" id="cotry" onClick="style.opacity=0.4" style="margin-left:15px"/><br /><br /> 
	
  
    <p>Postal code </p>
	<input type="text" name="pcode" id="pcode" onClick="style.opacity=0.4" onChange="chckpcode()" style="margin-left:15px"/><br /><br />

   <br />
</td>
    <td width="500" height="100" valign="top">   <h2 align="left"> Contact:</h2><br/>
	
	
	
    <p>Email ID </p>
	<input type="text" style="margin-left:15px" name="email" id="email"  onChange="chkmail()">@<select name="domain" onFocus="style.opacity=0.4" style="margin-left:15px"/>
	<option value="gmail.com">gmail.com</option>
	<option value="yahoo.co.in">yahoo.co.in</option>
	<option value="yahoo.com">yahoo.com</option>
	<option value="hotmail.com">hotmail.com</option>
	<option value="rediffmail.com">rediffmail.com</option>
	</select><br />
	<br /> 
	
    <p>Password: </p><input type="password" name="passwd" id="passwd" onClick="style.opacity=0.4" onChange="validatepasswd()"style="margin-left:15px" /><br /><br /> 
	<p>Re-enter password: </p><input type="password" name="rpasswd" id="rpasswd" onChange="chckpasswd()"  onclick="style.opacity=0.4"  style="margin-left:15px"/>
	<p id='asd'>
    </p>
	<br /><br />
	
	
	<p>Security Question </p>
	<select name="sq" style="margin-left:15px"onFocus="style.opacity=0.4">
	<option value="What is the name of your first school?">What is the name of your first school?</option>
	<option value="What is the name of your first teacher?">What is the name of your first teacher?</option>
	<option value="What is the name of your hometown?">What is the name of your hometown?</option>
	<option value="What is the name of your mother?">What is the name of your mother?</option>
	</select><br /><br />
	<p>Answer </p>
	<input type="text" name="ans" id="ans" style="margin-left:15px"onClick="style.opacity=0.4" /><br /><br /><br> <br /><br /><br><br /><br /><br><br /><br /><br>
	<input type="submit" name="submit" value="Create my account" style="margin-left:15px" />
	<input type="button" name="cancel" value="cancel" />
	
	
</td>
  </tr>
</table>
<br /><br /><br />

</form>




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
	</td>
  </tr>
  <tr>
    <td width="1000" height="60" valign="top">
	
	</td>
  </tr>
</table>

        
        
    </body>
</html>
