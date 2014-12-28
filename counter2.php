<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT LANGUAGE="JavaScript">
<!--
 function nameDefined(ckie,nme)
{
   var splitValues
   var i
   for (i=0;i<ckie.length;++i)
   {
      splitValues=ckie[i].split("=")
      if (splitValues[0]==nme) return true
   }
   return false
}

function delBlanks(strng)
{
   var result=""
   var i
   var chrn
   for (i=0;i<strng.length;++i) {
      chrn=strng.charAt(i)
      if (chrn!=" ") result += chrn
   }
   return result
}
function getCookieValue(ckie,nme)
{
   var splitValues
   var i
   for(i=0;i<ckie.length;++i) {
      splitValues=ckie[i].split("=")
      if(splitValues[0]==nme) return splitValues[1]
   }
   return ""
}
function insertCounter() {
 readCookie()
 displayCounter()
}
 function displayCounter() {
 document.write('<H3 ALIGN="CENTER">')
 document.write("You're visitor no. ")
 if(counter==1) document.write("1")
 else document.write(counter)
 document.writeln('</H3>')
 }
function readCookie() {
 var cookie=document.cookie
 counter=0
 var chkdCookie=delBlanks(cookie)  //are on the client computer
 var nvpair=chkdCookie.split(";")
 if(nameDefined(nvpair,"pageCount"))
 counter=parseInt(getCookieValue(nvpair,"pageCount"))
 ++counter
 var futdate = new Date()
 var expdate = futdate.getTime()
 expdate += 3600000 * 24 *30  //expires in 1 hour
 futdate.setTime(expdate)

 var newCookie="pageCount="+counter
 newCookie += "; expires=" + futdate.toGMTString()
 window.document.cookie=newCookie
}
// -->
</SCRIPT>
</head>

<body>
<SCRIPT LANGUAGE="JavaScript">
<!--
insertCounter()
// -->
</SCRIPT>
</body>
</html>