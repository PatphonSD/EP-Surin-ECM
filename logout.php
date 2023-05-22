<?
	ob_start() 
?>
<?
	session_start();
?>
<?php
	date_default_timezone_set('Asia/Bangkok'); 
?>
<?
		include( "include/function.php");
		$dblink = connect_db();
?>
<!DOCTY
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> Logout </title>
  <meta charset = "tis-620">
  <meta http-equiv=Content-Type content="text/html; charset=tis-620">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
<?
	session_destroy();
//********LOG*********///
	header("location:index2.php");
?>
<? mysqli_close($dblink);?>
 </body>
</html>
