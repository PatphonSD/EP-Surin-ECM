<?
	ob_start() 
?>
<?
	session_start();
?>
<?php
	date_default_timezone_set('Asia/Krasnoyarsk'); 
?>
<?
		include( "include/function.php");
		$dblink = connect_db();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>เว็บจัดการแข่งขันกอล์ฟ ออนไลน์</title>

  <meta charset = "tis-620">
  <meta http-equiv=Content-Type content="text/html; charset=tis-620">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="เว็บจัดการแข่งขันกอล์ฟ ออนไลน์">
  <meta name="Description" content="เว็บจัดการแข่งขันกอล์ฟ ออนไลน์">
 </head>
  <?
	if($_SESSION['status'] != "")
	{
		echo "<center>Please Login!";
		exit();
	}

	$strSQL = "SELECT * FROM member WHERE Username = '".$_SESSION['Username']."' ";
	$objQuery = mysqli_query($dblink,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<center>
<table  class="mytable" cellpadding="0" cellspacing="0" border="0">
<?
	if($_SESSION["status"] == "Admin"){
		$colspan1="4";
		$colspan2="3";
	}else{
		$colspan1="3";
		$colspan2="2";
	}
?>

<? //check page
	$page = $_REQUEST['page'];
	$bgpage1 = "#E6E6E6";
	$bgpage2 = "#E6E6E6";
	$bgpage3 = "#E6E6E6";
	$bgpage4 = "#E6E6E6";
	$bgpage5 = "#E6E6E6";
	$bgpage6 = "#E6E6E6";
	$bgpage7 = "#E6E6E6";
	$bgpage8 = "#E6E6E6";
	$bgpage9 = "#E6E6E6";

	if($page == "1" ){
		$bgpage1 = "#A4A4A4"; 
	}elseif($page == "2"){
		$bgpage2 = "#A4A4A4"; 
	}elseif($page == "3"){
		$bgpage3 = "#A4A4A4"; 
	}elseif($page == "4"){
		$bgpage4 = "#A4A4A4"; 
	}elseif($page == "5"){
		$bgpage5 = "#A4A4A4"; 
	}elseif($page == "6"){
		$bgpage6 = "#A4A4A4"; 
	}elseif($page == "7"){
		$bgpage7 = "#A4A4A4"; 
	}elseif($page == "8"){
		$bgpage8 = "#A4A4A4"; 
	}elseif($page == "9"){
		$bgpage9 = "#A4A4A4"; 
	}
?>
	<tr>
		<td colspan="3" valign="bottom"><br>สวัสดีค่ะ  คุณ <font color="blue"> <? echo $objResult["Name"];	?></font> &nbsp;&nbsp;
			<a href="logout.php"><font color="red">Logout</a></font><br>คุณเข้าระบบในฐานะ <font color="blue"><?=$objResult["Status"]?></font>
		</td>
		<td valign="bottom" align="center"><a href="../Myschool/manager_page.php">
			<img src="pic/home.png" width="" height="40" border="0" alt="Home"></a>
		</td>
		<td colspan="3" align="right"><img src="picture_member/<?=$objResult["picture"];?>" width="120" height="" border="1" alt=""></td>
</tr>

<tr height="30"> 
		<td  align="center" bgcolor="<?=$bgpage1;?>"><a href="manager1-1.php?page=1">ระบบงานทะเบียน</a></td>
		<td  align="center" bgcolor="<?=$bgpage2;?>"><a href="manager2-1.php?page=2">ระบบงานการเงิน</a></td>
		<td  align="center" bgcolor="<?=$bgpage3;?>"><a href="manager3-1.php?page=3">ระบบงานทวิภาคี</a></td>
		<td  align="center" bgcolor="<?=$bgpage4;?>"><a href="manager4-1.php?page=4">ระบบงานสารบรรณ</a></td>
		<td  align="center" bgcolor="<?=$bgpage5;?>"><a href="manager5-1.php?page=5">แผนกวิชา/สาขาวิชา</a></td>
		<td  align='center' bgcolor="<?=$bgpage6;?>"><a href='manager6-1.php?page=6'></a>แก้ไขข้อมูลส่วนตัว</td>
		<td  align='center' bgcolor="<?=$bgpage7;?>"><a href='manager7-1.php?page=7'></a>เพิ่ม USER</td>
</tr>
</table>
