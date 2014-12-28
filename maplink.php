<!-- 

	Seth Duffey

	sethduffey@gmail.com

-->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title></title>



<style media="all" type="text/css">

/* GENERAL CSS */

body {

	text-align:center;

	font-family:"Trebuchet ms",Arial,Helvetica,sans-serif;

	font-size:.9em;

	/*background:#f8f8f8;*/

	color:#000;

}

h1,h2 {

	margin:0px;

	text-align:left;

	font-size:1.2em;

	color:#444;

}

h2 {

	color:#666;

	font-size:1em;

}

#holder {

	width:620px;

	margin:10px auto;

	text-align:left;

}



/* START OF CSS FOR MAP */

dl.map.on {

	position:relative;

	width:525px;

	height:600px;

	background:url(images/map.gif) no-repeat;

	text-align:left;

	margin:0px;

	padding:0px;

	border:#999 1px solid;

}

dl.map.on dt {

	list-style:none;

	display:inline;

}

dl.map.on dd {

	position:absolute;

	left:-9999px;

	width:200px;

	padding:4px;

	border:#222 2px solid;

	background:#666;

	-moz-border-radius:8px;

	border-radius:8px;

	z-index:11;

	font-size:0.8em;

	color:#FFF;

}



dl.map.on a.location {

	display:block;

	position:absolute;

	text-indent:-9999px;

	/*background:url(point.png) no-repeat;*/

	width:10px;

	height:10px;

	outline:none;

	z-index:10;

	text-decoration:none;

}

dl.map.on a.location:hover {

	background:url(file:///C|/Users/manshul/Desktop/point-hover.png) no-repeat -1px -1px;

}





/* START OF CSS FOR MAP POINTS */

dl.map.on a#location01 {

	top:175px;

	left:167px;

}

dl.map.on a#location02 {

	top:203px;

	left:174px;

}

dl.map.on a#location03 {

	top:250px;

	left:206px;

}

dl.map.on a#location04 {

	top:274px;

	left:169px;

}

dl.map.on a#location05 {

	top:257px;

	left:302px;

}

dl.map.on a#location06 {

	top:298px;

	left:160px;

}

dl.map.on a#location07 {

	top:340px;

	left:326px;

}

dl.map.on a#location08 {

	top:290px;

	left:91px;

}

dl.map.on a#location09 {

	top:335px;

	left:140px;

}

dl.map.on a#location10 {

	top:345px;

	left:130px;

}

dl.map.on a#location11 {

	top:367px;

	left:85px;

}

dl.map.on a#location12 {

	top:425px;

	left:135px;

}

dl.map.on a#location13 {

	top:440px;

	left:150px;

}

dl.map.on a#location14 {

	top:439px;

	left:105px;

}

dl.map.on a#location15 {

	top:495px;

	left:215px;

}

dl.map.on a#location16 {

	top:528px;

	left:201px;

}

</style>

	

<script type="text/javascript" src="mapevents.js"></script>

</head>



<body>







<div id="holder">

<!--<h1>A More Accessible Map</h1>

<h2>

	The World's Ten Most Populated Cities

	<br />

	Third Example With Map Turned &quot;on&quot; by JavaScript



</h2>-->

<dl class="map">



	<dt><a href="http://en.wikipedia.org/wiki/Delhi" class="location" id="location01">Delhi</a></dt>

	<dd>

		<strong>Delhi</strong> with monuments like Qutab Minar,Red Fort,Humayun 
Tomb.
	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Agra" class="location" id="location02">Agra</a></dt>

	<dd>

		<strong>Agra</strong> adorned with monuments like Fatehpur Sikri, the Agra Fort and one of the seven wonders of world, the Taj Mahal.

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Khajuraho_Group_of_Monuments" class="location" id="location03">Khajuraho</a></dt>

	<dd>

		<strong>Khajuraho, Madhya Pradesh</strong> considered to be one of the seven wonders of India Khajuraho has the largest group of medieval Hindu and Jain temples.

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Sanchi" class="location" id="location04">Sanchi ,Madhya Pradesh</a></dt>

	<dd>

		<strong>Sanchi, Madhya Pradesh</strong> 'Great Stupa' at Sanchi, the oldest stone structure in India and one of the important places of Buddhist pilgrimage.

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Bodh_Gaya" class="location" id="location05">Bodh Gaya, Bihar</a></dt>

	<dd>

		<strong>Bodh Gaya, Bihar</strong> a religious site and place of pilgrimage associated with the Mahabodhi Temple Complex in Gaya district is famous for being the place where Gautama Buddha is said to have obtained Enlightenment (Bodhimandala).

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Bhimbetka" class="location" id="location06">Bhimbetka, Madhya Pradesh</a></dt>

	<dd>

		<strong>Bhimbetka, Madhya Pradesh</strong> an archaeological World Heritage site, the Bhimbetka shelters exhibit the earliest traces of human life in India.

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Sun_Temple,_Konârak" class="location" id="location07">Sun Temple, Konark</a></dt>

	<dd>

		<strong>Sun Temple, Konark</strong> one of the most renowned temples in India is a World Heritage Site and is one of the Seven Wonders of India. It is a mix of Orissan and Dravidian styles of architecture. 

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Champaner-Pavagadh_Archaeological_Park" class="location" id="location08">Champaner-Pawangarh, Gujarat</a></dt>

	<dd>

		<strong>Champaner-Pawangarh, Gujarat</strong> a UNESCO World Heritage Site which is a concentration of largely unexcavated archaeological, historic and living cultural heritage properties cradled in an impressive landscape which includes prehistoric (chalcolithic) sites

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Ajanta_Caves" class="location" id="location09">Ajanta, Maharashtra</a></dt>

	<dd>

		<strong>Ajanta, Maharashtra</strong> ware 29 rock-cut cave monuments which date from the 2nd century BCE. The caves include paintings and sculptures considered to be masterpieces.

	</dd>

	

	<dt><a href="http://en.wikipedia.org/wiki/Ellora_Caves" class="location" id="location10">Ellora, Maharashtra</a></dt>

	<dd>

		<strong>Ellora, Maharashtra</strong> the epitome of Indian rock-cut architecture, is a group 34 "caves" – actually structures excavated out of the vertical face of the Charanandri hills. 

	</dd>
    
    

   <dt><a href="http://en.wikipedia.org/wiki/Elephanta_Caves" class="location" id="location11">Elephanta, Maharashtra</a></dt>

	<dd>

		<strong>Elephanta, Maharashtra</strong> network of sculpted caves consists of two groups of caves—the first is a large group of five Hindu caves, the second, a smaller group of two Buddhist caves.

	</dd>

    

   <dt><a href="http://en.wikipedia.org/wiki/Pattadakal" class="location" id="location12">Pattadakal, Karnataka</a></dt>

	<dd>

		<strong>Pattadakal, Karnataka</strong> is a village in Karnataka well known for its historic temples.

	</dd>
    

   <dt><a href="http://en.wikipedia.org/wiki/Hampi" class="location" id="location13">Hampi, Karnataka</a></dt>

	<dd>

		<strong>Hampi, Karnataka</strong> an important religious centre, housing the Virupaksha Temple, as well as several other monuments belonging to the old city.

	</dd>
    

   <dt><a href="http://en.wikipedia.org/wiki/Goa" class="location" id="location14">Goa</a></dt>

	<dd>

		<strong>Goa</strong> renowned for its beaches, places of worship and world heritage architecture

	</dd>
    

   <dt><a href="http://en.wikipedia.org/wiki/Mahabalipuram" class="location" id="location15">Mahabalipuram, Tamil Nadu</a></dt>

	<dd>

		<strong>Mahabalipuram, Tamil Nadu</strong> as various historic monuments built largely between the 7th and the 9th centuries, and has been classified as a UNESCO World Heritage Site.

	</dd>
    

   <dt><a href="http://en.wikipedia.org/wiki/Thanjavur" class="location" id="location16">Thanjavur, Tamil Nadu</a></dt>

	<dd>

		<strong>Thanjavur, Tamil Nadu</strong> has most of the Great Living Chola Temples which are UNESCO World Heritage Monuments.

	</dd>


</dl>







</div>



</body>

</html>
