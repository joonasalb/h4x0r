var xmlHttp
function notify() {
  xmlHttp=GetXmlHttpObject1()
  if (xmlHttp==null) {
  alert ("O browser não suporta AJAX")
  return
} 
var url="./apl.php?query=timestamp&sid="+Math.random()
  xmlHttp.onreadystatechange=stateChanged1
  xmlHttp.open("GET",url,true)
  xmlHttp.send(null)
}
function stateChanged1() {
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
 // document.getElementById("notify").innerHTML=xmlHttp.responseText
 document.title=xmlHttp.responseText + " H4x0r ~ Hacking"
 }
}
function GetXmlHttpObject1() {
var xmlHttp=null;
  try {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
} catch (e) {
  // Internet Explorer
  try {
   xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
   xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
  return xmlHttp;
}