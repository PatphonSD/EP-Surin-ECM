<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  <script>
function hiddenn(pvar) {
if(pvar==0){
document.getElementById("txt1").style.display = 'none';
}else{
document.getElementById("txt1").style.display = '';
}
 
}
</script>
<body onload="hiddenn('0')">
EMS
<form>
<input type="radio" name="type" value="sendme" onclick="hiddenn('0')" /> Send Me<br />
<input type="radio" name="type" value="other"  onclick="hiddenn('1')" /> Other
<input type="text" name="txt1" id="txt1" />
 
</form>
 </body>
</html>
