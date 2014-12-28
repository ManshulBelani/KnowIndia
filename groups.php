<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="color.css" TYPE="text/css" REL="stylesheet">
<link rel="stylesheet" href="menustyle.css" type="text/css" media="screen" />
		<script type="text/javascript" src="jquery.min.js"></script>
<script type='text/javascript' src='kwicks.js'></script>
<script type='text/javascript' src='custom.js'></script>
<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="effects.js"></script>
<script type="text/javascript" src="side-bar.js"></script>
<script type="text/javascript" src="grp_rec.js"></script>

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
    <!--<td width="1000" height="90" valign="top" class="top">
	<div class="left" style="padding-top:20px; padding-bottom:20px">
        
        <h1 style=" font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:50px"><img src="images/logo.jpg" width="80" height="80"><img src="images/logoo.jpg" width="300" height="80"></h1>		
		</div>
		<div class="right" style="padding-top:20px">
><?php include("tabs.php"); ?>
	</div>
	</td>-->
  </tr>  <tr>
    <td width="1000" height="200" valign="top">	
		<div>
			<h2><br><br><br><br>Groups<br></h2>

The KnowIndia provides you with certain groups which can be joined on the basis of your interest.	</div><br><br>
	</td>
  </tr>
  
    <td width="1000" class="line_border" valign="top"></td>
  </tr>
<tr>
    <td width="1000" valign="top" height="25"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
		
			<table width="1000" border="0" cellspacing="0" cellpadding="0" height="100">
			  <tr>
				<td width="330" height="100" valign="top">
					
                    <table border="0">
 					 <tr>
    					<td><div id="grp1"><h3><div id="g1">ICCROM</div></h3><br>To test new information and methodologies in conservation, to advance teaching and learning strategies, and to identify new needs.<br></div><input name="" type="button" value="Join" onclick="gr_func4()"/><br><br></td>
 					 </tr>
  					 <tr>
    			<!--		<td><div id="grp2"><h3>Group2</h3><br>group agenda<br></div><input name="" type="button" value="Join" /></td> -->
  					</tr>
					</table>

                    
                    
                    
				</td>
				<td width="25" height="100" valign="top">&nbsp;</td>
				<td width="330" height="100" valign="top">
					<table border="0">
  					<tr>
    					<td>
    					<td></td>
 					 </tr></td>
  					</tr>
  					<tr>
    					<td>
    					<td></td>
 					 </tr></td>
  					</tr>
					</table>

					
					
					
				</td>
				<td width="25" height="100" valign="top">&nbsp;</td>
				<td width="235" height="100" valign="top">
					<div style="border:solid"><h2>Recommendations</h2>

 <div id="rec1" onClick="gr_func1()"><?php $i=1;  include("grp_rs.php"); ?></div><br>
    <div id="rec2" onClick="gr_func2()"><?php $i=2;  include("grp_rs.php"); ?></div><br>
    <div id="rec3" onClick="gr_func3()"><?php $i=3;  include("grp_rs.php"); ?></div><br>
<div id="rec4" onClick="gr_func5()"><?php $i=4;  include("grp_rs.php"); ?></div><br>
<div id="rec5" onClick="gr_func6()"><?php $i=5;  include("grp_rs.php"); ?></div><br>
    <br><br>


   
    <br><br>


	               </div>
	
    
				</td>
				<td width="15" height="100" valign="top">&nbsp;</td>
			  </tr>
			</table>
	
	
	</td>
  </tr>
  <tr>
    <td width="1000" valign="top" height="30">
    <br><br>
    <form action="groups_db.php" method="post" name="create_group">
                <table>
  <tr>
    <td><label>Group Name:</label></td>
    <td><input name="group_name" type="text"></td>
  </tr>
  <tr>
    <td><label>Group Agenda:</label></td>
    <td><input name="group_agenda" type="text"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="create_group" type="submit" value="Create Group"></td>
  </tr>
</table>

                </form>
                <br/><br/>
    </td>
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
    <td width="1000" height="60" valign="top" class="footer">
			</td>
  </tr>
</table>


</body>
</html>
