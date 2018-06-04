var xmlHttp
function wosh() {
  xmlHttp=GetXmlHttpObject()
  if (xmlHttp==null) {
  alert ("O browser não suporta AJAX")
  return
} 
var url="./9woshtelkp1.php?query=timestamp&sid="+Math.random()
  xmlHttp.onreadystatechange=stateChanged
  xmlHttp.open("GET",url,true)
  xmlHttp.send(null)
}
function stateChanged() {
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
  document.getElementById("msg").innerHTML=xmlHttp.responseText
 }
}
function GetXmlHttpObject() {
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

function scroll(){
  $("body").scrollTop($("body")[0].scrollHeight);
}