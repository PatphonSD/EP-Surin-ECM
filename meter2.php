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
		include( "include/date.php");
		include( "include/array.php");
		@ini_set('display_errors', '0');  //?????? err
?>

<style>
::-webkit-input-placeholder { /* Edge */
  color: #d4d4d4;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: #d4d4d4;
}

::placeholder {
  color: #d4d4d4;
}
</style>
<p id="rcorners1">เพิ่มข้อมูลมิเตอร์</p>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<table width="600" border="0">
<form name="form1" method="post" action="screen.php">
	<input type="hidden" name="action" value="meter2">
	<input type="hidden" name="action2" value="save">


<?
	if($_REQUEST['action2'] == 'save'){
		$strIn = "INSERT INTO `smart_meter_code` (`meter_code`, `meter_name`, `meter_qrcode`, `meter_linetoken`, `meter_customer`, `meter_detail`) VALUES ('".$_REQUEST['meter_code']."', '".$_REQUEST['meter_name']."', '', '', '', '')";
			$queryIn = mysqli_query($dblink,$strIn);

		if($queryIn){
			header("location:screen.php?action=meter");	
		}else{	
			echo "<font color='red'>******Update data not complete*******</font>";
		}
	}
?>	

<tr>
	<td width="25%" align="right"> รหัส : &nbsp;&nbsp;</td>
	<td width=""><input type="text" name="meter_code" style="width:230px" value="<?=$resultPrice['meter_code'];?>" required> </td>
</tr>
<tr>
	<td width="25%" align="right"> ชื่อมิเตอร์ : &nbsp;&nbsp;</td>
	<td width=""><input type="text" name="meter_name" style="width:230px" value="<?=$resultPrice['meter_name'];?>" required> </td>
</tr>

<tr>
	<td></td>
	<td colspan="3"><input type="submit" value="บันทึก"></td>
</tr>
</table>
</form>

<hr>