<html><head>

<title>News</title>



<style type="text/css">
<!--
BODY 		{ margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }


 /* FONT COLORS */


TABLE		{ COLOR: #000000; FONT: 14px arial, sans-serif; font-weight: normal }

.title		{ COLOR: #000000; FONT: 14px arial, sans-serif; font-weight: bold; }

#NewsDiv	{ position: absolute; left: 0; top: 0; width: 100% }

 /* PAGE LINK COLORS */

a:link		{ color: #0033FF; text-decoration: underline; }

a:visited	{ color: #6633FF; text-decoration: underline; }

a:active	{ color: #0033FF; text-decoration: underline; }

a:hover		{ color: #6699FF; text-decoration: none; }

-->
</style>



</head>

<BODY background="images/news_bg.jpg" TEXT="#000000" onMouseover="scrollspeed=0" onMouseout="scrollspeed=current" OnLoad="NewsScrollStart();">

<div id="NewsDiv">
<table cellpadding="5" cellspacing="0" border="0" width="100%"><tr><td>
<?php include("news_crawler.php") ?>





<!-- SCROLLER CONTENT STARTS HERE -->


<!--<span class="title">
Vault B of Sree Padmanabhaswamy Temple not to be opened now<br>
</span>
The Supreme Court on Thursday said the vault 'B' of the Sree Padmanabhaswamy Temple will be opened only after substantial work ...<br><a href="SAMPLE-frame.htm" target="_top">Read more</a>

<br><br><br>



<span class="title">
Heritage whitewashed in Fatehgarh Churian<br>
</span>
Precious frescos of Panj Temple in Fategharh Churian, which have immense heritage value and date back 180 years, are blissfully being whitewashed out of ignorance...<br><a href="SAMPLE-frame.htm" target="_top">Read more</a>

<br><br><br>





<span class="title">
Minutes of the First Meeting of the Finance Committee of  
National Mission on Monuments and Antiquities <br>
</span>
The first meeting of the Finance Committee of National Mission on 
Monuments and Antiquities was convened under the Chairmanship of A.S. & F.A., 
Ministry of Culture in his chamber in Shastri Bhawan, New Delhi, on 20
th December... 

 <br><a href="SAMPLE-frame.htm" target="_top">Read more</a>

<br>


-->
<!-- SCROLLER CONTENT ENDS HERE -->






</td></tr></table>
</div>




<!-- YOU DO NOT NEED TO EDIT BELOW THIS LINE -->




<script language="JavaScript" type="text/javascript">
<!-- HIDE CODE

var scrollspeed		= "1"		// SET SCROLLER SPEED 1 = SLOWEST
var speedjump		= "30"		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
var startdelay 		= "2" 		// START SCROLLING DELAY IN SECONDS
var nextdelay		= "0" 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
var topspace		= "2px"		// TOP SPACING FIRST TIME SCROLLING
var frameheight		= "500px"	// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH



current = (scrollspeed)


function HeightData(){
AreaHeight=dataobj.offsetHeight
if (AreaHeight==0){
setTimeout("HeightData()",( startdelay * 1000 ))
}
else {
ScrollNewsDiv()
}}

function NewsScrollStart(){
dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv")
dataobj.style.top=topspace
setTimeout("HeightData()",( startdelay * 1000 ))
}

function ScrollNewsDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-(scrollspeed)
if (parseInt(dataobj.style.top)<AreaHeight*(-1)) {
dataobj.style.top=frameheight
setTimeout("ScrollNewsDiv()",( nextdelay * 1000 ))
}
else {
setTimeout("ScrollNewsDiv()",speedjump)
}}



// END HIDE CODE -->
</script>


</body>
</html>
