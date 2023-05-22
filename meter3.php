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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<?
	if($_REQUEST['action2'] == 'save'){
		echo $strUp = "UPDATE `smart_meter_code` SET `meter_name`= '".$_REQUEST['meter_name']."',`meter_qrcode`= '".$_REQUEST['meter_qrcode']."',`meter_linetoken`='".$_REQUEST['meter_linetoken']."',`meter_brance`='".$_REQUEST['meter_brance']."',`meter_detail`='".$_REQUEST['meter_detail']."' WHERE meter_code = '".$_REQUEST['meter_code']."'";
		$queryUp = mysqli_query($dblink,$strUp);
		header("location:screen.php?action=meter");
	}

?>



<?
	$strSel = "SELECT * FROM smart_meter_code WHERE meter_code = '".$_REQUEST['meter_code']."'";
	$querySel = mysqli_query($dblink,$strSel);
	$resultSel = mysqli_fetch_array($querySel);
?>




<p id="rcorners1"><font size="3" >แก้ไขข้อมูลมิเตอร์&nbsp;&nbsp;&nbsp;&nbsp;</font></p>
<form name="form2" method="post" action="screen.php">
	<input type="hidden" name="action" value="meter3">
	<input type="hidden" name="action2" value="save">
	<input type="hidden" name="meter_code" value="<?=$_REQUEST['meter_code'];?>">

<table width="600" border="0">
<?
	if($queryUptime){
		echo "<tr><td colspan='5'><font color='red'>******Update data complete*******</font></td></tr>";
	}
?>
<tr>
	<tr>
		<td width="25%" align="right">รหัส : &nbsp;&nbsp;</td>
		<td width=""><input type="text" style="width:230px" value="<?=$resultSel['meter_code'];?>" disabled></td>
	</tr>
	<tr>
		<td width="25%" align="right">ชื่ออมิเตอร์ : &nbsp;&nbsp;</td>
		<td width=""><input type="text" style="width:230px" name="meter_name" value="<?=$resultSel['meter_name'];?>" ></td>
	</tr>
	<tr>
		<td width="25%" align="right">Line Token : &nbsp;&nbsp;</td>
		<td width=""><input type="text" style="width:350px" name="meter_linetoken" value="<?=$resultSel['meter_linetoken'];?>" ></td>
	</tr>
	<tr>
		<td width="25%" align="right">อาคาร/ห้อง : &nbsp;&nbsp;</td>
		<td width=""><input type="text" style="width:230px" name="meter_brance" value="<?=$resultSel['meter_brance'];?>" ></td>
	</tr>
	<tr>
		<td width="25%" align="right">รายละเอียด : &nbsp;&nbsp;</td>
		<td width=""><input type="text" style="width:230px" name="meter_detail" value="<?=$resultSel['meter_detail'];?>" ></td>
	</tr>
</tr>

<tr>
	<td></td>
	<td colspan="3"><input type="submit" value="บันทึก"></td>
</tr>
</table>
</form>
<hr>