<?
 	if($_SESSION['Status'] == "")
	{
		//echo "<center>ปปปPlease Login!";
		//include( "../MyCollege/login.php");
		//exit();
	}

	$strSQL = "SELECT * FROM member WHERE Username = '".$_SESSION['Username']."' ";
	$objQuery = mysqli_query($dblink,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<center>
<table width="900" cellpadding="0" cellspacing="0" border="0">
<?
	if($_SESSION["Status"] == "Admin"){
		$colspan1="4";
		$colspan2="3";
	}else{
		$colspan1="4";
		$colspan2="2";
	}
?>
	<tr>
		<td colspan="4" valign="bottom" align="left"><br>สวัสดีค่ะ  คุณ <font color="blue"> <? echo $objResult["Name"];?> [ <?echo $_SESSION['schoolname'];?> ]</font> &nbsp;&nbsp;
			<a href="logout2.php" target="_parent"><font color="red">Logout</a>
			
			</font><br>คุณเข้าระบบในฐานะ <font color="blue"><?echo iconv('TIS-620', 'UTF-8',$_SESSION['Status']);?></font>
		</td>


<?
	if($objResult["picture"] == ""){
		$image01 = "none.jpg";
	}else{
		$image01 = $objResult["picture"];
	}
?>
		<td colspan="2" align="left"><img src="picture_member/<?=$image01;?>" width="80" height="" border="0" alt="" class="img3" id="Example_R"></td>
</tr>
</table>