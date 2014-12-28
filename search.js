// JavaScript Document
function open_search()
{ 
//document.getElementById("search").innerHTML="Hi";
var msg;

msg= '<form method="get" action="http://www.google.com/search"> <input type="text"   name="q" size="15" maxlength="255" value="" /> <input type="submit" value="Go" /> </form>';
document.getElementById("search").innerHTML=msg;
//document.getElementById("go").innerHTML=msg1;
}
function close_search()
{
document.getElementById("search").innerHTML="";
document.getElementById("go").innerHTML="";	
}