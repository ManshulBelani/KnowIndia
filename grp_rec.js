// JavaScript Document
function gr_func1()
{
document.getElementById("g1").innerHTML=document.getElementById("rec1").innerHTML;
}

function gr_func2()
{
document.getElementById("g1").innerHTML=document.getElementById("rec2").innerHTML;	
}

function gr_func3()
{
document.getElementById("g1").innerHTML=document.getElementById("rec3").innerHTML;	
}

function gr_func4()
{	var x=document.getElementById("g1").innerHTML;
 // document.write(x);
  document.location.href="gr_rs.php?pid="+x;
}

function gr_func5()
{
document.getElementById("g1").innerHTML=document.getElementById("rec4").innerHTML;	
}

function gr_func6()
{
document.getElementById("g1").innerHTML=document.getElementById("rec5").innerHTML;	
}
/*
function gr_func()
{
//	document.write("hi");
document.getElementById("rec1").innerHTML="g1";
document.getElementById("rec2").innerHTML="g2";
document.getElementById("rec3").innerHTML="g3";
document.getElementById("rec4").innerHTML="g4";
}*/