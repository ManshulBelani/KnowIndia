i =0;
//alert(i);
var a= new Array("bg/indiagate.jpg","bg/lotus.jpg","bg/sikri.jpg","bg/amber.jpg");
var l=a.length;
//alert(l);
function prev_img()
{
   //var a=new Array();
   //a=document.images.item(0);
  // var a= new Array("bg/indiagate.jpg","bg/lotus.jpg","bg/sikri.jpg","bg/amber.jpg");
   if(i==0)
   {document.getElementById("myImage").src=a[l-1];
   i=l-1;
   }
   else
   { document.getElementById("myImage").src=a[i-1];
   i--;
   }
   //document.write(a);
   //document.getElementById("left11").innerHTML="Hi";	
}
function timeMsg()
{
var t=setTimeout("next_img()",3000);
}
function next_img()
{
	if(i==(l-1))
	{document.getElementById("myImage").src=a[0];
	i=0;}
	else
	{document.getElementById("myImage").src=a[i+1];
	i++;}
	timeMsg();
}
